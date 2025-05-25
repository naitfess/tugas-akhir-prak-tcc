import News from '../model/News.js';
import Category from '../model/Category.js';
import multer from 'multer';
import path from 'path';
import dotenv from 'dotenv';
import fs from 'fs';
import { Op } from 'sequelize';
import { Storage } from '@google-cloud/storage';
dotenv.config();
const fe_url = 'https://fe-alung-ta-dot-b-01-450713.uc.r.appspot.com/src/views/';

const index = (req, res) => {
  res.redirect(`${fe_url}admin/news/index.html`);
};

const create = (req, res) => {
  res.redirect(`${fe_url}admin/news/create.html`);
};

const edit = (req, res) => {
  res.redirect(`${fe_url}admin/news/edit.html?id=${req.params.id}`);
}

// const storage = multer.diskStorage({
//   destination: (req, file, cb) => {
//     cb(null, 'public/uploads');
//   },
//   filename: (req, file, cb) => {
//     cb(null, Date.now() + '-' + file.originalname);
//   }
// });


const storage = new Storage({
  projectId: process.env.GCLOUD_PROJECT_ID,
  credentials: JSON.parse(process.env.GCLOUD_SERVICE_ACCOUNT_JSON)
});
const bucketName = process.env.GCLOUD_BUCKET_NAME; 

export const upload = multer({ storage: multer.memoryStorage() });

export const createNews = async (req, res) => {
  try {
    const { title, content, date } = req.body;
    let categoryIds = req.body['categoryIds[]'] || req.body.categoryIds;
    if (categoryIds && !Array.isArray(categoryIds)) categoryIds = [categoryIds];

    let imageUrl = null;
    if (req.file) {
      // Upload ke Google Cloud Storage
      const gcsFileName = Date.now() + '-' + req.file.originalname;
      const bucket = storage.bucket(bucketName);
      const file = bucket.file(gcsFileName);

      await file.save(req.file.buffer, {
        metadata: { contentType: req.file.mimetype },
        public: true,
        validation: 'md5'
      });

      imageUrl = `https://storage.googleapis.com/${bucketName}/${gcsFileName}`;
    } else {
      return res.status(400).json({ message: 'Image is required' });
    }

    if (categoryIds && categoryIds.length > 0) {
      const categories = await Category.findAll({ where: { id: categoryIds } });
      if (categories.length !== categoryIds.length) {
        return res.status(400).json({ message: 'One or more category IDs are invalid' });
      }
    }

    const news = await News.create({ title, content, image: imageUrl, date });

    if (categoryIds && categoryIds.length > 0) {
      await news.setCategories(categoryIds);
    }

    res.status(201).json({ message: 'News created successfully', data: news });
  } catch (error) {
    res.status(500).json({ message: 'Failed to create news', error: error.message });
  }
};

export const getAllNews = async (req, res) => {
  try {
    const { search } = req.query;
    const where = {};

    // Filter pencarian hanya pada title
    if (search) {
      where.title = { [Op.like]: `%${search}%` };
    }

    // Query dasar tanpa filter kategori
    let query = {
      where,
      include: {
        model: Category,
        through: { attributes: [] },
      },
      order: [['date', 'DESC']],
    };

    const newsList = await News.findAll(query);

    res.status(200).json(newsList);
  } catch (error) {
    res.status(500).json({ message: 'Failed to retrieve news', error: error.message });
  }
};

export const getRecentNews = async (req, res) => {
  try {
    const newsList = await News.findAll({
      include: {
        model: Category,
        through: { attributes: [] },
      },
      order: [['date', 'DESC']],
      limit: 3,
    });
    res.status(200).json(newsList);
  } catch (error) {
    res.status(500).json({ message: 'Failed to retrieve recent news', error: error.message });
  }
};

export const getNewsByCategory = async (req, res) => {
  try {
    const { categoryId } = req.params;
    const news = await News.findAll({
      include: {
        model: Category,
        through: { attributes: [] },
        where: { id: categoryId },
      },
    });
    if (news.length === 0) return res.status(404).json({ message: 'No news found for this category' });
    res.status(200).json(news);
  } catch (error) {
    res.status(500).json({ message: 'Failed to retrieve news', error: error.message });
  }
};

export const getNewsById = async (req, res) => {
  try {
    const { id } = req.params;
    const news = await News.findByPk(id, {
      include: {
        model: Category,
        through: { attributes: [] },
      },
    });

    if (!news) return res.status(404).json({ message: 'News not found' });

    res.status(200).json(news);
  } catch (error) {
    res.status(500).json({ message: 'Failed to retrieve news', error: error.message });
  }
};

export const updateNews = async (req, res) => {
  try {
    const { id } = req.params;
    const { title, content, image, date} = req.body;
    let categoryIds = req.body['categoryIds[]'] || req.body.categoryIds;
    if (categoryIds && !Array.isArray(categoryIds)) categoryIds = [categoryIds];

    const news = await News.findByPk(id);
    if (!news) return res.status(404).json({ message: 'News not found' });

    let imageUrl = req.body.image || null;
    if (req.file) {
      imageUrl = `${req.protocol}://${req.get('host')}/uploads/${req.file.filename}`;
      const oldImage = news.image;
      if (oldImage && oldImage !== imageUrl) {
        const oldImagePath = path.join('public', 'uploads', path.basename(oldImage));
        fs.unlink(oldImagePath, (err) => {
          if (err) console.error('Failed to delete old image:', err);
        });
      }
    } else if (!imageUrl) {
      imageUrl = news.image;
    }

    if (categoryIds && Array.isArray(categoryIds)) {
      const categories = await Category.findAll({ where: { id: categoryIds } });
      if (categories.length !== categoryIds.length) {
        return res.status(400).json({ message: 'One or more category IDs are invalid' });
      }
    }

    await news.update({ title, content, image: imageUrl, date });

    if (categoryIds && categoryIds.length > 0) {
      await news.setCategories(categoryIds);
    }

    res.status(200).json({ message: 'News updated successfully', data: news });
  } catch (error) {
    res.status(500).json({ message: 'Failed to update news', error: error.message });
  }
};

export const deleteNews = async (req, res) => {
  try {
    const { id } = req.params;
    const news = await News.findByPk(id);
    if (!news) return res.status(404).json({ message: 'News not found' });

    // Hapus file gambar jika ada
    if (news.image) {
      const imagePath = path.join('public', 'uploads', path.basename(news.image));
      fs.unlink(imagePath, (err) => {
        if (err) console.error('Failed to delete image:', err);
      });
    }

    await news.destroy();
    res.status(200).json({ message: 'News deleted successfully' });
  } catch (error) {
    res.status(500).json({ message: 'Failed to delete news', error: error.message });
  }
};

export const countNews = async (req, res) => {
  try {
    const count = await News.count();
    res.status(200).json({ count });
  } catch (error) {
    res.status(500).json({ message: 'Failed to count news', error: error.message });
  }
};

export { index, create, edit };