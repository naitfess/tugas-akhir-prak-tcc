<?php
ob_start();
?>
<main>
       
    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="../../public/common/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title">news details</h2>
                <p class="breadcrumb__desc">In-Depth Coverage of Our Latest News</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- blog single start -->
    <section class="blog_details_section section_space custom" data-bg-color="#F1F1E9">
      <div class="container">
        <div class="row align-items-center">
        <div class="mt-50">
          <div class="row mt-none-30">
            <div class="col-lg-8 mt-30" id="news-detail">
              <!-- news -->
            </div>
            <div class="col-lg-4 mt-30">
              <aside class="sidebar ps-xl-5">
                <div class="post_list_block">
                  <h3 class="sidebar_widget_title">Recent Posts</h3>
                  <ul class="unordered_list_block" id="recent-posts">
                    <!-- recent posts -->
                  </ul>
                </div>
                <div class="post_category_wrap">
                  <h3 class="sidebar_widget_title">Categories</h3>
                  <ul class="post_category_list unordered_list_block" id="categories-list">
                    
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- blog single end -->
</main>
<?php
$content = ob_get_clean();
ob_start();
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const beUrl = 'http://localhost:5000';
    const feUrl = 'http://localhost:8080/tugas-akhir/frontend/src/views';

    const urlParams = new URLSearchParams(window.location.search);
    const newsId = urlParams.get('id');

    if (newsId) {
        fetch(`${beUrl}/api/news/${newsId}`) 
            .then(response => {
                if (!response.ok) throw new Error('Failed to fetch news detail');
                return response.json();
            })
            .then(news => {
                const newsDetail = document.getElementById('news-detail');
                if (!newsDetail) return;
                newsDetail.innerHTML = `
                    <div class="post_meta_wrap mb-1">
                        <ul class="category_btns_group unordered_list fs-16">
                            <i class="far fa-calendar"></i> 
                            ${news.date ? new Date(news.date).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) : '-'}
                        </ul>
                        <ul class="mx-2">|</ul>
                        <ul class="category_btns_group unordered_list">
                            ${
                                news.categories && news.categories.length > 0
                                ? news.categories.map(cat => `<li><a href="${feUrl}/news.php?category=${cat.id}">#${cat.name}</a></li>`).join('')
                                : ''
                            }
                        </ul>
                    </div>
                    <h3 class="details_item_info_title">
                        ${news.title}
                    </h3>
                    <div class="hero-image w-100">
                        <img class="news-image mb-4" src="${news.image || '../../public/edubost/img/blog/blog_single2.jpg'}" alt="">
                    </div>
                    <div class="news-content">
                        ${news.content}
                    </div>
                `;

                const newsContent = newsDetail.querySelector('.news-content');
                if (newsContent) {
                    newsContent.querySelectorAll('[contenteditable]').forEach(el => {
                        el.removeAttribute('contenteditable');
                    });
                        newsContent.querySelectorAll('input').forEach(input => input.remove());
                }
            })
            .catch(() => {
                const newsDetail = document.getElementById('news-detail');
                if (newsDetail) newsDetail.innerHTML = `<div class="text-danger">Failed to load news detail</div>`;
            });
    }

    fetch(`${beUrl}/api/news/recent`)
        .then(response => {
            if (!response.ok) throw new Error('Failed to fetch recent news');
            return response.json();
        })
        .then(newsList => {
            const recentPosts = document.getElementById('recent-posts');
            if (!recentPosts) return;
            if (!Array.isArray(newsList) || newsList.length === 0) {
                recentPosts.innerHTML = `<li><span class="text-muted">No recent posts</span></li>`;
                return;
            }
            recentPosts.innerHTML = newsList.map(news => `
                <li>
                    <div class="post_image">
                        <a href="/news-detail.php?id=${news.id}">
                            <img src="${news.image || '../../public/edubost/img/blog/blog_09.jpg'}" alt="">
                        </a>
                    </div>
                    <div class="post_holder">
                        <h3 class="post_title border-effect-2">
                            <a href="${feUrl}/news-detail.php?id=${news.id}">
                                ${news.title}
                            </a>
                        </h3>
                        <a class="post_date" href="#!">
                            <i class="far fa-calendar"></i> 
                            ${news.date ? new Date(news.date).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) : '-'}
                        </a>
                    </div>
                </li>
            `).join('');
        })
        .catch(() => {
            const recentPosts = document.getElementById('recent-posts');
            if (recentPosts) recentPosts.innerHTML = `<li><span class="text-danger">Failed to load recent posts</span></li>`;
        });

    fetch(`${beUrl}/api/categories`)
        .then(response => {
            if (!response.ok) throw new Error('Failed to fetch categories');
            return response.json();
        })
        .then(categories => {
            const ul = document.getElementById('categories-list');
            if (!ul) return;
            if (!Array.isArray(categories) || categories.length === 0) {
                ul.innerHTML = `<li><span class="text-muted">No categories found</span></li>`;
                return;
            }
            ul.innerHTML = categories.map(cat => `
                <li>
                    <a href="${feUrl}/news.php?category=${cat.id}">
                        <i class="far fa-arrow-right"></i>
                        <span>${cat.name}</span>
                    </a>
                </li>
            `).join('');
        })
        .catch(() => {
            const ul = document.getElementById('categories-list');
            if (ul) ul.innerHTML = `<li><span class="text-danger">Failed to load categories</span></li>`;
        });
});
</script>
<?php
$js = ob_get_clean();
include __DIR__ . '/layout/layout-guest.php';