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
    <link rel="icon" href="{{ URL::asset('theme_ka/img/core-img/harcodedicon.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Core Stylesheet -->
    <link href="{{ URL::asset('theme_ka/style.css') }}" rel="stylesheet">
    <!-- CUSTOM STYLE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('css/style_custom.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ URL::asset('theme_ka/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('gallery-card/baguetteBox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('gallery-card/compact-gallery.css') }}">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revolution-slider/css/style.css') }}" media="screen" />

    <!-- THE PREVIEW STYLE SHEETS, NO NEED TO LOAD IN YOUR DOM -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revolution-slider/css/navstylechange.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revolution-slider/css/noneed.css') }}" media="screen" />




    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revolution-slider/src/css/settings.css') }}" media="screen" />
    <style>
        .container-full {
            top: 50px;
            margin: 0 auto;
            width: 100%;
        }
    </style>
</head>
<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
    <h1>Fencopas</h1>
</div>
<div id="app">
    @yield('content-app')
</div>
<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    <div class="footer-text">
        <h2>FENCOPAS</h2>
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
                <li><a href="#">Acerca de Nosotros</a></li>
                <li><a href="#">Terminos &amp; Condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </nav>
    </div>
    <!-- Foooter Text-->
    <div class="copyright-text">
        <p>Derechos Reservados ©2019 Theme_K@. Designed by <a href="#" target="_blank">Yamil Alejo Perez</a></p>
    </div>
</footer>
<!-- ***** Footer Area Start ***** -->

<script src="{{ elixir('js/app.js') }}"></script>  <!-- ADD VUE JS -->
<!-- Jquery-2.2.4 JS -->
<script src="{{ URL::asset('theme_ka/js/jquery-2.2.4.min.js') }}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ URL::asset('revolution-slider/src/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('revolution-slider/src/js/jquery.themepunch.revolution.js') }}"></script>
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
<script type="text/javascript">

    var revapi;

    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,
                hideThumbs:10

            });

    });	//ready

</script>
</body>

</html>
