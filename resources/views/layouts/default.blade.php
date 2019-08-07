<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        /* body, html {
             height: 100% !important;%
         }
         .panel {
             height: 100%;
             width: 100%;
         }

         .blue {
             background-color: #3883d8;
         }

         .turqoise {
             background-color: #38ced7;
         }

         .green {
             background-color: #22d659;
         }

         .bordeaux {
             background-color: #953543;
         }*/
    </style>
</head>
<body>
<div id="app">
    <nav id="header" class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/BEARSTRAT.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/como-trabajamos">{{ trans('menu.como') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros">{{ trans('menu.nosotros') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ trans('menu.iniciar') }}</a>
                    </li>



                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php $active_eng = (session('lang') !== null  && session('lang') == 'en')? 'nav-item-active' : ''; ?>
                    <?php $active_es = (session('lang') !== null  && session('lang') == 'es')? 'nav-item-active' : ''; ?>
                    <li class="nav-item nav-item-gray {{ $active_eng }}">
                        <a class="nav-link nav-link-lang " href="{{ url('lang', ['en']) }}">ENG</a>
                    </li>
                    <li class="nav-item nav-item-gray {{ $active_es }}">
                        <a class="nav-link nav-link-lang" href="{{ url('lang', ['es']) }}">ESP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="main">
    @yield('content')
</div>
@yield('content2')

<div class="grafica2">
    <div class="grafica2__image">
        <svg id="grafica2-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1915.37 577.33" style="enable-background:new 0 0 1915.37 577.33;" xml:space="preserve">
<style type="text/css">
    .st0{opacity:0.8;fill:none;stroke:#F4CE6E;stroke-width:7;stroke-linecap:round;stroke-miterlimit:10;}
    .st1{fill:none;stroke:#DBAD46;stroke-width:7;stroke-linecap:round;stroke-miterlimit:10;}
    .st2{fill:#0B507F;}
    .st3{fill:#F4CE6E;}
</style>
            <g id="Linea_2">
                <path class="st0" d="M-43.57,470.91c0,0,1034.98,128.31,1606.83-52.55c149.62-47.32,265.56-99.48,355.22-150.72"/>
            </g>
            <g id="Linea_1">
                <path class="st1" d="M-44.35,467.85c213.76,25.33,501.15,30.95,829.11-44.12c509.15-116.54,861.57-362.07,967.13-443.63"/>
                <g>
                    <path class="st2" d="M767.99,432.84c-0.26,0-0.53-0.01-0.8-0.04c-1.97-0.21-3.74-1.17-4.96-2.71c-1.23-1.55-1.78-3.5-1.54-5.5
			c0.47-3.85,3.73-6.75,7.58-6.75c0.26,0,0.53,0.01,0.8,0.04c1.97,0.21,3.74,1.17,4.96,2.71c1.23,1.55,1.78,3.5,1.54,5.5
			C775.11,429.94,771.85,432.84,767.99,432.84z"/>
                    <g>
                        <path class="st3" d="M768.27,420.34L768.27,420.34c0.18,0,0.36,0.01,0.54,0.03c1.3,0.14,2.47,0.77,3.27,1.79
				c0.81,1.02,1.18,2.32,1.02,3.64c-0.31,2.55-2.55,4.55-5.1,4.55c-0.18,0-0.36-0.01-0.54-0.03c-1.3-0.14-2.47-0.77-3.27-1.79
				c-0.81-1.02-1.18-2.32-1.02-3.64C763.48,422.34,765.72,420.34,768.27,420.34 M768.27,415.34c-5.05,0-9.44,3.81-10.06,8.95
				c-0.66,5.49,3.24,10.41,8.72,11c0.36,0.04,0.71,0.06,1.06,0.06c5.05,0,9.44-3.81,10.06-8.95c0.66-5.49-3.24-10.42-8.72-11
				C768.98,415.36,768.62,415.34,768.27,415.34L768.27,415.34z"/>
                    </g>
                </g>
                <g>
                    <path class="st2" d="M1040.73,357.16c-0.26,0-0.53-0.01-0.8-0.04c-1.97-0.21-3.74-1.17-4.96-2.71c-1.23-1.55-1.78-3.5-1.54-5.5
			c0.47-3.85,3.73-6.75,7.58-6.75c0.26,0,0.53,0.01,0.8,0.04c1.97,0.21,3.74,1.17,4.96,2.71c1.23,1.55,1.78,3.5,1.54,5.5
			C1047.85,354.26,1044.59,357.16,1040.73,357.16z"/>
                    <g>
                        <path class="st3" d="M1041.01,344.66L1041.01,344.66c0.18,0,0.36,0.01,0.54,0.03c1.3,0.14,2.47,0.77,3.27,1.79
				c0.81,1.02,1.18,2.32,1.02,3.64c-0.31,2.55-2.55,4.55-5.1,4.55c-0.18,0-0.36-0.01-0.54-0.03c-1.3-0.14-2.47-0.77-3.27-1.79
				c-0.81-1.02-1.18-2.32-1.02-3.64C1036.22,346.65,1038.46,344.66,1041.01,344.66 M1041.01,339.66c-5.05,0-9.44,3.81-10.06,8.95
				c-0.66,5.49,3.24,10.41,8.72,11c0.36,0.04,0.71,0.06,1.06,0.06c5.05,0,9.44-3.81,10.06-8.95c0.66-5.49-3.24-10.42-8.72-11
				C1041.72,339.67,1041.36,339.66,1041.01,339.66L1041.01,339.66z"/>
                    </g>
                </g>
                <g>
                    <path class="st2" d="M1315.43,247.06c-0.26,0-0.53-0.01-0.8-0.04c-1.97-0.21-3.74-1.17-4.96-2.71c-1.23-1.55-1.78-3.5-1.54-5.5
			c0.47-3.85,3.73-6.75,7.58-6.75c0.26,0,0.53,0.01,0.8,0.04c1.97,0.21,3.74,1.17,4.96,2.71c1.23,1.55,1.78,3.5,1.54,5.5
			C1322.55,244.16,1319.29,247.06,1315.43,247.06z"/>
                    <g>
                        <path class="st3" d="M1315.71,234.56L1315.71,234.56c0.18,0,0.36,0.01,0.54,0.03c1.3,0.14,2.47,0.77,3.27,1.79
				c0.81,1.02,1.18,2.32,1.02,3.64c-0.31,2.55-2.55,4.55-5.1,4.55c-0.18,0-0.36-0.01-0.54-0.03c-1.3-0.14-2.47-0.77-3.27-1.79
				c-0.81-1.02-1.18-2.32-1.02-3.64C1310.92,236.55,1313.16,234.56,1315.71,234.56 M1315.71,229.56c-5.05,0-9.44,3.81-10.06,8.95
				c-0.66,5.49,3.24,10.41,8.72,11c0.36,0.04,0.71,0.06,1.06,0.06c5.05,0,9.44-3.81,10.06-8.95c0.66-5.49-3.24-10.42-8.72-11
				C1316.42,229.58,1316.06,229.56,1315.71,229.56L1315.71,229.56z"/>
                    </g>
                </g>
                <g>
                    <path class="st2" d="M1598.79,94.1c-0.26,0-0.53-0.01-0.8-0.04c-1.97-0.21-3.74-1.17-4.96-2.71c-1.23-1.55-1.78-3.5-1.54-5.5
			c0.47-3.85,3.73-6.75,7.58-6.75c0.26,0,0.53,0.01,0.8,0.04c1.97,0.21,3.74,1.17,4.96,2.71c1.23,1.55,1.78,3.5,1.54,5.5
			C1605.91,91.2,1602.65,94.1,1598.79,94.1z"/>
                    <g>
                        <path class="st3" d="M1599.07,81.6L1599.07,81.6c0.18,0,0.36,0.01,0.54,0.03c1.3,0.14,2.47,0.77,3.27,1.79
				c0.81,1.02,1.18,2.32,1.02,3.64c-0.31,2.55-2.55,4.55-5.1,4.55c-0.18,0-0.36-0.01-0.54-0.03c-1.3-0.14-2.47-0.77-3.27-1.79
				c-0.81-1.02-1.18-2.32-1.02-3.64C1594.27,83.6,1596.51,81.6,1599.07,81.6 M1599.07,76.6c-5.05,0-9.44,3.81-10.06,8.95
				c-0.66,5.49,3.24,10.41,8.72,11c0.36,0.04,0.71,0.06,1.06,0.06c5.05,0,9.44-3.81,10.06-8.95c0.66-5.49-3.24-10.42-8.72-11
				C1599.77,76.62,1599.42,76.6,1599.07,76.6L1599.07,76.6z"/>
                    </g>
                </g>
                <g>
                    <path class="st2" d="M497.58,476.64c-0.26,0-0.53-0.01-0.8-0.04c-1.97-0.21-3.74-1.17-4.96-2.71c-1.23-1.55-1.78-3.5-1.54-5.5
			c0.47-3.85,3.73-6.75,7.58-6.75c0.26,0,0.53,0.01,0.8,0.04c1.97,0.21,3.74,1.17,4.96,2.71c1.23,1.55,1.78,3.5,1.54,5.5
			C504.7,473.74,501.44,476.64,497.58,476.64z"/>
                    <g>
                        <path class="st3" d="M497.86,464.14L497.86,464.14c0.18,0,0.36,0.01,0.54,0.03c1.3,0.14,2.47,0.77,3.27,1.79
				c0.81,1.02,1.18,2.32,1.02,3.64c-0.31,2.55-2.55,4.55-5.1,4.55c-0.18,0-0.36-0.01-0.54-0.03c-1.3-0.14-2.47-0.77-3.27-1.79
				c-0.81-1.02-1.18-2.32-1.02-3.64C493.06,466.14,495.3,464.14,497.86,464.14 M497.85,459.14c-5.05,0-9.44,3.81-10.06,8.95
				c-0.66,5.49,3.24,10.41,8.72,11c0.36,0.04,0.71,0.06,1.06,0.06c5.05,0,9.44-3.81,10.06-8.95c0.66-5.49-3.24-10.42-8.72-11
				C498.56,459.16,498.21,459.14,497.85,459.14L497.85,459.14z"/>
                    </g>
                </g>
            </g>
</svg>


    </div>

    <div>
        <p class="grafica2__title pb-0 mb-0">Haz clic y conoce cómo iniciar a trabajar</p>
        <p class="grafica2__subtitle mt-n3">
            de la mano con nosotros.
        </p>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-secondary">MÁS INFORMACIÓN</button>
    </div>

</div>

<footer class="footer">
    <div class="d-flex justify-content-center">
        Politica de privacidad | terminos y condiciones | Todos los derechos reservados a Bearstrat Company
    </div>
</footer>
<!-- Scripts -->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>

<script src="{{ asset('vendor_js/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('vendor_js/scrollmagic/uncompressed/plugins/animation.gsap.js') }}"></script>
<script src="{{ asset('vendor_js/scrollmagic/uncompressed/plugins/debug.addIndicators.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/vendor_js/vivus.min.js"></script>
<script src="https://isuttell.github.io/sine-waves/javascripts/sine-waves.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    /*$(function () { // wait for document ready
        // init
        var controller = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onLeave',
                duration: "200%" // this works just fine with duration 0 as well
                // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
                // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
            }
        });

        // get all slides
        var slides = document.querySelectorAll(".p-section.panel");

        // create scene for every slide
        for (var i=0; i<slides.length; i++) {
            new ScrollMagic.Scene({
                triggerElement: slides[i]
            })
                .setPin(slides[i], {pushFollowers: false})
                .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
        }
    });*/
</script>
</body>
</html>
