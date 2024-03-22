<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Style CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}">
<!-- Bootstrap CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Owl Carousel CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<!-- Owl Carousel Theme Default CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<!-- Box Icon CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/boxicon.min.css') }}">
<!-- Flaticon CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
<!-- Nice Select CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<!-- Meanmenu CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
<!-- Style CSS (répétition, déjà converti ci-dessus) -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Dark CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
<!-- Responsive CSS converti pour Laravel -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Favicon converti pour Laravel -->
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">


<style>



    .banner-style-two {
      background-image: url(../img/banner/2.jpg);
      background-position: center center;
      background-size: cover;
      height: 800px;
      position: relative;
      z-index: 0;
    }

    .banner-style-two::before {
      position: absolute;
      content: '';
      background: rgba(1, 12, 41, 0.85);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .banner-style-two .banner-text {
      max-width: 650px;
    }

    .banner-style-two .banner-text span {
      color: #ffffff;
      font-size: 18px;
      font-weight: 600;
      display: inline-block;
      margin-bottom: 25px;
    }

    .banner-style-two .banner-text h1 {
      color: #ffffff;
      font-size: 65px;
      font-weight: 700;
      margin-bottom: 30px;
      text-transform: capitalize;
    }

    .banner-style-two .banner-text p {
      color: #ffffff;
      margin-bottom: 45px;
    }

    .banner-style-two .banner-img {
      position: absolute;
      top: 15%;
      right: 5%;
      max-width: 500px;
    }

    .banner-style-two .banner-img img {
      border-radius: 65% 35% 42% 58% / 55% 48% 52% 45%;
      -webkit-animation: wrap 5s infinite alternate;
              animation: wrap 5s infinite alternate;
    }
        </style>

    @yield('extra-css')



    <title>Head Hunter</title>

</head>
<body >

		<!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->


    @include('layouts.header')

    {{-- @include('sweetalert::alert') --}}


    @yield('content')

    @include('layouts.footer')

    		<!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
<!-- jQuery first, then Bootstrap JS convertis pour Laravel -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Owl Carousel JS converti pour Laravel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Nice Select JS converti pour Laravel -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Magnific Popup JS converti pour Laravel -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Subscriber Form JS converti pour Laravel -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Form Validation JS converti pour Laravel -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact Form Script converti pour Laravel -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- Meanmenu JS converti pour Laravel -->
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<!-- Custom JS converti pour Laravel -->
<script src="{{ asset('assets/js/custom.js') }}"></script>



    @yield('extra-js')

</body>
</html>
