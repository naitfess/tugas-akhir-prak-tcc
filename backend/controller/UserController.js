import User from '../model/User.js';
import bcrypt from 'bcrypt';
import dotenv from 'dotenv';
import jwt from 'jsonwebtoken';
dotenv.config();
const fe_url = 'https://fe-alung-ta-dot-b-01-450713.uc.r.appspot.com/src/views';
const ACCESS_TOKEN = process.env.ACCESS_TOKEN;
const REFRESH_TOKEN = process.env.REFRESH_TOKEN;

const index = (req, res) => {
  res.redirect(`${fe_url}/admin/user/index.html`);
};

const getAllUsers = async (req, res) => {
  try {
    const users = await User.findAll({
      attributes: { exclude: ['password', 'refresh_token'] },
    });
    return res.status(200).json(users);
  } catch (error) {
    console.error('Get all users error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
}

const getUserById = async (req, res) => {
  try {
    const { id } = req.params;
    const user = await User.findByPk(id, {
      attributes: { exclude: ['password', 'refresh_token'] },
    });

    if (!user) {
      return res.status(404).json({ message: 'User not found' });
    }

    return res.status(200).json(user);
  } catch (error) {
    console.error('Get user by ID error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
}

const createUser = async (req, res) => {
  try {
    const { name, username, password } = req.body;

    // Basic validation
    if (!name || !username || !password) {
      return res.status(400).json({ message: 'Name, username, and password are required' });
    }

    // Check if username already exists
    const existingUser = await User.findOne({ where: { username } });
    if (existingUser) {
      return res.status(409).json({ message: 'Username already exists' });
    }

    // Hash password
    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    // Create user
    const user = await User.create({
      name,
      username,
      password: hashedPassword,
    });

    // Omit password in response
    const { password: _, ...userData } = user.toJSON();

    return res.status(201).json({
      message: 'User created successfully',
      user: userData,
    });
  } catch (error) {
    console.error('Create user error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
};

export const countUsers = async (req, res) => {
  try {
    const count = await User.count();
    return res.status(200).json({ count });
  } catch (error) {
    res.status(500).json({ message: 'Failed to count users', error: error.message });
  }
};

const deleteUser = async (req, res) => {
  try {
    const { id } = req.params;
    const user = await User.findByPk(id);

    if (!user) {
      return res.status(404).json({ message: 'User not found' });
    }

    await user.destroy();
    return res.status(200).json({ message: 'User deleted successfully' });
  } catch (error) {
    console.error('Delete user error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
}

const login = async (req, res) => {
  try {
    const { username, password } = req.body;

    const user = await User.findOne({
      where: { username: username },
    });

    if (user) {
      const userPlain = user.toJSON(); 
      const { password: _, refresh_token: __, ...safeUserData } = userPlain;

      const decryptPassword = await bcrypt.compare(password, user.password);

      if (decryptPassword) {
        const accessToken = jwt.sign(
          safeUserData,
          ACCESS_TOKEN, 
          { expiresIn: "5m" }
        );

        const refreshToken = jwt.sign(
          safeUserData,
          REFRESH_TOKEN,
          { expiresIn: "1d" }
        );

        await User.update(
          { refresh_token: refreshToken },
          {
            where: { id: user.id },
          }
        );

        res.cookie("refreshToken", refreshToken, {
          httpOnly: false, // Ngatur cross-site scripting, untuk penggunaan asli aktifkan karena bisa nyegah serangan fetch data dari website "document.cookies"
          sameSite: "none", // Ngatur domain yg request misal kalo strict cuman bisa akses ke link dari dan menuju domain yg sama, lax itu bisa dari domain lain tapi cuman bisa get
          maxAge: 24 * 60 * 60 * 1000, // Ngatur lamanya token disimpan di cookie (dalam satuan ms)
          secure: false, // Ini ngirim cookies cuman bisa dari https, kenapa? nyegah skema MITM di jaringan publik, tapi pas development di false in aja
        });

        res.status(200).json({
          status: "Success",
          message: "Login Berhasil",
          accessToken,
        });
      } else {
        const error = new Error("Username atau password salah");
        error.statusCode = 400;
        throw error;
      }
    } else {
      const error = new Error("Username atau password salah");
      error.statusCode = 400;
      throw error;
    }
  } catch (error) {
    res.status(error.statusCode || 500).json({
      status: "Error",
      message: error.message,
    });
  }
}

const getLoggedInUser = async (req, res) => {
  try {
    const username = req.username;
    const user = await User.findOne({
      where: { username },
      attributes: { exclude: ['password', 'refresh_token'] },
    });
    if (!user) {
      return res.status(404).json({ message: 'User not found' });
    }
    return res.status(200).json(user);
  }
  catch (error) {
    console.error('Get logged in user error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
}

const logout = async (req, res) => {
  try {
    const refreshToken = req.cookies.refreshToken;
    if (!refreshToken) {
      return res.status(401).json({ message: 'Unauthorized, please login' });
    }

    await User.update(
      { refresh_token: null },
      { where: { refresh_token: refreshToken } }
    );

    res.clearCookie("refreshToken");
    return res.status(200).json({ message: 'Logout successful' });
  } catch (error) {
    console.error('Logout error:', error);
    return res.status(500).json({ message: 'Internal server error' });
  }
}

export { index, createUser, getAllUsers , getUserById, deleteUser, login, getLoggedInUser };
