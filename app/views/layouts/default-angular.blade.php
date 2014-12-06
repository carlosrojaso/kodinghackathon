<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title> 
			@section('title') 
			@show 
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap 3.0: Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('css/default.css') }}">
       <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
       <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente roboto -->
		 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css"> -->
		<link rel="stylesheet" href="{{ asset('css/lib/bootstrap/bootstrap-theme.min.css') }}">
		<!-- Styles for the customization -->
			<link rel="stylesheet" href="{{ asset('css/customstyles.css') }}"> 
		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body id="page">
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
	</body>
</html>