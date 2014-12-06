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

	<!-- start Mixpanel -->

	<script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
	for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
	mixpanel.init("02b693fb4dcbd5acc87697d494112164");</script>
	
	<!-- end Mixpanel -->
	</head>

	<body id="page">
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="" href="{{ URL::route('home') }}"><img height="45px" src="{{asset('images/logo.gif')}}"></a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="{{ URL::to('/users') }}">{{trans('pages.users')}}</a></li>
					<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/groups') }}">{{trans('pages.groups')}}</a></li>
				@endif
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="{{ URL::to('/users') }}">{{trans('pages.users')}}</a></li>
					<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/groups') }}">{{trans('pages.groups')}}</a></li>
				@endif
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Sentry::check())
				<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="/users/{{ Session::get('userId') }}">{{ Session::get('email') }}</a></li>
					@if (Sentry::check() && Sentry::getUser()->hasAccess('users'))
						<li><a href="{{ URL::to('users/dashboard') }}">{{trans('pages.dashboard')}}</a></li>
					@elseif (Sentry::check() && Sentry::getUser()->hasAccess('sponsors'))
						<li><a href="{{ URL::to('sponsors/dashboard') }}">{{trans('pages.dashboard')}}</a></li>
					@endif
				<li><a href="{{ URL::to('logout') }}">{{trans('pages.logout')}}</a></li>
				@else
				<li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">{{trans('pages.login')}}</a></li>
				<li {{ (Request::is('sponsors/create') ? 'class="active"' : '') }}><a href="{{ URL::to('sponsors/create') }}">{{trans('pages.sponsorreg')}}</a></li>
				<li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ URL::to('users/create') }}">{{trans('pages.organizerreg')}}</a></li>
				@endif
	          </ul>
	        </div><!--/.nav-collapse -->
            
	      </div>
	    </div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
        
			<!-- Notifications -->
			@include('layouts/notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
            
		</div>

		<div class="footer">
	      <div class="row">
	      <div class="col-md-4">&nbsp;&nbsp;&nbsp;
	          <img height="12px" src="{{asset('images/footer_logo.png')}}">&nbsp;&nbsp;
	          <a class="" href="{{ URL::to('language/es') }}"><img height="16px" src="{{asset('images/spanish.png')}}"></a>&nbsp;
	          <a class="" href="{{ URL::to('language/en') }}"><img height="16px" src="{{asset('images/english.png')}}"></a>
	      </div>
	      <div class="col-md-4">
	          <a href="{{ URL::to('testimonials') }}">{{trans('pages.testimonials')}}</a>&nbsp;|&nbsp
	          <a href="{{ URL::to(trans('pages.supportUrl')) }}" target="_blank">{{trans('pages.support')}}</a>&nbsp;|&nbsp
	          <a href="{{ URL::to(trans('pages.blogUrl')) }}" target="_blank">{{trans('pages.blog')}}</a> &nbsp|&nbsp{{trans('pages.team')}}&nbsp;|&nbsp{{trans('pages.privacy')}}
	      </div>
	      <div class="col-md-4" align="right">
	          Made with Love ❤&nbsp;&nbsp;&nbsp;
	      </div>   
	      </div>
	    </div>

		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('js/lib/jquery.js') }}"></script>
		<script src="{{ asset('js/lib/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/lib/restfulizer.js') }}"></script> 
        <script src="{{ asset('js/lib/modernizr.custom.86080.js') }}"></script>
        <!-- Thanks to Zizaco for the Restfulizer script.  http://zizaco.net  -->
        <!-- ANGULAR -->
        <script src="{{ asset('js/lib/angular/angular.js')}}"></script>
        <script src="{{ asset('js/lib/ngAutocomplete.js')}}"></script>
		<!-- all angular resources will be loaded from the /public folder -->
		<script src="{{ asset('js/controllers/mainController.js') }}"></script> <!-- load our controller -->
		<script src="{{ asset('js/services/customizationService.js') }}"></script> <!-- load our service -->
		<script src="{{ asset('js/app.js') }}"></script> <!-- load our application -->
		<script src="{{ asset('js/own_scripts/scripts.js') }}"></script> <!-- load our custom scripts -->
        
	<!-- Start Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-54490148-1', 'auto');
		ga('send', 'pageview');
		</script>
	<!-- End Google Analytics -->	

	<!-- Track Event Mix Panel -->

	<script>
	mixpanel.track("beta");
	</script>
	<!-- End Mix Panel -->
	</body>
</html>