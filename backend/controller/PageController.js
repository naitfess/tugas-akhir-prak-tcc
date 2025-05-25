import dotenv from 'dotenv';
dotenv.config();
const fe_url = 'http://localhost:8080/tugas-akhir/frontend/src/views';

const index = (req, res) => {
  res.redirect(`${fe_url}/news.html`);
};

const detail = (req, res) => {
  res.redirect(`${fe_url}/news-detail.html?id=${req.params.id}`);
};

const dashboard = (req, res) => {
  res.redirect(`${fe_url}/admin/dashboard.html`);
}

const login = (req, res) => {
  res.redirect(`${fe_url}/login.html`);
}

export { index, detail, dashboard, login };