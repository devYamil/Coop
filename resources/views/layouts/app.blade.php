<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('theme_ka/img/core-img/favicon.ico') }}">
    <!-- Core Stylesheet -->
    <link href="{{ URL::asset('theme_ka/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ URL::asset('theme_ka/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('gallery-card/baguetteBox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('gallery-card/compact-gallery.css') }}">
</head>
<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
</div>
<div id="app">
    @yield('content-app')
</div>
<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    <div class="footer-text">
        <h2>CONCOBOL</h2>
    </div>
    <!-- social icon-->
    <div class="footer-social-icon">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </div>
    <div class="footer-menu">
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- Foooter Text-->
    <div class="copyright-text">
        <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
        <p>Copyright ©2018 Theme_K@. Designed by <a href="#" target="_blank">Yamil Alejo Perez</a></p>
    </div>
</footer>
<!-- ***** Footer Area Start ***** -->

<script src="{{ elixir('js/app.js') }}"></script>  <!-- ADD VUE JS -->
<!-- Jquery-2.2.4 JS -->
<script src="{{ URL::asset('theme_ka/js/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ URL::asset('theme_ka/js/popper.min.js') }}"></script>
<!-- Bootstrap-4 Beta JS -->
<script src="{{ URL::asset('theme_ka/js/bootstrap.min.js') }}"></script>
<!-- All Plugins JS -->
<script src="{{ URL::asset('theme_ka/js/plugins.js') }}"></script>
<!-- Slick Slider Js-->
<script src="{{ URL::asset('theme_ka/js/slick.min.js') }}"></script>
<!-- Footer Reveal JS -->
<script src="{{ URL::asset('theme_ka/js/footer-reveal.min.js') }}"></script>
<!-- Active JS -->
<script src="{{ URL::asset('theme_ka/js/active.js') }}"></script>

<script src="{{ URL::asset('gallery-card/baguetteBox.min.js') }}"></script>
<script>
    baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
</script>

</body>

</html>
