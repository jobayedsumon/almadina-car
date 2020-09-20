<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Prime Cab HTML5 Responsive Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Madina - Rent A Car</title>
    <link rel = "icon" href = "{{ asset('frontend/images/logo.png') }}" type = "image/x-icon">

    <!-- Css Files Start -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link id="switcher" href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <!-- Css Files End -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

@yield('content')

<!-- Js Files Start -->
<script src="{{ asset('frontend/js/jquery-1.12.5.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/migrate.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<!-- Js Files End -->
</body>
</html>
