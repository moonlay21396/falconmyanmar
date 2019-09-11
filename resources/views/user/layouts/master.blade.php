<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/user_image/images/favicon.png')}}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{url('css/user_css/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{url('vendors/animate/animate.css')}}" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{url('vendors/camera-slider/camera.css')}}">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('vendors/owl_carousel/owl.carousel.css')}}" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('css/user_css/css/style.css')}}" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   <script src="js/html5shiv.min.js"></script>-->
    <!-- <script src="js/respond.min.js"></script>
    <![endif]-->

    @yield('css')
</head>
<body>


<!-- Header_Area -->
@include('user.layouts.nav')
<!-- End Header_Area -->

@yield('slider')

@yield('content')


<!-- Footer Area -->
@include('user.layouts.footer')
<!-- End Footer Area -->

@yield('js')
<!-- jQuery JS -->
<script src="{{url('js/user_js/js/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{url('js/user_js/js/bootstrap.min.js')}}"></script>
<!-- Animate JS -->
<script src="{{url('vendors/animate/wow.min.js')}}"></script>
<!-- Camera Slider -->
<script src="{{url('vendors/camera-slider/jquery.easing.1.3.js')}}"></script>
<script src="{{url('vendors/camera-slider/camera.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{url('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Progress JS -->
<script src="{{url('vendors/Counter-Up/jquery.counterup.min.js')}}"></script>
<script src="{{url('vendors/Counter-Up/waypoints.min.js')}}"></script>
<!-- Owlcarousel JS -->
<script src="{{url('vendors/owl_carousel/owl.carousel.min.js')}}"></script>
<!-- Stellar JS -->
<script src="{{url('vendors/stellar/jquery.stellar.js')}}"></script>
<!-- Theme JS -->
<script src="{{url('js/user_js/js/theme.js')}}"></script>
</body>
</html>
