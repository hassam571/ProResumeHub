
<!doctype html>
<html lang="en-US">
<head>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="CV & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cvio, portfolio" />
	<meta name="author" content="beshleyua" />

	<!-- Title -->
	<title>Cvio - Resume/CV Template</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/basic.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/layout.css') }}" />

	<link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/jarallax.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/swiper.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/fontawesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/brands.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/solid.css') }}" />



	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/blue.css') }}" /> --}}
	<link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/green.css') }}" />
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/orange.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/brown.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/purple.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/red.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/beige.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/green_light.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/yellow.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/yellow_light.css') }}" /> --}}
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>


</head>

<style>
    .mask-lnk span::after{display: inline !important;}
    .mask-lnk::after{display: none !important;}
</style>
<body class="home">

	<!-- Preloader -->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Container -->
	<div class="container">

		<!-- Cursor -->
		<div class="cursor-follower"></div>

		@include('frontend.layout.header')
        <div class="wrapper">

	    @yield('content')
        </div>
		@include('frontend.layout.footer')

	</div>














	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	
	<script src="{{ asset('public/assets/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('public/assets/js/magnific-popup.js') }}"></script>
	<script src="{{ asset('public/assets/js/simpleParallax.js') }}"></script>
	<script src="{{ asset('public/assets/js/typed.js') }}"></script>
	<script src="{{ asset('public/assets/js/jarallax.js') }}"></script>
	<script src="{{ asset('public/assets/js/jarallax-video.js') }}"></script>
	<script src="{{ asset('public/assets/js/jarallax-element.js') }}"></script>
	<script src="{{ asset('public/assets/js/imagesloaded.pkgd.js') }}"></script>
	<script src="{{ asset('public/assets/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset('public/assets/js/swiper.js') }}"></script>
	<script src="{{ asset('public/assets/js/grained.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s') }}"></script>
<script src="{{ asset('public/assets/js/scripts.js') }}"></script>

</body>
</html>