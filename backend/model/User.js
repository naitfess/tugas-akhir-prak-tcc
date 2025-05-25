import Sequelize from 'sequelize';
import db from '../config/database.js';

const User = db.define('users', {
  id: {
    type: Sequelize.INTEGER,
    autoIncrement: true,
    primaryKey: true,
  },
  name: {
    type: Sequelize.STRING,
    allowNull: false,
  },
  username: {
    type: Sequelize.STRING,
    allowNull: false,
  },
  password: {
    type: Sequelize.STRING,
    allowNull: false,
  },
  refresh_token: {
    type: Sequelize.TEXT,
    allowNull: true,
  },
}, {
  timestamps: true,
});

export default User;