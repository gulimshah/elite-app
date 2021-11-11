<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <!-- End fonts -->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @stack('styles')

</head>

<body>
    @include('partials.frontend.header')
    @yield('contents')
    @include('partials.frontend.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
