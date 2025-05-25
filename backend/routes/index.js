import express from 'express';
import * as PageController from '../controller/PageController.js';
import * as NewsController from '../controller/NewsController.js';
import * as UserController from '../controller/UserController.js';
import * as CategoryController from '../controller/CategoryController.js';

const router = express.Router();

router.get("/login", PageController.login);

router.get("/", PageController.index);
router.get("/news", PageController.index);
router.get('/news/:id', PageController.detail);
router.get('/admin', PageController.dashboard);
router.get('/admin/dashboard', PageController.dashboard);

router.get('/admin/news', NewsController.index);
router.get('/admin/news/create', NewsController.create);
router.get('/admin/news/edit/:id', NewsController.edit);

router.get('/admin/users', UserController.index);

router.get('/admin/categories', CategoryController.index);

export default router;