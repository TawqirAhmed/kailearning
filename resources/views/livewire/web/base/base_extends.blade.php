<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

  <title>ARC Learners</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.css')}}">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/awesome/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/flaticon/flaticon.css')}}">
  {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/gilroy/font-gilroy.css')}}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/vendors/magnific-popup/magnific-popup.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/animate-css/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/animated-headline/animated-headline.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl/assets/owl.theme.default.min.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/woocomerce.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


  <!-- full-calender -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" /> --}}
  	<meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>



  
	@stack('styles')

	@livewireStyles

</head>

<body id="top-header">


@livewire('web.base.navbar')

{{-- {{ $slot }} --}}
@yield('content')

{{-- @livewire('show-posts') --}}


<!-- Footer section start -->
<section class="footer">
	<div class="footer-mid">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 me-auto col-sm-8">
					<div class="footer-logo mb-3">
						<img src="assets/images/logo-white.png" alt="" class="img-fluid">
					</div>
					<div class="widget footer-widget mb-5 mb-lg-0">				
						<p>Edumel is a Bootstrap Template for online courses
							education websites support multiple courses</p>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Explore</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Support</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title ">Categories</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">SEO Business</a></li>
							<li><a href="#">Digital Marketing</a></li>
							<li><a href="#">Graphic Design</a></li>
							<li><a href="#">Social Marketing</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Links</h5>
						<ul class="list-unstyled footer-links">
							<li><a href="#">News & Blogs</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Return Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-sm-4">
					<div class="footer-widget mb-5 mb-xl-0">
						<h5 class="widget-title">Address</h5>
						<ul class="list-unstyled footer-links">
							<li><h6 class="text-white">Phone</h6><a href="#">+0800 327 8534</a></li>
							<li><h6 class="text-white">Email</h6><a href="#">support@tutori.com</a></li>
						</ul>
						<div class="footer-socials mt-4">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-sm-12 col-lg-6">
					<p class="mb-0 copyright text-sm-center text-lg-start">© 2021 Edumel All rights reserved by <a href="https://themeturn.com" rel="nofollow">Dreambuzz</a> </p>
				</div>
				<div class="col-xl-6 col-sm-12 col-lg-6">
					<div class="footer-btm-links text-start text-sm-center text-lg-end">
						<a href="#">Legal</a>
						<a href="#">Supports</a>
						<a href="#">Terms</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fixed-btm-top">
		<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
	</div>
	
</section>
<!-- Footer section End -->






    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    {{-- <script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script> --}}
    <!-- Bootstrap 5:0 -->
    <script src="{{asset('assets/vendors/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assets/vendors/counterup/waypoint.js')}}"></script>
    <script src="{{asset('assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <!--  Owl Carousel -->
    <script src="{{asset('assets/vendors/owl/owl.carousel.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/vendors/isotope/jquery.isotope.js')}}"></script>
    <script src="{{asset('assets/vendors/isotope/imagelaoded.min.js')}}"></script>
    <!-- Animated Headline -->
    <script src="{{asset('assets/vendors/animated-headline/animated-headline.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- full-calender -->
  
	  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> --}}




    @stack('scripts')

		@livewireScripts

  </body>
  </html>
