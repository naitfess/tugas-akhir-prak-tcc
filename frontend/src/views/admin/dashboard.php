<?php
ob_start();
$be_url = 'http://localhost:3000';
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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
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
						<li class="breadcrumb-item text-muted">Dashboard</li>
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
				<!--begin::Row-->
				<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('public/metronic/media/svg/shapes/wave-bg-red.svg')">
							<!--begin::Header-->
							<div class="card-header pt-5 mb-3">
								<!--begin::Icon-->
								<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
									<i class="ki-duotone ki-call text-white fs-2qx lh-0">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
										<span class="path6"></span>
										<span class="path7"></span>
										<span class="path8"></span>
									</i>
								</div>
								<!--end::Icon-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6" id="count-news">0</span>
									<div class="fw-bold fs-6 text-white">
										<span class="d-block">Total</span>
										<span class="">News</span>

									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-1 d-block"><a href="<?php echo $be_url ?>/admin/news" class="text-white text-hover-pink">News</a></span>
									<span class="opacity-50">-----</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('public/metronic/media/svg/shapes/wave-bg-purple.svg')">
							<!--begin::Header-->
							<div class="card-header pt-5 mb-3">
								<!--begin::Icon-->
								<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
									<i class="ki-duotone ki-call text-white fs-2qx lh-0">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
										<span class="path6"></span>
										<span class="path7"></span>
										<span class="path8"></span>
									</i>
								</div>
								<!--end::Icon-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6" id="count-categories">0</span>
									<div class="fw-bold fs-6 text-white">
										<span class="d-block">Total</span>
										<span class="">Categories</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-1 d-block"><a href="<?php echo $be_url ?>/admin/categories" class="text-white text-hover-purple">Categories</a></span>
									<span class="opacity-50">-----</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #00A261;background-image:url('public/metronic/media/svg/shapes/wave-bg-green.svg');">
							<!--begin::Header-->
							<div class="card-header pt-5 mb-3">
								<!--begin::Icon-->
								<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #00A261">
									<i class="ki-duotone ki-call text-white fs-2qx lh-0">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
										<span class="path6"></span>
										<span class="path7"></span>
										<span class="path8"></span>
									</i>
								</div>
								<!--end::Icon-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6" id="count-users">0</span>
									<div class="fw-bold fs-6 text-white">
										<span class="d-block">Total</span>
										<span class="">Users</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-1 d-block"><a href="<?php echo $be_url ?>/admin/users" class="text-white text-hover-success">Users</a></span>
									<span class="opacity-50">-----</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	<?php include __DIR__ . '/../inc/footer.php'; ?>
	<!--end::Footer-->
</div>
<?php
$content = ob_get_clean();
ob_start();
?>
<base href="../../../" />
<?php
$base_asset = ob_get_clean();
ob_start();
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const beUrl = 'https://be-trigger-ta-alung-1061342868557.us-central1.run.app';

    const updateCount = (endpoint, elementId) => {
        fetch(`${beUrl}/api/${endpoint}/count`,{
			method: 'GET',
			headers: {
				'Authorization' : `Bearer ${localStorage.getItem('accessToken') || ''}`,
			}
		})
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Failed to fetch ${endpoint} count`);
                }
                return response.json();
            })
            .then(data => {
                const count = typeof data?.count === 'number' ? data.count : 0;
                document.getElementById(elementId).textContent = count;
            })
            .catch(error => {
                console.error(`Error fetching ${endpoint} count:`, error);
                document.getElementById(elementId).textContent = '0';
            });
    };

    updateCount('news', 'count-news');
    updateCount('categories', 'count-categories');
    updateCount('users', 'count-users');
});
</script>
<?php
$js = ob_get_clean();
include __DIR__ . '/../layout/layout-admin.php';