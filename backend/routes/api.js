import express from 'express';
import * as NewsController from '../controller/NewsController.js';
import * as UserController from '../controller/UserController.js';
import * as CategoryController from '../controller/CategoryController.js';
import { upload } from '../controller/NewsController.js';
import { verifyToken } from '../middleware/verifyToken.js';
import { getAccessToken } from '../controller/TokenController.js';

const router = express.Router();

router.post('/login', UserController.login);
router.get('/get-logged-in-user', verifyToken, UserController.getLoggedInUser);

//user
router.get('/users', UserController.getAllUsers);
router.get('/users/count', verifyToken, UserController.countUsers);
router.get('/users/:id', verifyToken, UserController.getUserById);
router.post('/users', verifyToken, UserController.createUser);
router.delete('/users/:id', verifyToken, UserController.deleteUser);

//category
router.get('/categories', CategoryController.getAllCategories);
router.get('/categories/count', verifyToken,  CategoryController.countCategories);
router.get('/categories/:id', verifyToken,  CategoryController.getCategoryById);
router.post('/categories', verifyToken,  CategoryController.createCategory);
router.put('/categories/:id', verifyToken,  CategoryController.updateCategory);
router.delete('/categories/:id', verifyToken,  CategoryController.deleteCategory);

//news
router.get('/news', NewsController.getAllNews);
router.get('/news/recent', NewsController.getRecentNews);
router.get('/news/count', verifyToken,  NewsController.countNews);
router.get('/news/category/:categoryId', NewsController.getNewsByCategory);
router.get('/news/:id', NewsController.getNewsById);
// router.post('/news', NewsController.createNews);
router.put('/news/:id', verifyToken, upload.single('image'), NewsController.updateNews);
router.delete('/news/:id', verifyToken, NewsController.deleteNews);

router.post('/news', verifyToken, upload.single('image'), NewsController.createNews);

export default router;