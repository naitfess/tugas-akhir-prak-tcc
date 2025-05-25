import Sequelize from 'sequelize';
import db from '../config/database.js';

const News = db.define('news', {
    id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
    },
    title: {
        type: Sequelize.STRING,
        allowNull: false,
    },
    content: {
        type: Sequelize.TEXT,
        allowNull: false,
    },
    image: {
        type: Sequelize.STRING,
        allowNull: false,
    },
    date: {
        type: Sequelize.DATE,
        defaultValue: Sequelize.NOW,
    },
}, {
    timestamps: true,
});

export default News;

