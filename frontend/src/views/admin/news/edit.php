<?php
ob_start();
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
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
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Form</li>
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
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/products.html" enctype="multipart/form-data">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Thumbnail</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<!--begin::Image input placeholder-->
								<style>.image-input-placeholder { background-image: url('public/metronic/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('public/metronic/media/svg/files/blank-image-dark.svg'); }</style>
								<!--end::Image input placeholder-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="image" accept=".png, .jpg, .jpeg" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Remove-->
								</div>
								<!--end::Image input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
						<!--begin::Category & tags-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Details</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Input group-->
								<!--begin::Label-->
								<label class="form-label">Categories</label>
								<!--end::Label-->
								<!--begin::Select2-->
								<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" id="category-select" name="categoryIds[]">
								</select>
								<!--end::Select2-->
								<!--begin::Description-->
								<div class="text-muted fs-7 mb-7">Add product to a category.</div>
								<!--end::Description-->
								<!--end::Input group-->
								<!--begin::Button-->
								<a href="<?php echo $be_url ?>/admin/categories" target="_blank" class="btn btn-light-primary btn-sm">
								<i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
								<!--end::Button-->
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Category & tags-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::General options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>News Form</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Title</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="title" class="form-control mb-2" placeholder="News Title" value="" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Content</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<div id="kt_ecommerce_add_product_description" name="content" class="min-h-200px mb-2"></div>
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a description to the product for better visibility.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Date</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="date" name="date" class="form-control mb-2" value="" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::General options-->
								</div>
							</div>
							<!--end::Tab pane-->
						</div>
						<!--end::Tab content-->
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait... 
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
				</form>
				<!--end::Form-->
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
    const urlParams = new URLSearchParams(window.location.search);
    const newsId = urlParams.get('id');

    // Fetch categories and populate select
    fetch(`${beUrl}/api/categories`)
        .then(response => response.json())
        .then(categories => {
            const select = document.getElementById('category-select');
            select.innerHTML = '<option></option>';
            categories.forEach(cat => {
                const option = document.createElement('option');
                option.value = cat.id;
                option.textContent = cat.name;
                select.appendChild(option);
            });

            // Setelah kategori siap, fetch data news
            if (newsId) {
                fetch(`${beUrl}/api/news/${newsId}`)
                    .then(response => response.json())
                    .then(news => {
                        // Isi input form
                        document.querySelector('input[name="title"]').value = news.title || '';
                        document.querySelector('input[name="date"]').value = news.date ? news.date.substring(0, 10) : '';
                        // Isi editor (Quill)
                        const quillElem = document.getElementById('kt_ecommerce_add_product_description');
						if (window.Quill && quillElem && quillElem.__quill) {
							quillElem.__quill.clipboard.dangerouslyPasteHTML(news.content || '');
						} else if (window.editor && typeof window.editor.setData === 'function') {
							window.editor.setData(news.content || '');
						} else if (quillElem) {
							quillElem.innerHTML = news.content || '';
						}
						//set image
						const imageInputPlaceholder = document.querySelector('.image-input-placeholder');
						if (news.image) {
							imageInputPlaceholder.style.backgroundImage = `url('${news.image}')`;
						} else {
							imageInputPlaceholder.style.backgroundImage = "url('public/metronic/media/svg/files/blank-image.svg')";
						}
                        // Set selected categories
                        if (news.categories && Array.isArray(news.categories)) {
                            const select = document.getElementById('category-select');
                            Array.from(select.options).forEach(opt => {
                                if (news.categories.find(cat => cat.id == opt.value)) {
                                    opt.selected = true;
                                }
                            });
                            // Jika pakai select2, trigger update
                            if ($(select).data('select2')) {
                                $(select).trigger('change');
                            }
                        }
                    });
            }
        })
        .catch(() => {
            const select = document.getElementById('category-select');
            select.innerHTML = '<option value="">Gagal memuat kategori</option>';
        });

    // Handle update submit
    const form = document.getElementById('kt_ecommerce_add_product_form');
    if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();

			const title = form.title.value.trim();
			const content = (() => {
				const quillElem = document.getElementById('kt_ecommerce_add_product_description');
				if (window.Quill && quillElem && quillElem.__quill) {
					return quillElem.querySelector('.ql-editor') ? quillElem.querySelector('.ql-editor').innerHTML : '';
				}
				if (window.editor && typeof window.editor.getData === 'function') {
					return window.editor.getData();
				}
				return quillElem ? quillElem.innerHTML : '';
			})();
			const date = form.date.value;
			const imageInput = form.querySelector('input[name="image"]');
			const imageFile = imageInput && imageInput.files.length > 0 ? imageInput.files[0] : null;
			const categorySelect = form.querySelector('#category-select');
			const categoryIds = Array.from(categorySelect.selectedOptions).map(opt => opt.value);

			if (!title || !content || !date || categoryIds.length === 0) {
				alert('Title, content, category and date are required.');
				return;
			}

			const formData = new FormData();
			formData.append('title', title);
			formData.append('content', content);
			formData.append('date', date);
			if (imageFile) formData.append('image', imageFile);
			categoryIds.forEach(id => formData.append('categoryIds[]', id));

			const submitBtn = form.querySelector('#kt_ecommerce_add_product_submit');
			submitBtn.disabled = true;
			submitBtn.querySelector('.indicator-label').style.display = 'none';
			submitBtn.querySelector('.indicator-progress').style.display = 'inline-block';

			fetch(`${beUrl}/api/news/${newsId}`, {
				method: 'PUT',
				headers: {
					'Authorization': `Bearer ${localStorage.getItem('accessToken') || ''}`
				},
				body: formData
			})
			.then(response => response.json().then(data => ({ status: response.status, body: data })))
			.then(({ status, body }) => {
				if (status === 200) {
					alert('News berhasil diupdate!');
					window.location.href = `${beUrl}/admin/news`;
				} else {
					alert(body.message || 'Gagal update news');
				}
			})
			.catch(error => {
				alert('Terjadi kesalahan saat update news');
				console.error(error);
			})
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