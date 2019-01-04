@extends('layouts.app')
@section('title', 'CONCOBOL::Inicio')
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="{{ URL::asset('/css/cooperativas.css') }}" rel="stylesheet">
@section('content-app')
    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">CONCOBOL</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#inicio">Inicio</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Cooperativas <span class="caret"></span></a>
                                        <!-- LISTADO DE COOPERATIVAS -->
                                        <ul id="ui-list-cooperativas" class="dropdown-menu">
                                            @foreach($cooperativas as $cooperativa)
                                                <li><a class="li-cooperativas" href="/cooperativas/{{$cooperativa->id}}">{{$cooperativa->nombre}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#acerca_de">Acerca de</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Screenshot</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="#">Registrate Aquí</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="#">Registrate Aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Wellcome Area Start ***** -->
    <post-component></post-component>
    <!-- ***** Wellcome Area End ***** -->

@endsection