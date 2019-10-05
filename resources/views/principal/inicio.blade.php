@extends('layouts.app')
@section('title', 'FENCOPAS::Inicio')
@section('estilos')


@endsection
@section('content-app')

<!-- ***** Header Area Start ***** -->
<header class="header_area animated">
    <div class="container-fluid">
        <div class="sing-up-button float-user-button button-custom-user">
            <a href="#" data-toggle="modal" data-target="#registrar-usuario">Registrate</a>
            <a href="#" data-toggle="modal" data-target="#iniciar-sesion">Iniciar sesion</a>
        </div>
        <div class="row align-items-center">
            <dropdown-component-user federacion="FENCOPAS"  descripcion = "Confederación Nacional de Cooperativas de Bolivia"></dropdown-component-user>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix" id="inicio">
    <div class="h-100 container-full" style="width:98% !important;">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>	<!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="800" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/slidebg1.jpg') }}" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption lightgrey_divider skewfromrightshort customout"
                                     data-x="85"
                                     data-y="224"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1200"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 2">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin customout"
                                     data-x="center" data-hoffset="100"
                                     data-y="bottom" data-voffset="0"
                                     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="700"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 3"><img src="{{ URL::asset('revolution-slider/images/woman.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption large_bold_grey skewfromrightshort customout"
                                     data-x="80"
                                     data-y="96"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 4">Faster
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption medium_thin_grey skewfromleftshort customout"
                                     data-x="285"
                                     data-y="122"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="900"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 5">&
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption medium_thin_grey skewfromrightshort customout"
                                     data-x="80"
                                     data-y="175"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="1000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 6">More
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption large_bold_grey skewfromleftshort customout"
                                     data-x="175"
                                     data-y="152"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="1100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 7">Powerful
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption small_thin_grey customin customout"
                                     data-x="80"
                                     data-y="240"
                                     data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 8">Slider Revolution is the highly acclaimed<br/> slide-based displaying solution, thousands of<br/> businesses, theme developers and everyday<br/> people use and love!
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption skewfromrightshort customout"
                                     data-x="816"
                                     data-y="207"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1750"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 9"><img src="{{ URL::asset('revolution-slider/images/graph.png') }}" alt="" data-ww="52" data-hh="44">
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="60"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1600"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 10">1000's
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="125"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1650"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 11">Of Happy Users
                                </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption medium_bold_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="200"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 12">Rekord Breaking
                                </div>

                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption medium_light_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="center" data-voffset="-10"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1850"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 13">Sales on CodeCanyon
                                </div>

                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption medium_bg_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="bottom" data-voffset="-200"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1900"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 14">A Professional Solution
                                </div>

                                <!-- LAYER NR. 14 -->
                                <div class="tp-caption medium_bold_orange skewfromleftshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="340"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="2000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 15">4.7<span style="font-weight:300;">/5 Stars</span>
                                </div>

                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption customin customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="bottom" data-voffset="-103"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2050"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 16"><img src="{{ URL::asset('revolution-slider/images/star.png') }}" alt="" data-ww="20" data-hh="20">
                                </div>

                                <!-- LAYER NR. 16 -->
                                <div class="tp-caption customin customout"
                                     data-x="right" data-hoffset="-115"
                                     data-y="bottom" data-voffset="-103"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2100"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 17"><img src="{{ URL::asset('revolution-slider/images/star.png') }}" alt="" data-ww="20" data-hh="20">
                                </div>

                                <!-- LAYER NR. 17 -->
                                <div class="tp-caption customin customout"
                                     data-x="right" data-hoffset="-140"
                                     data-y="bottom" data-voffset="-103"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2150"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 18"><img src="{{ URL::asset('revolution-slider/images/star.png') }}" alt="" data-ww="20" data-hh="20">
                                </div>

                                <!-- LAYER NR. 18 -->
                                <div class="tp-caption customin customout"
                                     data-x="right" data-hoffset="-165"
                                     data-y="bottom" data-voffset="-103"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2200"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 19"><img src="{{ URL::asset('revolution-slider/images/star.png') }}" alt="" data-ww="20" data-hh="20">
                                </div>

                                <!-- LAYER NR. 19 -->
                                <div class="tp-caption customin customout"
                                     data-x="right" data-hoffset="-190"
                                     data-y="bottom" data-voffset="-103"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2250"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 20"><img src="{{ URL::asset('revolution-slider/images/star.png') }}" alt="" data-ww="20" data-hh="20">
                                </div>

                                <!-- LAYER NR. 20 -->
                                <div class="tp-caption medium_bg_orange skewfromleftshort customout"
                                     data-x="right" data-hoffset="-90"
                                     data-y="bottom" data-voffset="-50"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="2300"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 21">Customer Rating
                                </div>
                            </li>


                            <!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/newslide2014_1.jpg') }}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption finewide_large_white customin customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-40"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">INTRODUCING
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption whitedivider3px customin customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="0"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="800"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="30"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption boldwide_small_white customin customout tp-resizeme"
                                     data-x="240"
                                     data-y="120"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="5000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
                                </div>



                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
                                     data-x="420"
                                     data-y="110"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="5500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-endspeed="300"
                                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
                                     data-x="460"
                                     data-y="120"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="6400"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="160"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="7200"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="words"
                                     data-splitout="words"
                                     data-elementdelay="0.12"
                                     data-endelementdelay="0.12"
                                     data-endspeed="300"
                                     style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="200"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="8000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption finewide_verysmall_white_mw customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="250"
                                     data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="900"
                                     data-start="8000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="lines"
                                     data-splitout="lines"
                                     data-elementdelay="0.2"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur<br/>  sadipscing elitr, sed diam nonumy<br/>  eirmod tempor invidunt ut labore et<br/>  dolore magna aliquyam erat, sed diam <br/> voluptua. At vero eos et accusam.
                                </div>


                            </li>

                            <!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/newslide2014_1.jpg') }}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption finewide_large_white customin customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-40"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">INTRODUCING
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption whitedivider3px customin customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="0"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="800"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="30"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-end="4000"
                                     data-endspeed="500"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption boldwide_small_white customin customout tp-resizeme"
                                     data-x="240"
                                     data-y="120"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="5000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
                                     data-x="420"
                                     data-y="110"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="5500"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-endspeed="300"
                                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
                                     data-x="460"
                                     data-y="120"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="6400"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="chars"
                                     data-splitout="chars"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="160"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="7200"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="words"
                                     data-splitout="words"
                                     data-elementdelay="0.12"
                                     data-endelementdelay="0.12"
                                     data-endspeed="300"
                                     style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="200"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="8000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.08"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption finewide_verysmall_white_mw customin customout tp-resizeme"
                                     data-x="460"
                                     data-y="250"
                                     data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="900"
                                     data-start="8000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="lines"
                                     data-splitout="lines"
                                     data-elementdelay="0.2"
                                     data-endelementdelay="0.08"
                                     data-endspeed="300"
                                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur<br/>  sadipscing elitr, sed diam nonumy<br/>  eirmod tempor invidunt ut labore et<br/>  dolore magna aliquyam erat, sed diam <br/> voluptua. At vero eos et accusam.
                                </div>

                            </li>


                            <!-- SLIDE  -->
                            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/darkblurbg.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption customin"
                                     data-x="474"
                                     data-y="189"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="800"
                                     data-easing="Power3.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 2"><img src="{{ URL::asset('revolution-slider/images/macbook2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin"
                                     data-x="245"
                                     data-y="92"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 3"><img src="{{ URL::asset('revolution-slider/images/imac1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption customin"
                                     data-x="693"
                                     data-y="69"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="Power3.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 4"><img src="{{ URL::asset('revolution-slider/images/lupe_macbook.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption customin"
                                     data-x="100"
                                     data-y="171"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1400"
                                     data-easing="Power3.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 5"><img src="{{ URL::asset('revolution-slider/images/lupe_macbook.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption medium_bg_asbestos skewfromleft customout"
                                     data-x="104"
                                     data-y="154"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="1500"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 6">Caption Selection
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption medium_bg_red skewfromright customout"
                                     data-x="820"
                                     data-y="274"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="1700"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 7">Custom Animation Editor
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption medium_bg_orange skewfromright customout"
                                     data-x="820"
                                     data-y="314"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="1800"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 8">With Live Preview
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption medium_bg_darkblue skewfromleft customout"
                                     data-x="168"
                                     data-y="193"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="1600"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 9">With Style Preview
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption large_bold_white customin customout"
                                     data-x="428"
                                     data-y="34"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     style="z-index: 10">Big
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption medium_light_white customin customout"
                                     data-x="536"
                                     data-y="51"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1200"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     style="z-index: 11">Improvements
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/transparent.png') }}" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption customin skewtoleft"
                                     data-x="877"
                                     data-y="54"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1500"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 2"><img src="{{ URL::asset('revolution-slider/images/cloud2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption customin skewtoleft"
                                     data-x="84"
                                     data-y="80"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1300"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 3"><img src="{{ URL::asset('revolution-slider/images/cloud3.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption customin skewtoleft"
                                     data-x="473"
                                     data-y="123"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1700"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 4"><img src="{{ URL::asset('revolution-slider/images/cloud1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption sfb ltl"
                                     data-x="639"
                                     data-y="346"
                                     data-speed="600"
                                     data-start="1200"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 5"><img src="{{ URL::asset('revolution-slider/images/hill3.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption sfb ltl"
                                     data-x="228"
                                     data-y="360"
                                     data-speed="600"
                                     data-start="1100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 6"><img src="{{ URL::asset('revolution-slider/images/hill4.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption grassfloor lfb ltb"
                                     data-x="center" data-hoffset="0"
                                     data-y="bottom" data-voffset="50"
                                     data-speed="600"
                                     data-start="500"
                                     data-easing="Back.easeOut"
                                     data-endspeed="600"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 7">
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption sfb ltl"
                                     data-x="142"
                                     data-y="375"
                                     data-speed="600"
                                     data-start="800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 8"><img src="{{ URL::asset('revolution-slider/images/hill2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption sfb ltl"
                                     data-x="496"
                                     data-y="367"
                                     data-speed="600"
                                     data-start="900"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 9"><img src="{{ URL::asset('revolution-slider/images/hill1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption sfb ltl"
                                     data-x="918"
                                     data-y="379"
                                     data-speed="600"
                                     data-start="1000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 10"><img src="{{ URL::asset('revolution-slider/images/hill2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption lfb skewtoleft"
                                     data-x="122"
                                     data-y="133"
                                     data-speed="2000"
                                     data-start="1300"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Power1.easeIn"
                                     style="z-index: 11"><img src="{{ URL::asset('revolution-slider/images/guy1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption lfb skewtoleft"
                                     data-x="318"
                                     data-y="91"
                                     data-speed="2000"
                                     data-start="1400"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     data-endeasing="Power1.easeIn"
                                     style="z-index: 12"><img src="{{ URL::asset('revolution-slider/images/guy2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption customin ltl"
                                     data-x="769"
                                     data-y="177"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="1000"
                                     data-start="2000"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 13"><img src="{{ URL::asset('revolution-slider/images/icon_photo.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption large_bold_white customin ltl"
                                     data-x="596"
                                     data-y="101"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="1000"
                                     data-start="1850"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 14">Design
                                </div>

                                <!-- LAYER NR. 14 -->
                                <div class="tp-caption medium_light_white customin ltl"
                                     data-x="813"
                                     data-y="124"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="1000"
                                     data-start="1900"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 15">&
                                </div>

                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption large_bold_white customin ltl"
                                     data-x="845"
                                     data-y="102"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="1000"
                                     data-start="1950"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 16">Create
                                </div>

                                <!-- LAYER NR. 16 -->
                                <div class="tp-caption mediumlarge_light_white customin ltl"
                                     data-x="652"
                                     data-y="282"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="1000"
                                     data-start="2050"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="400"
                                     data-endeasing="Back.easeIn"
                                     style="z-index: 17">With Total Layer Control
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="slideleft" data-slotamount="7" data-masterspeed="2000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/transparent.png') }}" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption lfr"
                                     data-x="889"
                                     data-y="118"
                                     data-speed="600"
                                     data-start="1000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     style="z-index: 2"><img src="{{ URL::asset('revolution-slider/images/cloud2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption lfr"
                                     data-x="339"
                                     data-y="67"
                                     data-speed="600"
                                     data-start="1100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     style="z-index: 3"><img src="{{ URL::asset('revolution-slider/images/cloud3.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption lfr"
                                     data-x="12"
                                     data-y="181"
                                     data-speed="600"
                                     data-start="1200"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     style="z-index: 4"><img src="{{ URL::asset('revolution-slider/images/cloud1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption lfr"
                                     data-x="120"
                                     data-y="352"
                                     data-speed="600"
                                     data-start="900"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 5"><img src="{{ URL::asset('revolution-slider/images/hill3.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption lfr"
                                     data-x="696"
                                     data-y="377"
                                     data-speed="600"
                                     data-start="800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 6"><img src="{{ URL::asset('revolution-slider/images/hill4.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption grassfloor lfb ltr"
                                     data-x="center" data-hoffset="0"
                                     data-y="bottom" data-voffset="50"
                                     data-speed="600"
                                     data-start="0"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="600"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 7">
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption lfr"
                                     data-x="464"
                                     data-y="382"
                                     data-speed="600"
                                     data-start="500"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 8"><img src="{{ URL::asset('revolution-slider/images/hill2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption lfr"
                                     data-x="-59"
                                     data-y="366"
                                     data-speed="600"
                                     data-start="600"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 9"><img src="{{ URL::asset('revolution-slider/images/hill1.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption lfr"
                                     data-x="857"
                                     data-y="386"
                                     data-speed="600"
                                     data-start="700"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 10"><img src="{{ URL::asset('revolution-slider/images/hill2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption large_bold_white customin customout"
                                     data-x="center" data-hoffset="0"
                                     data-y="80"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="1700"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 11">Timelined Captions
                                </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption mediumlarge_light_white_center customin customout"
                                     data-x="center" data-hoffset="0"
                                     data-y="bottom" data-voffset="-120"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="1900"
                                     data-easing="Back.easeInOut"
                                     data-endspeed="300"
                                     style="z-index: 12">Create Custom Animations<br/>
                                    with our Brand-New<br/>
                                    Transition Builder
                                </div>

                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption customin"
                                     data-x="110"
                                     data-y="118"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="1300"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="z-index: 13"><img src="{{ URL::asset('revolution-slider/images/tree.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption customin customout"
                                     data-x="center" data-hoffset="0"
                                     data-y="bottom" data-voffset="-250"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="1800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="300"
                                     style="z-index: 14"><img src="{{ URL::asset('revolution-slider/images/clock2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 14 -->
                                <div class="tp-caption customin skewtoright"
                                     data-x="817"
                                     data-y="197"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="600"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 15"><img src="{{ URL::asset('revolution-slider/images/guy3.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption customin skewtoright"
                                     data-x="946"
                                     data-y="155"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="2100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="600"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 16"><img src="{{ URL::asset('revolution-slider/images/guy4.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 16 -->
                                <div class="tp-caption customin customout"
                                     data-x="126"
                                     data-y="269"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1800"
                                     data-easing="Back.easeOut"
                                     data-end="4400"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 17"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 17 -->
                                <div class="tp-caption customin customout"
                                     data-x="167"
                                     data-y="303"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1500"
                                     data-easing="Back.easeOut"
                                     data-end="4100"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 18"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 18 -->
                                <div class="tp-caption customin customout"
                                     data-x="264"
                                     data-y="304"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1600"
                                     data-easing="Back.easeOut"
                                     data-end="4200"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 19"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 19 -->
                                <div class="tp-caption customin customout"
                                     data-x="296"
                                     data-y="250"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1700"
                                     data-easing="Back.easeOut"
                                     data-end="4300"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 20"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 20 -->
                                <div class="tp-caption customin customout"
                                     data-x="223"
                                     data-y="263"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1400"
                                     data-easing="Back.easeOut"
                                     data-end="4000"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 21"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 21 -->
                                <div class="tp-caption customin customout"
                                     data-x="166"
                                     data-y="256"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1900"
                                     data-easing="Back.easeOut"
                                     data-end="4500"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 22"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 22 -->
                                <div class="tp-caption customin customout"
                                     data-x="118"
                                     data-y="219"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="2000"
                                     data-easing="Back.easeOut"
                                     data-end="4600"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 23"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 23 -->
                                <div class="tp-caption customin customout"
                                     data-x="251"
                                     data-y="208"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="2100"
                                     data-easing="Back.easeOut"
                                     data-end="4700"
                                     data-endspeed="600"
                                     data-endeasing="Bounce.easeOut"
                                     data-captionhidden="on"
                                     style="z-index: 24"><img src="{{ URL::asset('revolution-slider/images/apple.png') }}" alt="">
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="zoomin" data-slotamount="7" data-masterspeed="600" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/videobg1.jpg') }}"  alt="videobg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption medium_bg_darkblue sfr customout"
                                     data-x="129"
                                     data-y="88"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1600"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 2">Extensive Video Support
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption medium_bg_red sfr customout"
                                     data-x="293"
                                     data-y="130"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1700"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 3">Youtube
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_bg_red sfr customout"
                                     data-x="314"
                                     data-y="173"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1800"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 4">Vimeo
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption medium_bg_red sfr customout"
                                     data-x="184"
                                     data-y="216"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1900"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 5">Self-Hosted HTML 5
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption medium_bg_orange sfr customout"
                                     data-x="90"
                                     data-y="357"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="2200"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 6">Next Slide: Full Screen Video
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption sft customout"
                                     data-x="399"
                                     data-y="385"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="1000"
                                     data-start="1500"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-captionhidden="on"
                                     style="z-index: 7"><img src="{{ URL::asset('revolution-slider/images/videoshadow.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption customin customout"
                                     data-x="center" data-hoffset="134"
                                     data-y="center" data-voffset="-6"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="600"
                                     data-start="1000"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeOut"
                                     data-autoplay="false"
                                     data-autoplayonlyfirsttime="false"
                                     style="z-index: 8"><iframe src='http://player.vimeo.com/video/76512663?title=0&byline=0&portrait=0;api=1' width='640' height='360' style='width:640px;height:360px;'></iframe>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('revolution-slider/images/transparent.png') }}"  alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption customin fullscreenvideo"
                                     data-x="0"
                                     data-y="0"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="500"
                                     data-easing="Power4.easeInOut"
                                     data-endspeed="700"
                                     data-autoplay="false"
                                     data-autoplayonlyfirsttime="false"
                                     style="z-index: 2"><iframe src='http://player.vimeo.com/video/76995667?title=0&byline=0&portrait=0;api=1' width='100%' height='100%' style='width:100%px;height:100%px;'></iframe>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<!-- ***** Special Area Start ***** -->
<section class="special-area bg-white section_padding_100" id="acerca_de">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="section-heading text-center">
                    <h2>Acerca de Nosotros</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Special Area -->
            <div class="col-12 col-md-6">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="ti-mobile" aria-hidden="true"></i>
                    </div>
                    <h4>MISIÓN</h4>
                    <p class="mision">
                        Promueve la asociatividad en las cooperativas a nivel local, regional y
                        departamental, para el fortalecimiento de la gestion comunitaria del agua
                        potable y el saneamiento como un derecho humano en todo el territorio
                        de Bolivia, a fin de impulsar acciones orientadas al desarrollo e
                        implementación de políticas y estrategias sostenibles de gestión del agua
                        potable y el saneamiento, en beneficio de las cooperativas y los asociados.
                    </p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-6">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="ti-ruler-pencil" aria-hidden="true"></i>
                    </div>
                    <h4>VISIÓN</h4>
                    <p class="vision">
                        Es una organización con presencia nacional e incidencia internacional,
                        que promueve la asociatividad, potencia y coordina esfuerzos y aspiraciones
                        de las Cooperativas a nivel local, regional y Departamentales de Servicios de Agua
                        Potable y Saneamiento, en beneficio de las cooperativas y los asociados.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Special Description Area -->
    <div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <imagen-uno></imagen-uno>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="special_description_content">
                        <h2>Nuestras mejores propuestas son para ti!</h2>
                        <p>METER AQUI LOS TRABAJOS QUE SE REALIZARON ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        Yamil       <div class="app-download-area">
                            <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Google Store Btn -->
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <p class="mb-0"><span>available on</span> Google Store</p>
                                </a>
                            </div>
                            <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                <!-- Apple Store Btn -->
                                <a href="#">
                                    <i class="fa fa-apple"></i>
                                    <p class="mb-0"><span>available on</span> Apple Store</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Special Area End ***** -->

<!-- ***** Awesome Features Start ***** -->
<section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text -->
                <div class="section-heading text-center">
                    <h2>Características impresionantes</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Feature Start Awesome Experience -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-user" aria-hidden="true"></i>
                    <h5>Experiencia impresionante</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Feature Start Fast and Simple -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-pulse" aria-hidden="true"></i>
                    <h5>Rápido y Simple</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Feature Start Clean Code-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-dashboard" aria-hidden="true"></i>
                    <h5>Trabajo limpio</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Feature Start Perfect Design -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-palette" aria-hidden="true"></i>
                    <h5>Trabajo Honesto</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Feature Start Best Industry Leader-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-crown" aria-hidden="true"></i>
                    <h5>Personal de calidad</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Feature Start 24/7 Online Support-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-headphone" aria-hidden="true"></i>
                    <h5>Informacion</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ***** Características impresionantes End ***** -->

<!-- ***** Video Area Start ***** -->
<div class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Video Area Start -->
                <div class="video-area" style="background-image: url({{ URL::asset('theme_ka/img/bg-img/video.jpg') }});">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Video Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool_facts_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-4">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3>+<span class="counter">90</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-arrow-down-a"></i>
                        <p>Usuarios <br> Conectados</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-4">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                        <h3>+<span class="counter">700</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-happy-outline"></i>
                        <p>Clientes <br> Felices</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-4">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h3>+<span class="counter">30</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-person"></i>
                        <p>Cuentas <br>Activas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** App Screenshots Area Start ***** -->
<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Te mostramos un poco de nuestro trabajo!!</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- App Screenshots Slides  -->
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_1.jpg') }}" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_2.jpg') }}" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_3.jpg') }}" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_4.jpg') }}" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_5.jpg') }}" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="{{ URL::asset('theme_ka/img/scr-img/hard_coded_6.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** App Screenshots Area End *****====== -->

<!-- ***** Client Feedback Area Start ***** -->
{{--<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Aigars Silkalns</h5>
                            <p>Ceo Colorlib</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Jennifer</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Helen</h5>
                            <p>Marketer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Henry smith</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Thumbnail Area -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="slider slider-nav">
                    <div class="client-thumbnail">
                        <img src="{{ URL::asset('theme_ka/img/bg-img/client-3.jpg') }}" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="{{ URL::asset('theme_ka/img/bg-img/client-2.jpg') }}" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="{{ URL::asset('theme_ka/img/bg-img/client-1.jpg') }}" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="{{ URL::asset('theme_ka/img/bg-img/client-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- ***** Client Feedback Area End ***** -->

<!-- ***** CTA Area Start ***** -->
<section class="our-monthly-membership section_padding_50 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="membership-description">
                    <h2>Únete a nuestra lista de socios</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                    <a href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** CTA Area End ***** -->

<!-- ***** Our Team Area Start ***** -->
<section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Todo el equipo</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="{{ URL::asset('theme_ka/img/team-img/team-1.jpg') }}" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Rodolfo</h4>
                        <p>Presidente de la federacion</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="{{ URL::asset('theme_ka/img/team-img/team-2.jpg') }}" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Alex Manning</h4>
                        <p>CEO-Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="{{ URL::asset('theme_ka/img/team-img/team-3.jpg') }}" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Ollie Schneider</h4>
                        <p>Business Planner</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="{{ URL::asset('theme_ka/img/team-img/team-4.jpg') }}" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Yamil West</h4>
                        <p>Financer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Team Area End ***** -->

<!-- ***** Contact Us Area Start ***** -->
<pongase-en-contacto></pongase-en-contacto>



<!-- ***** Contact Us Area End ***** -->
<!-- The Modal REGISTRAR USUARIO-->
<registrar-usuario-component></registrar-usuario-component>
<iniciar-sesion-component></iniciar-sesion-component>

@endsection
