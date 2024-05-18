<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consultancy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fontend') }}/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/custom-animation.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/backToTop.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/main.css">

    {{-- Datatable --}}
    <link rel="stylesheet" href="{{asset('fontend/common/common.css')}}">

    @stack('frontend_css')


</head>

<body>
    <!-- Navbar -->
    @include('frontend.header')


    @yield('fontend_body')


    @include('frontend.footer')


    <!-- JS here -->
    <script src="{{ asset('fontend') }}/js/vendor/jquery.min.js"></script>
    <script src="{{ asset('fontend') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('fontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('fontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('fontend') }}/js/swiper-bundle.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('fontend') }}/js/venobox.min.js"></script>
    <script src="{{ asset('fontend') }}/js/backToTop.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('fontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('fontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/main.js"></script>

    {{-- Datatable --}}
    <script src="{{ asset('fontend/common/common.js') }}"></script>





    @stack('frontend_js')
</body>

</html>
