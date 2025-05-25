import Sequelize from 'sequelize';
import db from '../config/database.js';

const Category = db.define('categories', {
    id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: Sequelize.STRING,
        allowNull: false,
    },
}, {
    timestamps: true,
});

export default Category;