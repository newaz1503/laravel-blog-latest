
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('assets/backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('assets/backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/backend/img/favicon.ico')}}">
	<!-- end: Favicon -->
	@stack('css')
		
</head>

<body>
		<!-- start: Header -->
		  @include('admin.layouts.navbar')
	    <!-- start: Header -->
	
		<div class="container-fluid-full">
			<div class="row-fluid">
					
				<!-- start: Main Menu -->
				@include('admin.layouts.sidebar')
				<!-- end: Main Menu -->
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<!-- start: Content -->
				<div id="content" class="span10">
					@yield('content')
				</div><!--/.fluid-container-->
		
				<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('assets/backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('assets/backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/modernizr.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.dataTables.min.js')}}"></script>


		<script src="{{asset('assets/backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	@stack('script')
	
</body>
</html>
