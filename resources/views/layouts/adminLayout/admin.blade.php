<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Vea inmuebles - servicios de real estate">
	<meta name="author" content="JOLUPOPA">
	{{-- CSRF TOKEN --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">


	<title>VeaInmuebles | Starter</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="/admin/plugins/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	@stack('styles')

</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		@include('layouts.adminLayout.includes.header')
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		@include('layouts.adminLayout.includes.sidebarLeft')
		<!-- /.sidebar -->
		<!-- Content Wrapper. Contains page content -->
		@yield('content')
		<!-- /.content-wrapper -->

		<!-- Control Sidebar Right -->
		@include('layouts.adminLayout.includes.sidebarRight')
		<!-- /.control-sidebarRight  -->
		@include('layouts.adminLayout.includes.footer')

		<!-- Main Footer -->

	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="/admin/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap 4 -->
	<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- AdminLTE App -->
	<script src="/admin/dist/js/adminlte.min.js"></script>
	@stack('scripts')

	<!-- veaweb_admin -->
	<script src="/admin/dist/js/veaweb_admin.js"></script>


</body>
</html>

