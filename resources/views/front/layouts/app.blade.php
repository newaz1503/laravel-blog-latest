<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <!-- CSRF Token -->
	     <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title')</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}"/>

		@stack('css')

    </head>
	<body>
		<!-- HEADER -->
		@include('front.layouts.header')
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('front.layouts.navbar')
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		@yield('content')
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		@include('front.layouts.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		@include('front.layouts.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/nouislider.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/main.js')}}"></script>

        @stack('script')

	</body>
</html>
