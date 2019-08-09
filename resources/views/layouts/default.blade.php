<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">
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
<div>
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
                        <a class="nav-link" href="/nosotros">{{ trans('menu.nosotros') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/como-iniciar">{{ trans('menu.iniciar') }}</a>
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

<div id="">
    @yield('content')
</div>
@yield('content2')



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

<script src="{{ asset('vendor_assets/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('vendor_assets/scrollmagic/uncompressed/plugins/animation.gsap.js') }}"></script>
<script src="{{ asset('vendor_assets/scrollmagic/uncompressed/plugins/debug.addIndicators.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/vendor_assets/vivus.min.js"></script>
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
