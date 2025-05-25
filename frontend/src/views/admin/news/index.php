<?php
ob_start();
$be_url = 'https://be-trigger-ta-alung-1061342868557.us-central1.run.app';
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">News Management</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">News</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container">
                <!--begin::Category-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <!-- <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search news by title" />
                            </div> -->
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add news-->
                                <a href="<?php echo $be_url ?>/admin/news/create" class="btn btn-primary">
                                    <i class="ki-duotone ki-plus fs-2"></i>
                                    <span class="indicator-label">Add News</span>
                                </a>
                                <!--end::Add news-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th>#</th>
                                    <th class="min-w-250px">Title</th>
                                    <th class="min-w-150px">Category</th>
                                    <th class="min-w-150px">Date</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600" id="news-table-body">
                               
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Category-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <?php include __DIR__ . '/../../inc/footer.php'; ?>
    <!--end::Footer-->
</div>
<?php
$content = ob_get_clean();
ob_start();
?>
<base href="../../../../" />
<?php
$base_asset = ob_get_clean();
ob_start();
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const beUrl = 'https://be-trigger-ta-alung-1061342868557.us-central1.run.app';

    function fetchNews() {
    fetch(`${beUrl}/api/news`)
        .then(response => {
            if (!response.ok) throw new Error('Failed to fetch news');
            return response.json();
        })
        .then(newsList => {
            const tbody = document.getElementById('news-table-body');
            if (!Array.isArray(newsList) || newsList.length === 0) {
                tbody.innerHTML = `<tr><td colspan="5" class="text-center text-muted">No news found</td></tr>`;
                return;
            }
            tbody.innerHTML = newsList.map((news, idx) => `
                <tr data-news-id="${news.id}">
                    <td>${idx + 1}</td>
                    <td>
                        <div class="d-flex">
                            <a href="https://be-trigger-ta-alung-1061342868557.us-central1.run.app/admin/news/edit/${news.id}" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url('${news.image || 'public/metronic/media//stock/ecommerce/68.png'}');"></span>
                            </a>
                            <div class="ms-5 align-items-center d-flex">
                                <a href="https://be-trigger-ta-alung-1061342868557.us-central1.run.app/admin/news/edit/${news.id}" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">${news.title}</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        ${news.categories && news.categories.length > 0
                            ? news.categories.map(cat => `<span class="badge badge-light-success me-1">${cat.name}</span>`).join('')
                            : '<span class="badge badge-light-secondary">-</span>'}
                    </td>
                    <td>
                        ${news.date ? new Date(news.date).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' }) : '-'}
                    </td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="https://be-trigger-ta-alung-1061342868557.us-central1.run.app/admin/news/edit/${news.id}" class="menu-link px-3">Edit</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            `).join('');
            if (window.KTMenu) {
                KTMenu.createInstances();
            }
        })
        .catch(error => {
            console.error('Error fetching news:', error);
            document.getElementById('news-table-body').innerHTML =
                `<tr><td colspan="5" class="text-center text-danger">Failed to load news</td></tr>`;
        });
    }

    fetchNews();

    document.getElementById('news-table-body').addEventListener('click', function(e) {
        const deleteBtn = e.target.closest('[data-kt-ecommerce-category-filter="delete_row"]');
        if (deleteBtn) {
            e.preventDefault();
            const tr = deleteBtn.closest('tr');
            const newsId = tr.getAttribute('data-news-id');
            const newsTitle = tr.querySelector('.fs-5.fw-bold.mb-1')?.textContent || 'this news';
            if (confirm(`Hapus berita "${newsTitle}"?`)) {
                fetch(`${beUrl}/api/news/${newsId}`, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('accessToken'),
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.message === 'News deleted successfully') {
                        fetchNews();
                        alert('Berita berhasil dihapus!');
                    } else {
                        alert(data.message || 'Gagal menghapus berita');
                    }
                })
                .catch(() => alert('Terjadi kesalahan saat menghapus berita'));
            }
        }
    });
});
</script>
<?php
$js = ob_get_clean();
include __DIR__ . '/../../layout/layout-admin.php';