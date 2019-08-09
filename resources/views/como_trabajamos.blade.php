@extends('layouts.default')

@section('content')
    <div class="como-trabajamos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="como-trabajamos__text" data-aos="fade-left" data-aos-duration="1500">
                       <p class="como-trabajamos__title">
                           Trading
                       </p>
                       <p class="como-trabajamos__subtitle">
                           Talent
                       </p>
                   </div>
                    <div>
                        <canvas id="waves"></canvas>
                    </div>
                    <div class="como-trabajamos__description"  data-aos="fade-up" data-aos-duration="1500">
                        Tenemos dos equipos especializados en las áreas de commodities y equity respectivamente. Cada uno es independiente y ambos se rigen por reglas de riesgo y control de operaciones.
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
                                <p class="como-trabajamos__aligment__title mb-0">  Alignment With  </p>
                                <p class="como-trabajamos__aligment__title mt-0 mt-n3"> Our Investors </p>
                            </header>
                            <section>
                                <p class="slideInUp slideInUp2 como-trabajamos__aligment__description" >
                                    Nuestros inversionistas son nuestros socios, por ello todo lo que hacemos está enfocado en aumentar su patrimonio, ofreciendo los mayores rendimientos de la industria.
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
        {{--<div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <hr>

                    <article id="slide01" class="slide fs animated fade-up">
                        <div class="wrapper">
                            <header class="slideInUp">
                                <h1>A picture is worth a thousand words</h1>
                            </header>
                            <section>
                                <p class="slideInUp slideInUp2">Let the images do the talking and use text for short summaries.</p>
                            </section>
                        </div> <!-- .wrapper -->
                    </article>

                    <hr>
                </div>
            </div>
        </div>--}}

    </div>

    <div class="container-fluid riskManagment d-none">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-1" data-aos="fade-right" data-aos-duration="1500">
                <img class="img-fluid" src="/img/como_trabajamos/foto_risk.png" alt="">
            </div>
            <div class="col-12 col-md-6 ml-md-n4"  data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="riskManagment__text">
                    <p class="riskManagment__title mb-0">risk</p>
                    <p class="mt-n3 mb-0 riskManagment__subtitle">management</p>
                    <p class="riskManagment__description como-trabajamos__risk__right-textOne-description">
                        Nuestros equipos de trading están enfocados en producir ganancias constantes en nuestro día a día, manteniendo un equilibrio positivo entre días ganadores y días perdedores.

                    </p>
                </div>
                <div class="row">
                    <div class="col-12 riskManagment__right">
                        <img  src="/img/como_trabajamos/Cuadrado_risk.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 riskManagment__text-right" data-aos="zoom-in-up" data-aos-duration="1500">
                        Nuestro <span class="color-yellow">objetivo ratio</span> de operaciones ganadoras vs perdedoras es de por lo <span class="color-yellow">menos 3:1. </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="como-trabajamos__risk ">
        <div class="como-trabajamos__risk__left" data-aos="fade-right" data-aos-duration="1500">
            <img class="img-fluid" src="/img/como_trabajamos/foto_risk.png" alt="">
        </div>
        <div class="como-trabajamos__risk__right">
            <div class="como-trabajamos__risk__right-textOne" data-aos="zoom-in-up" data-aos-duration="1500">
                <p class="como-trabajamos__risk__right-textOne-title mb-0">risk</p>
                <p class="mt-n3 mb-0 como-trabajamos__risk__right-textOne-subtitle">management</p>
                <p class=" como-trabajamos__risk__right-textOne-description">
                    Nuestros equipos de trading están enfocados en producir ganancias constantes en nuestro día a día, manteniendo un equilibrio positivo entre días ganadores y días perdedores.

                </p>
            </div>
            <div class="como-trabajamos__risk__right-text" data-aos="zoom-in-up" data-aos-duration="1500">
                Nuestro <span class="color-yellow">objetivo ratio</span> de operaciones ganadoras vs perdedoras es de por lo <span class="color-yellow">menos 3:1. </span>

            </div>
            <img class="img-fluid" src="/img/como_trabajamos/Cuadrado_risk.png" alt="">
        </div>

    </div>

    @include('grafica2')
@endsection
