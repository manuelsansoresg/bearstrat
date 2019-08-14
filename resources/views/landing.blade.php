@extends('layouts.default')

@section('content')
    <video autoplay loop muted playsinline class="video">
        <source src="/video/Vídeo-BEARSTRAT-2-BAJA.mp4" id="myVideo" type="video/mp4">
    </video>
    <div class="section-mask"></div>
    <div class="container-fluid landing-bear">
        <div class="row">
            <div class="col-12 px-0 mx-0">
                <div class="item section1 mt-n2">
                    <div class="pin-wrapper">
                        <div class="image1"></div>
                        <div class="title" data-aos="fade-up" data-aos-duration="1500">
                            <p class="my-0 py-0">{{ trans('home.seccion1-title') }}</p>
                            <p class="mt-n4 section1__subtitle">{{ trans('home.seccion1-title2') }}</p>
                            <div class="section1__description">
                                {!! trans('home.seccion1-description') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 px-0 mx-0">
                <div class="item section2">
                    <div class="pin-wrapper">
                        <div class="image2"></div>
                        <div class="titles" data-aos="fade-up" data-aos-duration="1500">
                            <h2 class="section2__description">
                                {{ trans('home.seccion2-description') }}
                            </h2>
                            <h2 class="mt-3 section2__title">{{ trans('home.seccion1-title') }}</h2>
                            <h2 class="mt-n4 section2__subtitle">{{ trans('home.seccion1-title2') }}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- seccion 2 movil--}}
    <div class="seccion1-movil">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <p class="seccion1-movil__title mb-0">{{ trans('home.seccion1-title') }}</p>
                    <p class="seccion1-movil__subtitle">{{ trans('home.seccion1-title2') }}</p>
                </div>

                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1500">
                    <p class="seccion1-movil__description">
                        {!! trans('home.seccion1-description') !!}
                    </p>

                    <p class="seccion1-movil__description">
                        {!! trans('home.seccion2-description') !!}
                    </p>
                </div>
            </div>
        </div>


    </div>
    {{-- seccion 2 movil--}}

    <div class="bcg-parallax">
        <div class="bcg"></div>
        <div class="content-wrapper">
            <p class="bcg-parallax__title mb-0">{{ trans('home.seccion3-title') }}</p>
            <p class="bcg-parallax__title mb-0">
                {{ trans('home.seccion3-title2') }}
            </p>
            <p class="bcg-parallax__subtitle">
                {{ trans('home.seccion3-title3') }}

            </p>
        </div>
    </div>
    {{--grafica --}}
    <div class="grafica">

        <div id="pinContainer">
            <div class="grafica__chart">
                <img class="img-fluid" id="myimg" src="/img/Grafica_1/0.png" alt="">
            </div>

            <div class="grafica__title">
                <p class="mb-0">{{ trans('home.seccion4-title') }} </p>
                <p class="mt-n1 mt-md-n4">{{ trans('home.seccion4-title2') }} </p>
            </div>

            <div class="pin-section panel grafica-content1">
                <div class="grafica__content">
                    <p>{{ trans('home.seccion4-description') }} </p>
                    <p>
                       {!! trans('home.seccion4-description2') !!}
                    </p>
                </div>
            </div>
            <div class="pin-section panel grafica-content2">
                <div class="grafica__content">
                <p>
                    {{ trans('home.seccion4-description3') }}
                </p>
                </div>
            </div>


        </div>
    </div>
    {{--grafica --}}

    {{-- grafica movil--}}
    <div class="grafica-movil">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="/img/home/modelo_beartrat.gif" alt="">
                </div>
                <div class="col-12 text-center grafica-movil__title" data-aos="fade-up" data-aos-duration="1500">
                    <p class="my-0">{{ trans('home.seccion4-title') }} </p>
                    <p class="mt-n3">{{ trans('home.seccion4-title2') }} </p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                    <div class="grafica-movil__description">
                        <p>{{ trans('home.seccion4-description') }} </p>
                        <p>
                            {!! trans('home.seccion4-description2') !!}
                        </p>
                        <p>
                            {{ trans('home.seccion4-description3') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- grafica movil--}}

    {{--  conocenos --}}
    <div class="landing__conocenos">
        <div class="landing__conocenos-text">
            <hr class="hr-gold-vertical">
            <p class="landing__conocenos-title my-0 py-0">{{ trans('home.seccion5-title') }}</p>
            <p class="landing__conocenos-subtitle mb-0">{{ trans('home.seccion5-title2') }}</p>
            <p class="landing__conocenos-title mb-0">{{ trans('home.seccion5-title3') }}</p>
            <hr class="hr-gold-vertical">
            <button class="btn btn-outline-secondary">{{ trans('home.seccion5-btn') }}</button>
        </div>
    </div>
    {{--  /conocenos --}}


    <div id="section">

        <div class="yearCounter">
            <div class="col-12 col-md-8 offset-md-2">
                <hr class="hr-gold">
            </div>
            <div class="yearNumber">
                <span id="tText"></span>
                <span class="year-loader">

                </span>
            </div>
            <div class="yearText" data-aos="fade-up" data-aos-duration="1500">
                <div id="seccion1"   class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp">
                    <span class="semicolon">"</span>
                    <span class="LatoItalic title-slide">
                        {{ trans('home.seccion6-description') }}
                     </span>
                    <span class="semicolon">"</span>
                    <p class="author">{{ trans('home.seccion6-author') }}</p>
                    <p>
                        <span class="semicolon">"</span>
                        <span class="LatoItalic title-slide">
                        {{ trans('home.seccion6-description2') }}
                     </span>
                        <span class="semicolon">"</span>
                    <p class="author">{{ trans('home.seccion6-author2') }} </p>
                    </p>
                </div>

                <div id="seccion2"  style="display: none"  class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp">
                    <span class="semicolon">"</span>
                    <span class="LatoItalic title-slide">
                        {{ trans('home.seccion6-description3') }}
                     </span>
                    <span class="semicolon">"</span>
                    <p class="author">{{ trans('home.seccion6-author3') }} </p>
                    <p>
                        <span class="semicolon">"</span>
                        <span class="LatoItalic title-slide">
                            {{ trans('home.seccion6-description4') }}
                     </span>
                        <span class="semicolon">"</span>
                    <p class="author"> {{ trans('home.seccion6-author4') }} </p>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2">
                <hr class="hr-gold">
            </div>
        </div>
    </div>
    @include('grafica2')
@endsection
