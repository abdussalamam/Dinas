<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title><?= $title?></title>

	<!-- <?= base_url('assets/vendors/jquery/dist/jquery.min.js') ?> -->

	<!-- <link rel="apple-touch-icon" href="<?= base_url('assets/logo.png') ?>">
  <link rel="shortcut icon" href="<?= base_url('asssets/logo.png') ?>"> -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap-extend.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/center/assets/css/site.min.css') ?>">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/animsition/animsition.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/asscrollable/asScrollable.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/switchery/switchery.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/intro-js/introjs.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/slidepanel/slidePanel.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/flag-icon-css/flag-icon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/chartist/chartist.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/jvectormap/jquery-jvectormap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/formvalidation/formValidation.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/forms/validation.css') ?>">
	<!-- font icon -->
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/font-awesome/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>">

	<!-- data table -->
	<link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/tables/datatable.css') ?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') ?>">


	<link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/dashboard/v1.css') ?>">
	
	<!-- data table baru -->
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/> -->

	<!-- Fonts -->
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/weather-icons/weather-icons.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
  <![endif]-->

	<!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
  <![endif]-->

	<!-- Scripts -->
	<script src="<?= base_url('assets/global/vendor/breakpoints/breakpoints.js') ?>"></script>
	<script>
		Breakpoints();

	</script>
</head>

<body class="animsition dashboard">
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

	<nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega" role="navigation"
		style="background-color: #3e8ef7">

		<div class="navbar-header">
			<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
				data-toggle="menubar">
				<span class="sr-only">Toggle navigation</span>
				<span class="hamburger-bar"></span>
			</button>
			<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
				data-toggle="collapse">
				<i class="icon wb-more-horizontal" aria-hidden="true"></i>
			</button>
			<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
				<img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
			</div>
			<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
				data-toggle="collapse">
				<span class="sr-only">Toggle Search</span>
				<i class="icon wb-search" aria-hidden="true"></i>
			</button>
		</div>

		<div class="navbar-container container-fluid">
			<!-- Navbar Collapse -->
			<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
				<!-- Navbar Toolbar -->
				<ul class="nav navbar-toolbar">
					<li class="nav-item hidden-float" id="toggleMenubar">
						<a class="nav-link" data-toggle="menubar" href="#" role="button">
							<i class="icon hamburger hamburger-arrow-left">
								<span class="sr-only">Toggle menubar</span>
								<span class="hamburger-bar"></span>
							</i>
						</a>
					</li>
				</ul>
				<!-- End Navbar Toolbar -->

				<!-- Navbar Toolbar Right -->
				<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
							aria-expanded="false" data-animation="scale-up" role="button">

							<!-- <img src="<?= base_url('assets/global/portraits/5.jpg') ?>" alt="..."> -->
							<i class="icon fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i>

						</a>
						<div class="dropdown-menu" role="menu">
							<!-- <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a> -->
							<!-- <div class="dropdown-divider" role="presentation"></div> -->
							<a class="dropdown-item" href="javascript:void(0)" data-target="#logoutTop" data-toggle="modal"
								role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
						</div>
					</li>

				</ul>
				<!-- End Navbar Toolbar Right -->

			</div>
	</nav>
	<div class="modal fade modal-slide-from-bottom" id="logoutTop" aria-hidden="true" aria-labelledby="exampleModalTitle"
		role="dialog" tabindex="-1">
		<div class="modal-dialog modal-simple">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title">Logout</h4>
				</div>
				<div class="modal-body text-center">
					<h4>Apakah kamu Yakin Logut </b></h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Yakin</a>
				</div>
			</div>
		</div>
	</div>
	<div class="site-menubar">
		<div class="site-menubar-header">


			<div class="cover overlay">
				<img class="cover-image"
					src="<?= base_url('assets/center/assets/examples/images/login.jpg') ?>" alt="...">
				<div class="overlay-panel vertical-align overlay-background">
					<div class="vertical-align-middle">
						<a class="avatar avatar-lg" href="javascript:void(0)">
							<!-- <img src="../../global/portraits/1.jpg" alt=""> -->
						</a>
						<div class="site-menubar-info">
							<h5 class="site-menubar-user" style="text-align: center;">Selamat Datang <?= $this->session->userdata['level'];?></h5><br>
							<!-- <p class="site-menubar-email" style="text-align: center;"><?php echo $this->session->userdata('username'); ?></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php if( $this->session->userdata('level') === 'admin') :?>
		<div class="site-menubar-body">
			<div>
				<div>
					<ul class="site-menu" data-plugin="menu">
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin') ?>">
								<i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
								<span class="site-menu-title">Dashboard</span>

							</a>
						</li>
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin/gabungan') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Gabungan</span>

							</a>
						</li>

						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin/dinas') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Perdinas</span>

							</a>
						</li>
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin/jabfung') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Data Jabatan Fungsional</span>

							</a>
						</li>
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin/semuaDinas') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Daftar Dinas Prov.Riau</span>

							</a>
						</li>
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('admin/kebutuhan') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Kebutuhan Dinas</span>

							</a>
						</li>

						<li class="site-menu-item has-sub">
							<a href="<?= base_url('login/logout') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Logout</span>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<?php endif;?>

		<?php if( $this->session->userdata('level') === 'pegawai') :?>
		<div class="site-menubar-body">
			<div>
				<div>
					<ul class="site-menu" data-plugin="menu">
						<li class="site-menu-item has-sub">
							<a href="<?= base_url('pegawai_C') ?>">
								<i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
								<span class="site-menu-title">Dashboard</span>

							</a>
						</li>

						<li class="site-menu-item has-sub">
							<a href="<?= base_url('pegawai_C/gabungan') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Gabungan</span>

							</a>
						</li>

						<li class="site-menu-item has-sub">
							<a href="<?= base_url('pegawai_C/dinas') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Perdinas</span>

							</a>
						</li>

						<li class="site-menu-item has-sub">
							<a href="<?= base_url('login/logout') ?>">
								<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
								<span class="site-menu-title">Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif;?>


	</div>
