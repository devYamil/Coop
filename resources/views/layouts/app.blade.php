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

<!-- The Modal -->
<div class="modal fade" id="registrar-usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header modal-header-registrar-usuario">
                <h4 class="modal-title modal-title-registrar-usuario">REGISTRAR USUARIO</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-md-12">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="nameasdf" placeholder="Escribe tú nombre" required="">
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="emailasdf" placeholder="Escribe tú correo electrónico" required="">
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="passwordasdf" id="password" placeholder="Escribe tú password" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="repeat_password" id="repeat_password" placeholder="Repite tú password" required="">
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Registrarse</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>
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



</body>

</html>
