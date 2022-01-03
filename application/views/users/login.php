<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= CDN; ?>vendors/core/core.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= CDN; ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= CDN; ?>vendors/select2/select2.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= CDN; ?>fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?= CDN; ?>vendors/flag-icon-css/css/flag-icon.min.css">	
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?= CDN; ?>css/demo_2/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?= CDN; ?>images/favicon.png" />
	<title>Document</title>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">
				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
								<div class="col-md-4 pr-md-0">
									<div class="auth-left-wrapper">

									</div>
								</div>
								<div class="col-md-8 pl-md-0">
									<div class="auth-form-wrapper px-4 py-5">
										<a href="#" class="noble-ui-logo logo-light d-block mb-2">Seguros<span>UI</span></a>
										<h5 class="text-muted font-weight-normal mb-4">Bienvenido! Acceda a su cuenta.</h5>
										<form action="" method="POST" class="forms-sample">
											<div class="form-group">
												<label>Dirección de correo electrónico</label>
												<input type="email" class="form-control" name="user" placeholder="Correo electrónico">
											</div>
											<div class="form-group">
												<label>Contraseña</label>
												<input type="password" class="form-control" name="pass" autocomplete="current-password" placeholder="Contraseña">
											</div>
											<div class="form-check form-check-flat form-check-primary">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input">
													Recuérdame
												</label>
											</div>
											<input type="hidden" name="form" value="send">
											<div class="mt-3">
												<input type="submit" value="Acceder" class="btn btn-primary">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>	
	<!-- core:js -->
	<script src="<?= CDN; ?>vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="<?= CDN; ?>vendors/datatables.net/jquery.dataTables.js"></script>
  	<script src="<?= CDN; ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<script src="<?= CDN; ?>vendors/select2/select2.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= CDN; ?>vendors/feather-icons/feather.min.js"></script>
	<script src="<?= CDN; ?>js/template.js"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<script src="<?= CDN; ?>js/data-table.js"></script>
	<script src="<?= CDN; ?>js/select2.js"></script>
	<!-- end custom js for this page -->	
</body>
</html>

