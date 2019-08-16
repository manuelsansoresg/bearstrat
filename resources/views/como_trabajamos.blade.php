@extends('layouts.default')

@section('content')
    <div class="como-trabajamos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="como-trabajamos__text" data-aos="fade-left" data-aos-duration="1500">
                       <p class="como-trabajamos__title">
                             {{ trans('como_trabajamos.seccion1-title') }}
                       </p>
                       <p class="como-trabajamos__subtitle">
                             {{ trans('como_trabajamos.seccion1-title2') }}
                       </p>
                   </div>
                    <div>
                        <canvas id="waves"></canvas>
                    </div>
                    <div class="como-trabajamos__description"  data-aos="fade-up" data-aos-duration="1500">
                        {{ trans('como_trabajamos.seccion1-description') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="como-trabajamos__aligment">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <article id="cb01" class="content-block">
                        <div class="wrapper">
                            {{-- linea--}}
                            <svg  version="1.1" id="linea" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">
                                <style type="text/css">


                                </style>
                                                                <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                                                <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                                                <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            {{-- linea--}}
                            <header class="slideInUp">
                                <p class="como-trabajamos__aligment__title mb-0"> {{ trans('como_trabajamos.seccion2-title') }}  </p>
                                <p class="como-trabajamos__aligment__title mt-0 mt-n3"> {{ trans('como_trabajamos.seccion2-title2') }} </p>
                            </header>
                            <section>
                                <p class="slideInUp slideInUp2 como-trabajamos__aligment__description" >
                                        {{ trans('como_trabajamos.seccion2-description') }}
                                </p>
                            </section>
                            {{-- linea--}}
                            <svg  version="1.1" id="linea2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">

                                <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            {{-- linea--}}
                        </div> <!-- .wrapper -->
                    </article>
                </div>
            </div>
        </div>


    </div>

    <div class="como-trabajamos__risk-desktop pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6  mx-0 px-0 como-trabajamos__risk-desktop__left text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mx-0 px-0 text-right">
                                <img class="img-fluid como-trabajamos__risk-desktop__img" src="/img/como_trabajamos/foto_risk.png" alt="" data-aos="fade-right" data-aos-duration="1500">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mx-0 px-0">
                    <div class="como-trabajamos__risk-desktop__right">
                        <div class="como-trabajamos__risk__right-textOne " data-aos="zoom-in-up" data-aos-duration="1500">
                            <p class="como-trabajamos__risk__right-textOne-title mb-0">{{ trans('como_trabajamos.seccion3-title') }}</p>
                            <p class="mt-n3 mb-0 como-trabajamos__risk__right-textOne-subtitle">{{ trans('como_trabajamos.seccion3-title2') }}</p>
                            <p class=" como-trabajamos__risk__right-textOne-description">
                                {!! trans('como_trabajamos.seccion3-description') !!}

                            </p>
                        </div>
                        <div class="col-12 como-trabajamos__risk-desktop__right-background">
                            <div class="como-trabajamos__risk__right-text como-trabajamos__risk-desktop__right-text">
                                <div data-aos="zoom-in-up" data-aos-duration="1500">
                                    {!! trans('como_trabajamos.seccion3-description2') !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="como-trabajamos__risk d-none">
        <div class="como-trabajamos__risk__left" data-aos="fade-right" data-aos-duration="1500">
            <img class="img-fluid" src="/img/como_trabajamos/foto_risk.png" alt="">
        </div>
        <div class="como-trabajamos__risk__right">
            <div class="como-trabajamos__risk__right-textOne" data-aos="zoom-in-up" data-aos-duration="1500">
                <p class="como-trabajamos__risk__right-textOne-title mb-0">{{ trans('como_trabajamos.seccion3-title') }}</p>
                <p class="mt-n3 mb-0 como-trabajamos__risk__right-textOne-subtitle">{{ trans('como_trabajamos.seccion3-title2') }}</p>
                <p class=" como-trabajamos__risk__right-textOne-description">
                    {{ trans('como_trabajamos.seccion3-description') }}

                </p>
            </div>
            <div class="como-trabajamos__risk__right-text">
                <div data-aos="zoom-in-up" data-aos-duration="1500">
                    {!! trans('como_trabajamos.seccion3-description2') !!}
                </div>

            </div>
            <img class="img-fluid como-trabajamos__footer"  src="/img/como_trabajamos/Cuadrado_risk.png" alt="">
        </div>

    </div>
    <div class="como-trabajamos__risk-movil">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="zoom-in-up" data-aos-duration="1500">
                    <img class="img-fluid" src="/img/como_trabajamos/foto_risk.png" alt="">
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                    <p class="como-trabajamos__risk__right-textOne-title mb-0">{{ trans('como_trabajamos.seccion3-title') }}</p>
                    <p class="mt-n3 mb-0 como-trabajamos__risk__right-textOne-subtitle">{{ trans('como_trabajamos.seccion3-title2') }}</p>
                    <p class=" como-trabajamos__risk__right-textOne-description">
                        {{ trans('como_trabajamos.seccion3-description') }}

                    </p>
                </div>
                <div class="col-12 como-trabajamos__risk-movil__description" >
                    <div data-aos="fade-up" data-aos-duration="1500">
                        {!! trans('como_trabajamos.seccion3-description2') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('grafica2')
@endsection
