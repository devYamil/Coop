@extends('layouts.app')
@section('title', 'CONCOBOL::Inicio')
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="{{ URL::asset('/css/cooperativas.css') }}" rel="stylesheet">
@section('content-app')
    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <dropdown-component-user federacion="ACTIVIDADES"  descripcion = "Confederación Nacional de Cooperativas de Bolivia"></dropdown-component-user>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Wellcome Area Start ***** -->
    <post-component></post-component>
    <!-- ***** Wellcome Area End ***** -->

@endsection