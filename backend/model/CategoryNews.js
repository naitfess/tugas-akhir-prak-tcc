import Sequelize from 'sequelize';
import db from '../config/database.js';

const CategoryNews = db.define('category_news', {
    categoryId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'categories',
            key: 'id',
        },
        onDelete: 'CASCADE',
        primaryKey: true,
    },
    newsId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'news',
            key: 'id',
        },
        onDelete: 'CASCADE',
        primaryKey: true,
    },
}, {
    timestamps: false,
});

export default CategoryNews;