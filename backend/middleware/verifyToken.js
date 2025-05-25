import jwt from "jsonwebtoken";
import dotenv from "dotenv";
dotenv.config();

const ACCESS_TOKEN = process.env.ACCESS_TOKEN;

export const verifyToken = (req, res, next) => {

  const authHeader = req.headers["authorization"];
  const token = authHeader && authHeader.split(" ")[1];

  if (token == null) return res.sendStatus(401);

  jwt.verify(token, ACCESS_TOKEN, (error, decoded) => {
    if (error) return res.sendStatus(403);
    req.username = decoded.username;
    next();
  });
};