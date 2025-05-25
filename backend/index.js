import express from 'express';
import cors from 'cors';
import path from "path";
import { fileURLToPath } from 'url';
import route from './routes/index.js';
import api from './routes/api.js';
import db from './config/database.js';
import applyAssociations from './config/assoc_db.js';
import cookieParser from 'cookie-parser';
import dotenv from 'dotenv';
import User from './model/User.js';
import bcrypt from 'bcrypt';
dotenv.config();

const DB_PORT = process.env.DB_PORT;
const SEEDER_PASSWORD = process.env.SEEDER_PASSWORD;

const app = express()
const port = DB_PORT

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

app.use(cookieParser());
app.use(cors());
app.use(express.json());
app.use(route);
app.use('/api', api);
app.use('/uploads', express.static(path.join(process.cwd(), 'public', 'uploads')));

applyAssociations();
// Sync DB
db.sync().then(async () => {
  console.log('Database synced');
  const user = {
    name: 'admin',
    username: 'admin',
    password: bcrypt.hashSync(SEEDER_PASSWORD, 10),
    refresh_token: null,
  }

  await User.findOrCreate({
    where: { username: user.username },
    defaults: user,
  }).then(([user, created]) => {
    if (created) {
      console.log('Admin user created');
    } else {
      console.log('Admin user already exists');
    }
  }).catch(err => {
    console.error('Error creating admin user:', err);
  });
}).catch(err => {
  console.error('DB Sync Error:', err);
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`)
})
