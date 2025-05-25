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
<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">User Management</h1>
<!--end::Title-->
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
<!--begin::Item-->
<li class="breadcrumb-item text-muted">
<a class="text-muted text-hover-primary">Home</a>
</li>
<!--end::Item-->
<!--begin::Item-->
<li class="breadcrumb-item">
<span class="bullet bg-gray-500 w-5px h-2px"></span>
</li>
<!--end::Item-->
<!--begin::Item-->
<li class="breadcrumb-item text-muted">Users</li>
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
<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
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
<i class="ki-duotone ki-plus fs-2"></i>Add User</button>
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
<h2 class="fw-bold">Add User</h2>
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
<div class="modal-body px-5 my-7">
<!--begin::Form-->
<form id="kt_modal_add_user_form" class="form" action="#">
<!--begin::Scroll-->
<div class="d-flex flex-column scroll-y px-5 px-lg-10">
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Name</label>
<!--end::Label-->
<!--begin::Input-->
<input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" />
<!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<!-- <div class="mb-10">
<label class="form-label fs-6 fw-semibold">Role:</label>
<select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
<option></option>
<option value="1">Super Admin</option>
<option value="2">Admin</option>
</select>
</div> -->
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Username</label>
<!--end::Label-->
<!--begin::Input-->
<input type="text" name="user_username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Username" />
<!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Password</label>
<!--end::Label-->
<!--begin::Input-->
<input type="password" name="user_password" class="form-control form-control-solid mb-3 mb-lg-0" />
<!--end::Input-->
</div>
<!--end::Input group-->
</div>
<!--end::Scroll-->
<!--begin::Actions-->
<div class="text-center pt-10">
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
<!--begin::Modal - Edit User-->
<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header" id="kt_modal_edit_user_header">
<!--begin::Modal title-->
<h2 class="fw-bold">Edit User</h2>
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
<div class="modal-body px-5 my-7">
<!--begin::Form-->
<form id="kt_modal_edit_user_form" class="form" action="#">
<!--begin::Scroll-->
<div class="d-flex flex-column scroll-y px-5 px-lg-10">
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Name</label>
<!--end::Label-->
<!--begin::Input-->
<input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" />
<!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<!-- <div class="mb-10">
<label class="form-label fs-6 fw-semibold">Role:</label>
<select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
<option></option>
<option value="1">Super Admin</option>
<option value="2">Admin</option>
</select>
</div> -->
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Username</label>
<!--end::Label-->
<!--begin::Input-->
<input type="text" name="user_username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Username" />
<!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
<!--begin::Label-->
<label class="required fw-semibold fs-6 mb-2">Password</label>
<!--end::Label-->
<!--begin::Input-->
<input type="password" name="user_password" class="form-control form-control-solid mb-3 mb-lg-0" />
<!--end::Input-->
</div>
<!--end::Input group-->
</div>
<!--end::Scroll-->
<!--begin::Actions-->
<div class="text-center pt-10">
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
<th class="min-w-125px">Name</th>
<th class="min-w-125px">Username</th>
<!-- <th class="min-w-125px">Role</th> -->
<th class="min-w-125px">Joined Date</th>
<th class="text-end min-w-100px">Actions</th>
</tr>
</thead>
<tbody class="text-gray-600 fw-semibold" id="user-table-body">
<!--  -->
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
	const feUrl = 'http://localhost:8080/tugas-akhir/frontend/src/views';
	
	const fetchUsers = () => {
		fetch(`${beUrl}/api/users`, {
			headers:{
				'Authorization': `Bearer ${localStorage.getItem('accessToken') || ''}`
			}
		})
		// .then(response => {
		.then(response => {
			if (response.status === 401) {
				window.location.href = `${feUrl}/login.php`;
				return;
			}
			if (!response.ok) {
				throw new Error('Failed to fetch users');
			}
			return response.json();
		})
		.then(users => {
			const tbody = document.getElementById('user-table-body');
			if (!Array.isArray(users) || users.length === 0) {
				tbody.innerHTML = `<tr><td colspan="5" class="text-center text-muted">No users found</td></tr>`;
				return;
			}
			tbody.innerHTML = users.map((user, idx) => `
                    <tr data-user-id="${user.id}">
                        <td>${idx + 1}</td>
                        <td>${user.name}</td>
                        <td>${user.username}</td>
						<td>${user.createdAt ? new Date(user.createdAt).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) : '-'}</td>                        <td class="text-end">
                            <a class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
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
			console.error('Error fetching users:', error);
			document.getElementById('user-table-body').innerHTML =
			`<tr><td colspan="5" class="text-center text-danger">Failed to load users</td></tr>`;
		});
	};
	
	fetchUsers();
	
	const form = document.getElementById('kt_modal_add_user_form');
	if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			
			const name = form.user_name.value.trim();
			const username = form.user_username.value.trim();
			const password = form.user_password.value;
			
			// Validasi sederhana
			if (!name || !username || !password) {
				alert('Name, username, and password are required.');
				return;
			}
			
			// Disable tombol submit & tampilkan loading
			const submitBtn = form.querySelector('[data-kt-users-modal-action="submit"]');
			submitBtn.disabled = true;
			submitBtn.querySelector('.indicator-label').style.display = 'none';
			submitBtn.querySelector('.indicator-progress').style.display = 'inline-block';
			
			fetch(`${beUrl}/api/users`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'Authorization': `Bearer ${localStorage.getItem('accessToken') || ''}`
				},
				body: JSON.stringify({ name, username, password })
			})
			.then(response => response.json().then(data => ({ status: response.status, body: data })))
			.then(({ status, body }) => {
				if (status === 201) {
					// Sukses
					// Tutup modal (jika pakai Bootstrap 5)
					const modal = bootstrap.Modal.getInstance(document.getElementById('kt_modal_add_user'));
					if (modal) modal.hide();
					
					// Reset form
					form.reset();
					
					// Refresh data user
					fetchUsers();
					
					alert('User berhasil ditambahkan!');
				} else {
					// Tampilkan pesan error
					alert(body.message || 'Gagal menambah user');
				}
			})
			.catch(error => {
				alert('Terjadi kesalahan saat menambah user');
				console.error(error);
			})
			.finally(() => {
				// Enable tombol submit & sembunyikan loading
				submitBtn.disabled = false;
				submitBtn.querySelector('.indicator-label').style.display = '';
				submitBtn.querySelector('.indicator-progress').style.display = 'none';
			});
		});
	}
	
	function handleDeleteUser() {
		// Delegasi event pada tbody agar tetap berfungsi setelah render ulang
		document.getElementById('user-table-body').addEventListener('click', function(e) {
			const target = e.target.closest('[data-kt-users-table-filter="delete_row"]');
			if (target) {
				e.preventDefault();
				// Ambil baris dan username/id user
				const tr = target.closest('tr');
				const username = tr.querySelector('td:nth-child(3)').textContent;
				// Konfirmasi hapus
				if (confirm(`Hapus user "${username}"?`)) {
					// Ambil id user dari data attribute (sebaiknya tambahkan id di render tabel)
					const userId = tr.getAttribute('data-user-id');
					if (!userId) {
						alert('User ID tidak ditemukan.');
						return;
					}
					fetch(`${beUrl}/api/users/${userId}`, {
						method: 'DELETE',
						 headers: {
							'Authorization': `Bearer ${localStorage.getItem('accessToken') || ''}`
						}
					})
					.then(res => res.json())
					.then(data => {
						if (data.message === 'User deleted successfully') {
							// Refresh tabel user
							fetchUsers();
							alert('User berhasil dihapus!');
						} else {
							alert(data.message || 'Gagal menghapus user');
						}
					})
					.catch(() => alert('Terjadi kesalahan saat menghapus user'));
				}
			}
		});
	}
	handleDeleteUser();
});
</script>
<?php
$js = ob_get_clean();
include __DIR__ . '/../../layout/layout-admin.php';