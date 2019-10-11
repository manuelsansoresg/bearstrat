@extends('layouts.default')

@section('title', 'Bearstrat')
    


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
                            <p class="mt-3">{{ trans('home.seccion2-description') }}</p>

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
                        {{-- <h2 class="section2__description">
                            {{ trans('home.seccion2-description') }}
                        </h2> --}}
                        <h2 class="mt-0 section2__title">{!! trans('home.seccion2-title') !!}</h2>
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-2">
                                    @include('svg_home.Bienes_Raices')
                                </div>
                                <div class="col-10">
                                    <p class="section2__title2">{{ trans('home.section2-titleIcon') }}</p>
                                    <ul class="section2__ul">
                                        <li>{{ trans('home.section2-titleli1') }}</li>
                                        <li>{{ trans('home.section2-titleli2') }}</li>
                                    </ul>
                                </div>

                                <div class="col-2">
                                    @include('svg_home.financieras')
                                </div>
                                <div class="col-10">
                                    <p class="section2__title2">{{ trans('home.section2-titleIcon2') }}</p>
                                    <ul class="section2__ul">
                                        <li>{{ trans('home.section2-titleli3') }}</li>
                                        <li>{{ trans('home.section2-titleli4') }}</li>
                                    </ul>
                                </div>

                                <div class="col-2 align-self-center">
                                    @include('svg_home.Negocios')
                                </div>
                                <div class="col-10">
                                    <p class="section2__title2">{{ trans('home.section2-titleIcon3') }}</p>
                                    <ul class="section2__ul">
                                        <li>{{ trans('home.section2-titleli5') }}</li>
                                        <li>{{ trans('home.section2-titleli6') }}</li>
                                        <li>{{ trans('home.section2-titleli7') }}</li>
                                        <li>{{ trans('home.section2-titleli8') }}</li>
                                    </ul>
                                </div>

                                <div class="col-2 align-self-center">
                                    @include('svg_home.bs')
                                </div>
                                <div class="col-10">
                                    <p class="section2__title3">{{ trans('home.section2-titleIcon4') }}</p>
                                    <ul class="section2__ul">
                                        <li>{{ trans('home.section2-titleli9') }}</li>
                                        <li>{{ trans('home.section2-titleli10') }}</li>
                                        <li>{{ trans('home.section2-titleli11') }}</li>
                                        <li>{{ trans('home.section2-titleli12') }}</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        {{-- <h2 class="mt-n4 section2__subtitle">{{ trans('home.seccion1-title2') }}</h2> --}}

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
            <div class="col-12 text-center">
                <img src="{{ asset('/img/Logo_Beartrat.png') }}" alt="">
            </div>

            <div class="col-12 text-center mt-4" data-aos="fade-up" data-aos-duration="1500">
                <p class="seccion1-movil__description">
                    {!! trans('home.seccion1-description') !!}
                </p>

                <p class="seccion1-movil__description">
                    {!! trans('home.seccion2-description') !!}
                </p>
            </div>
        </div>
        <div class="container d-none">
            <div class="row mt-3">
                <div class="col-3 text-center">
                    @include('svg_home.bs')
                    <p class="section1__percent">50%</p>
                </div>
                <div class="col-3 text-center">
                    @include('svg_home.financieras')
                    <p class="section1__percent">20%</p>
                </div>
                <div class="col-3 text-center">
                    @include('svg_home.Negocios')
                    <p class="section1__percent">20%</p>
                </div>
                <div class="col-3 text-center">
                    @include('svg_home.Bienes_Raices')
                    <p class="section1__percent">10%</p>
                </div>
            </div>
        </div>
    </div>


</div>
{{-- seccion 2 movil--}}

<div class="section2-movil">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mt-3 section2__title">{!! trans('home.seccion2-title') !!}</h2>
            </div>

            <div class="col-3">
                @include('svg_home.Bienes_Raices')
            </div>
            <div class="col-9">
                <p class="section2__title2">{{ trans('home.section2-titleIcon') }}</p>
                <ul class="section2__ul">
                    <li>{{ trans('home.section2-titleli1') }}</li>
                    <li>{{ trans('home.section2-titleli2') }}</li>
                </ul>
            </div>

            <div class="col-3">
                @include('svg_home.financieras')
            </div>
            <div class="col-9">
                <p class="section2__title2">{{ trans('home.section2-titleIcon2') }}</p>
                <ul class="section2__ul">
                    <li>{{ trans('home.section2-titleli3') }}</li>
                    <li>{{ trans('home.section2-titleli4') }}</li>
                </ul>
            </div>

            <div class="col-3 align-self-center">
                @include('svg_home.Negocios')
            </div>
            <div class="col-9">
                <p class="section2__title2">{{ trans('home.section2-titleIcon3') }}</p>
                <ul class="section2__ul">
                    <li>{{ trans('home.section2-titleli5') }}</li>
                    <li>{{ trans('home.section2-titleli6') }}</li>
                    <li>{{ trans('home.section2-titleli7') }}</li>
                    <li>{{ trans('home.section2-titleli8') }}</li>
                </ul>
            </div>

            <div class="col-3 align-self-center">
                @include('svg_home.bs')
            </div>
            <div class="col-9">
                <p class="section2__title2">{{ trans('home.section2-titleIcon4') }}</p>
                <ul class="section2__ul">
                    <li>{{ trans('home.section2-titleli9') }}</li>
                    <li>{{ trans('home.section2-titleli10') }}</li>
                    <li>{{ trans('home.section2-titleli11') }}</li>
                    <li>{{ trans('home.section2-titleli12') }}</li>
                </ul>
            </div>



        </div>
    </div>
</div>

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
<div class="grafica-full pb-5 mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-1" data-aos="fade-up" data-aos-duration="1500">
                <div class="grafica-full__title">
                    <p class="mb-0">{{ trans('home.seccion4-title') }} </p>
                    <p class="">{{ trans('home.seccion4-title2') }} </p>
                </div>
                <div class="grafica-full__description">
                    <p>{{ trans('home.seccion4-description') }} </p>
                    <p>
                        {!! trans('home.seccion4-description2') !!}
                    </p>
                </div>
                <div class="grafica-full__description">
                    {{ trans('home.seccion4-description3') }}
                </div>
            </div>
            <div class="col-md-7 align-self-center">
                <img class="img-fluid" src="/img/home/modelo_beartrat.gif" alt="">
            </div>
        </div>
    </div>
</div>
<div class="grafica d-none">

    <div id="pinContainer">
        <div class="grafica__chart">
            {{--<img class="img-fluid" id="myimg" src="/img/Grafica_1/0.png" alt="">--}}
            <img class="img-fluid" src="/img/home/modelo_beartrat.gif" alt="">
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

{{-- conocenos --}}
<div class="landing__conocenos">
    <div class="landing__conocenos-text">
        <hr class="hr-gold-vertical">
        <p class="landing__conocenos-title my-0 py-0">{{ trans('home.seccion5-title') }}</p>
        <p class="landing__conocenos-subtitle mb-0">{{ trans('home.seccion5-title2') }}</p>
        <p class="landing__conocenos-title mb-0">{{ trans('home.seccion5-title3') }}</p>
        <hr class="hr-gold-vertical">
        <button class="btn btn-outline-secondary" onclick="window.location='/nosotros'">{{ trans('home.seccion5-btn') }}</button>
    </div>
</div>
{{-- /conocenos --}}


<div id="section" class="pb-4">

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
            <div id="seccion1" class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp">
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

           <!--  <div id="seccion2" style="display: none" class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp">
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
            </div> -->
        </div>
        <div class="col-12 col-md-8 offset-md-2">
            <hr class="hr-gold">
        </div>
    </div>
</div>
@include('grafica2')
@endsection