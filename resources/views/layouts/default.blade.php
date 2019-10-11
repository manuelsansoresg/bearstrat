<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">

</head>

<body>
    <div>
        <nav id="header" class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/Bearstrat.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    {{--<span class="navbar-toggler-icon"></span>--}}
                    <i class="fas fa-bars text-white"></i>
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
                    <ul class="navbar-nav ml-auto mt-3 mt-md-0">
                        <?php $active_eng = (session('lang') !== null  && session('lang') == 'en') ? 'nav-item-active' : ''; ?>
                        <?php
                        if (session('lang') == null) {
                            $active_eng = '';
                            $active_es = 'nav-item-active';
                        } else {
                            $active_es = (session('lang') !== null  && session('lang') == 'es') ? 'nav-item-active' : '';
                        }
                        ?>
                        <?php  ?>
                        <div class="d-block d-md-none hr-meu-movil"></div>
                        <li class="nav-item nav-item-gray {{ $active_eng }} mt-3 mt-md-0">
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
        <div class="d-none d-md-flex justify-content-center">
            <a href="#" class="text-warning"> &nbsp; {{ trans('footer.politica') }} &nbsp; |</a>
            <a href="#" class="text-warning"> &nbsp; {{ trans('footer.terminos') }} &nbsp; |</a>
            <a href="#" class="text-warning"> &nbsp; {{ trans('footer.derechos') }} </a>
        </div>
        <div class="text-center d-block d-md-none">
            <a href="#" class="text-warning"> &nbsp; <ins>{{ trans('footer.politica') }} </ins> &nbsp; </a> <br>
            <a href="#" class="text-warning"> &nbsp; <ins>{{ trans('footer.terminos') }} </ins> &nbsp; </a><br>
            <a href="#" class="text-warning"> &nbsp; <ins>{{ trans('footer.derechos') }} </ins> </a>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
