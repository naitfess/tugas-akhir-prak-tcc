import Category from '../model/Category.js';
import News from '../model/News.js';
import dotenv from 'dotenv';
dotenv.config();
const fe_url = 'http://localhost:8080/tugas-akhir/frontend/src/views';

const index = (req, res) => {
  res.redirect(`${fe_url}/admin/category/index.html`);
};

export const createCategory = async (req, res) => {
  try {
    const { name } = req.body;

    if (!name) {
      return res.status(400).json({ message: 'Category name is required' });
    }

    const existingCategory = await Category.findOne({ where: { name } });
    if (existingCategory) {
      return res.status(409).json({ message: 'Category already exists' });
    }

    const newCategory = await Category.create({ name });
    res.status(201).json({ message: 'Category created', data: newCategory });
  } catch (error) {
    res.status(500).json({ message: 'Failed to create category', error: error.message });
  }
};

export const getAllCategories = async (req, res) => {
  try {
    const categories = await Category.findAll();
    res.status(200).json(categories);
  } catch (error) {
    res.status(500).json({ message: 'Failed to fetch categories', error: error.message });
  }
};

export const getCategoryById = async (req, res) => {
  try {
    const { id } = req.params;
    const category = await Category.findByPk(id);

    if (!category) {
      return res.status(404).json({ message: 'Category not found' });
    }

    res.status(200).json(category);
  } catch (error) {
    res.status(500).json({ message: 'Failed to fetch category', error: error.message });
  }
};

export const updateCategory = async (req, res) => {
  try {
    const { id } = req.params;
    const { name } = req.body;

    const category = await Category.findByPk(id);

    if (!category) {
      return res.status(404).json({ message: 'Category not found' });
    }

    category.name = name || category.name;
    await category.save();

    res.status(200).json({ message: 'Category updated', data: category });
  } catch (error) {
    res.status(500).json({ message: 'Failed to update category', error: error.message });
  }
};

export const deleteCategory = async (req, res) => {
  try {
    const { id } = req.params;
    const category = await Category.findByPk(id, {
      include: {
        model: News,
        through: { attributes: [] }, // Exclude the join table attributes
      },
    });

    if (!category) {
      return res.status(404).json({ message: 'Category not found' });
    }

    if (category.news.length > 0) {
      return res.status(400).json({ message: 'Cannot delete category with associated news' });
    }

    await category.destroy();
    res.status(200).json({ message: 'Category deleted' });
  } catch (error) {
    res.status(500).json({ message: 'Failed to delete category', error: error.message });
  }
};

export const countCategories = async (req, res) => {
  try {
    const count = await Category.count();
    return res.status(200).json({ count });
  } catch (error) {
    res.status(500).json({ message: 'Failed to count categories', error: error.message });
  }
};


export { index };