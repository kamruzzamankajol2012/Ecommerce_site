<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
	<link rel="icon" href="{{ asset('front_end/img/Fevicon.png') }}" >
  <link rel="stylesheet" href="{{ asset('front_end/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_end/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_end/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('front_end/vendors/nice-select/nice-select.css ')}}">
  <link rel="stylesheet" href="{{ asset('front_end/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_end/vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	@include('front_end.includes.header')
	<!--================ End Header Menu Area =================-->

  @yield('body')


  <!--================ Start footer Area  =================-->	
	@include('front_end.includes.footer')
	<!--================ End footer Area  =================-->



  <script src="{{ asset('front_end/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/skrollr.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('front_end/vendors/mail-script.js') }}"></script>
  <script src="{{ asset('front_end/js/main.js') }}"></script>
</body>
</html>