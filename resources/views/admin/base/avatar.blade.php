<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Avatars - Kaiadmin Bootstrap 5 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	@include('admin.layouts._css')
</head>
<body>
	<div class="wrapper">
		<!-- Sidebar -->
		@include('admin.layouts._sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
        @include('admin.layouts._mainHeader')
			
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h3 class="fw-bold mb-3">Avatars</h3>
						<ul class="breadcrumbs mb-3">
							<li class="nav-home">
								<a href="#">
									<i class="icon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="#">Base</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="#">Avatars</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Sizing</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-xxl">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xl">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-lg">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-sm">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xs">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Status Indicator</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-online">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-offline">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-away">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Shape</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded">
										</div>

										<div class="avatar">
											<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Group</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar-group">
											<div class="avatar">
												<img src={{url('/img/admin/jm_denis.jpg')}} alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src={{url('/img/admin/chadengle.jpg')}} alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src={{url('/img/admin/mlane.jpg')}} alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">CF</span>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@include('admin.layouts._footer')
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		@include('admin.layouts._customTemplate')
		<!-- End Custom template -->
	</div>
	@include('admin.layouts._js')
</body>
</html>