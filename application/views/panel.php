<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
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
</head>

<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
			<div class="sidebar-header">
				<a href="#" class="noble-ui-logo logo-light d-block mb-2">
					Seguros<span>UI</span>
				</a>
				<div class="sidebar-toggler not-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="sidebar-body">
				<ul class="nav">
					<li class="nav-item nav-category">Menú</li>

					<li class="nav-item nav-category">Clientes</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/customers/get_list')?>" class="nav-link">
							<i class="link-icon" data-feather="database"></i>
							<span class="link-title">Listado de Clientes</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/customers/add')?>" class="nav-link">
							<i class="link-icon" data-feather="user-plus"></i>
							<span class="link-title">Añadir Cliente</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/insurances/get_list')?>" class="nav-link">
							<i class="link-icon" data-feather="list"></i>
							<span class="link-title">Lista Pólizas/Usuario</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/insurances/add')?>" class="nav-link">
							<i class="link-icon" data-feather="plus"></i>
							<span class="link-title">Añadir Producto Cliente</span>
						</a>
					</li>
					<li class="nav-item nav-category">Seguros</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/companies/get_list')?>" class="nav-link">
							<i class="link-icon" data-feather="database"></i>
							<span class="link-title">Lista de Compañías</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/companies/add')?>" class="nav-link">
							<i class="link-icon" data-feather="plus-square"></i>
							<span class="link-title">Añadir compañía</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/products/get_list')?>" class="nav-link">
							<i class="link-icon" data-feather="list"></i>
							<span class="link-title">Lista de Seguros</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/products/add')?>" class="nav-link">
							<i class="link-icon" data-feather="plus-circle"></i>
							<span class="link-title">Añadir Seguro</span>
						</a>
					</li>
					<li class="nav-item nav-category">Usuarios</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/users/get_list')?>" class="nav-link">
							<i class="link-icon" data-feather="edit"></i>
							<span class="link-title">Listado de Usuario</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/users/add')?>" class="nav-link">
							<i class="link-icon" data-feather="user-plus"></i>
							<span class="link-title">Añadir Usuario</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="link-icon" data-feather="info"></i>
							<span class="link-title">Informes</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/users/change_pass/'.USERDATA['ID'])?>" class="nav-link">
							<i class="link-icon" data-feather="lock"></i>
							<span class="link-title">Cambiar Contraseña</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/users/logout')?>" class="nav-link">
							<i class="link-icon" data-feather="log-out"></i>
							<span class="link-title">Salir</span>
						</a>
					</li>

				</ul>
			</div>
		</nav>

		<div class="page-wrapper">

			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-es mt-1" title="es"></i> <span class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">Español</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
								<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
								<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Español </span></a>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0"><?= USERDATA['name'].' '.USERDATA['first_name'] ?></p>
										<p class="email text-muted mb-3"><?= USERDATA['mail'] ?></p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="<?=base_url('index.php/users/get/'.USERDATA['ID'])?>" class="nav-link">
												<i data-feather="user"></i>
												<span>Perfil</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?=base_url('index.php/users/edit/'.USERDATA['ID'])?>" class="nav-link">
												<i data-feather="edit"></i>
												<span>Editar Perfil</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?= base_url('index.php/users/logout')?>" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Cambiar Usuario</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?=base_url('index.php/users/logout')?>" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Salir</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?=base_url('index.php/users/get_list')?>">Home</a></li>
						<li class="breadcrumb-item" aria-current="page"><?= $this->uri->uri_string ?></li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<?= @$content; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2021 <a href="#" target="_blank">SegurosUI</a>. Todos los derechos reservados</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->

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