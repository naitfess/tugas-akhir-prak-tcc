import dotenv from 'dotenv';
dotenv.config();
const fe_url = 'http://localhost:8080/tugas-akhir/frontend/src/views';

const index = (req, res) => {
  res.redirect(`${fe_url}/news.php`);
};

const detail = (req, res) => {
  res.redirect(`${fe_url}/news-detail.php?id=${req.params.id}`);
};

const dashboard = (req, res) => {
  res.redirect(`${fe_url}/admin/dashboard.php`);
}

const login = (req, res) => {
  res.redirect(`${fe_url}/login.php`);
}

export { index, detail, dashboard, login };