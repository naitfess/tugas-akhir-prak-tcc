<?php
ob_start();
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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Category Management</h1>
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
						<li class="breadcrumb-item text-muted">Categories</li>
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
			<div id="kt_app_content_container" class="app-container container-fluid">
				<!--begin::Card-->
				<div class="card">
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
								<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search category" />
							</div> -->
							<!--end::Search-->
						</div>
						<!--begin::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Toolbar-->
							<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
								<!--begin::Add user-->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
								<i class="ki-duotone ki-plus fs-2"></i>Add Category</button>
								<!--end::Add user-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header" id="kt_modal_add_user_header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Add Category</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body px-5 my-2">
											<!--begin::Form-->
											<form id="kt_modal_add_user_form" class="form" action="#">
												<!--begin::Scroll-->
												<div class="d-flex flex-column px-5 px-lg-10">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fw-semibold fs-6 mb-2">Category Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="category_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category name"/>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Scroll-->
												<!--begin::Actions-->
												<div class="text-end pt-2 pe-5 pe-lg-10">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Edit Category-->
							<div class="modal fade" id="kt_modal_edit_category" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header" id="kt_modal_edit_category_header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Edit Category</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body px-5 my-2">
											<!--begin::Form-->
											<form id="kt_modal_edit_user_form" class="form" action="#">
												<!--begin::Scroll-->
												<div class="d-flex flex-column px-5 px-lg-10">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fw-semibold fs-6 mb-2">Category Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="edit_category_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category name"/>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Scroll-->
												<!--begin::Actions-->
												<div class="text-end pt-2 pe-5 pe-lg-10">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Edit Category-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body py-4">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
							<thead>
								<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									<th>#</th>
									<th class="min-w-125px">Category Name</th>
									<th class="text-end min-w-100px">Actions</th>
								</tr>
							</thead>
							<tbody class="text-gray-600 fw-semibold" id="category-table-body">
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				
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
    const beUrl = 'http://localhost:5000';

    // Fetch & render categories
    function fetchCategories() {
        fetch(`${beUrl}/api/categories`,{
			headers: { 
				'Authorization' : `Bearer ${localStorage.getItem('accessToken')}`,
			}
		})
            .then(response => {
                if (!response.ok) throw new Error('Failed to fetch categories');
                return response.json();
            })
            .then(categories => {
                const tbody = document.getElementById('category-table-body');
                if (!Array.isArray(categories) || categories.length === 0) {
                    tbody.innerHTML = `<tr><td colspan="3" class="text-center text-muted">No categories found</td></tr>`;
                    return;
                }
                tbody.innerHTML = categories.map((cat, idx) => `
                    <tr data-category-id="${cat.id}">
                        <td>${idx + 1}</td>
                        <td>${cat.name}</td>
                        <td class="text-end">
                            <a class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_category">
                                    <a class="menu-link px-3">Edit</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3" data-kt-categories-table-filter="delete_row">Delete</a>
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
                console.error('Error fetching categories:', error);
                document.querySelector('tbody.text-gray-600').innerHTML =
                    `<tr><td colspan="3" class="text-center text-danger">Failed to load categories</td></tr>`;
            });
    }

    fetchCategories();

    // Create category
    const form = document.getElementById('kt_modal_add_user_form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const name = form.category_name.value.trim();

            if (!name) {
                alert('Category name is required.');
                return;
            }

            const submitBtn = form.querySelector('[data-kt-users-modal-action="submit"]');
            submitBtn.disabled = true;
            submitBtn.querySelector('.indicator-label').style.display = 'none';
            submitBtn.querySelector('.indicator-progress').style.display = 'inline-block';

            fetch(`${beUrl}/api/categories`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'Authorization': `Bearer ${localStorage.getItem('accessToken')}`
				},
				body: JSON.stringify({ name })
			})
            .then(response => response.json().then(data => ({ status: response.status, body: data })))
            .then(({ status, body }) => {
                if (status === 201) {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('kt_modal_add_user'));
                    if (modal) modal.hide();
                    form.reset();
                    fetchCategories();
                    alert('Category berhasil ditambahkan!');
                } else {
                    alert(body.message || 'Gagal menambah category');
                }
            })
            .catch(error => {
                alert('Terjadi kesalahan saat menambah category');
                console.error(error);
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.querySelector('.indicator-label').style.display = '';
                submitBtn.querySelector('.indicator-progress').style.display = 'none';
            });
        });
    }

	// DELETE CATEGORY
    document.getElementById('category-table-body').addEventListener('click', function(e) {
        const deleteBtn = e.target.closest('[data-kt-categories-table-filter="delete_row"]');
        if (deleteBtn) {
            e.preventDefault();
            const tr = deleteBtn.closest('tr');
            const categoryId = tr.getAttribute('data-category-id');
            const categoryName = tr.querySelector('td:nth-child(2)').textContent;
            if (confirm(`Hapus kategori "${categoryName}"?`)) {
                fetch(`${beUrl}/api/categories/${categoryId}`, { 
					method: 'DELETE' ,
					headers: { 'Authorization' : `Bearer ${localStorage.getItem('accessToken')}` }
				})
                    .then(res => res.json())
                    .then(data => {
                        if (data.message === 'Category deleted') {
                            fetchCategories();
                            alert('Kategori berhasil dihapus!');
                        } else {
                            alert(data.message || 'Gagal menghapus kategori');
                        }
                    })
                    .catch(() => alert('Terjadi kesalahan saat menghapus kategori'));
            }
        }
    });

    // EDIT CATEGORY - show modal & set value
    let editingCategoryId = null;
    document.getElementById('category-table-body').addEventListener('click', function(e) {
        const editBtn = e.target.closest('[data-bs-target="#kt_modal_edit_category"]');
        if (editBtn) {
            e.preventDefault();
            const tr = editBtn.closest('tr');
            editingCategoryId = tr.getAttribute('data-category-id');
            const categoryName = tr.querySelector('td:nth-child(2)').textContent;
            document.querySelector('input[name="edit_category_name"]').value = categoryName;
        }
    });

    // SUBMIT EDIT CATEGORY
    const editForm = document.getElementById('kt_modal_edit_user_form');
    if (editForm) {
        editForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = editForm.edit_category_name.value.trim();
            if (!name) {
                alert('Category name is required.');
                return;
            }
            const submitBtn = editForm.querySelector('[data-kt-users-modal-action="submit"]');
            submitBtn.disabled = true;
            submitBtn.querySelector('.indicator-label').style.display = 'none';
            submitBtn.querySelector('.indicator-progress').style.display = 'inline-block';

            fetch(`${beUrl}/api/categories/${editingCategoryId}`, {
				method: 'PUT',
				headers: {
					'Content-Type': 'application/json',
					'Authorization': `Bearer ${localStorage.getItem('accessToken')}`
				},
				body: JSON.stringify({ name })
			})
            .then(res => res.json().then(data => ({ status: res.status, body: data })))
            .then(({ status, body }) => {
                if (status === 200) {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('kt_modal_edit_category'));
                    if (modal) modal.hide();
                    editForm.reset();
                    fetchCategories();
                    alert('Kategori berhasil diupdate!');
                } else {
                    alert(body.message || 'Gagal update kategori');
                }
            })
            .catch(() => alert('Terjadi kesalahan saat update kategori'))
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.querySelector('.indicator-label').style.display = '';
                submitBtn.querySelector('.indicator-progress').style.display = 'none';
            });
        });
    }
});
</script>
<?php
$js = ob_get_clean();
include __DIR__ . '/../../layout/layout-admin.php';