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
                        <div class="title">
                            <p class="my-0 py-0">Somos</p>
                            <p class="mt-n4 section1__subtitle">Bearstrat</p>
                            <div class="section1__description">
                                Somos una empresa especializada en la compra y venta de instrumentos financieros en mercados de commodities y equity. Brindamos rendimientos arriba del promedio ofrecido por instituciones financieras, negocios tradicionales y bienes raíces.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 px-0 mx-0">
                <div class="item section2">
                    <div class="pin-wrapper">
                        <div class="image2"></div>
                        <div class="titles">
                            <h2 class="section2__description">
                                Somos mucho más que simplemente asesores de inversión. Somos aliados estratégicos, dedicados a manejar de forma integral tus inversiones.
                            </h2>
                            <h2 class="mt-3 section2__title">Somos</h2>
                            <h2 class="mt-n4 section2__subtitle">Bearstrat</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bcg-parallax">
        <div class="bcg"></div>
        <div class="content-wrapper">
            <p class="bcg-parallax__title mb-0">We’re not just investment advisors</p>
            <p class="bcg-parallax__title mb-0">
                We’re profit hunters
            </p>
            <p class="bcg-parallax__subtitle">
                We are Bearstrat

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
                <p class="mb-0">El  modelo </p>
                <p class="mt-n1 mt-md-n4">Bearstrat </p>
            </div>

            <div class="pin-section panel grafica-content1">
                <div class="grafica__content">
                    <p>En Bearstrat nos dedicamos a crear planes a tu medida para alcanzar el máximo rendimiento de tus inversiones. </p>
                    <p>
                        Para lograrlo seguimos una estrategia basada en modelos matemáticos (<span class="LatoBoldItalic">Fibonacci</span> y <span class="LatoBoldItalic">Elliot Wave Theory</span> ) para predecir el comportamiento de los mercados.
                    </p>
                </div>
            </div>
            <div class="pin-section panel grafica-content2">
                <div class="grafica__content">
                <p>
                    De esta manera generamos valor en el patrimonio de nuestros socios al administrar correctamente el riesgo del mercado.
                </p>
                </div>
            </div>
            {{--<div class="pin-section panel grafica-content3">
                <div class="grafica__content">
                <p></p>
                </div>
            </div>--}}

        </div>
    </div>
    {{--grafica --}}

    {{-- grafica1--}}
    <div class="grafica1">



        {{--<div class="row">
            <div class="col-6 section-grafica1">
                <div class="">

                    <div class="yearCounter">
                        <div class="col-12 col-md-8 offset-md-2">
                            <p class="grafica1__title mb-0">El  modelo </p>
                            <p class="grafica1__title mt-n3">bearstrat </p>
                        </div>
                        <div class="">
                            <span id="tText"></span>
                            <span class="year-loader"> </span>
                        </div>
                        <div class="yearText">
                            <div class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp seccion1 mt-n3">

                                <div class="grafica1__subtitle">
                                    <p>En Bearstrat nos dedicamos a crear planes a tu medida para alcanzar el máximo rendimiento de tus inversiones. </p>
                                </div>
                            </div>

                            <div  style="display: none"  class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp seccion2">
                               <div class="grafica1__subtitle">
                                   Para lograrlo seguimos una estrategia basada en modelos matemáticos (Fibonacci y Elliot Wave Theory) para predecir el comportamiento de los mercados.
                               </div>

                            </div>

                            <div  style="display: none"  class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp seccion3">
                               <div class="grafica1__subtitle">
                                   De esta manera generamos valor en el patrimonio de nuestros socios al administrar correctamente el riesgo del mercado.
                               </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 grafica1__right">
                <img class="img-fluid" id="myimg" src="/img/Grafica_1/0.png" alt="">
            </div>
        </div>--}}

    </div>
    {{-- /grafica1--}}

    {{--  conocenos --}}
    <div class="landing__conocenos">
        <div class="landing__conocenos-text">
            <hr class="hr-gold-vertical">
            <p class="landing__conocenos-title my-0 py-0">En Bearstrat nos convertimos en tus</p>
            <p class="landing__conocenos-subtitle mb-0">Aliados para invertir.</p>
            <p class="landing__conocenos-title mb-0">Conoce más sobre nuestra filosofía.</p>
            <hr class="hr-gold-vertical">
            <button class="btn btn-outline-secondary">CONÓCENOS</button>
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur corporis cum cumque, cupiditate deleniti distinctio et excepturi hic ipsa, laudantium minus necessitatibus, nobis odit perferendis possimus praesentium quia quo saepe totam veniam voluptatem voluptates voluptatibus? Cumque enim ipsum quis?
                     </span>
                    <span class="semicolon">"</span>
                    <p class="author">Lorem ipsum dolor. </p>
                    <p>
                        <span class="semicolon">"</span>
                        <span class="LatoItalic title-slide">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur corporis cum cumque, cupiditate deleniti distinctio et excepturi hic ipsa, laudantium minus necessitatibus, nobis odit perferendis possimus praesentium quia quo saepe totam veniam voluptatem voluptates voluptatibus? Cumque enim ipsum quis?
                     </span>
                        <span class="semicolon">"</span>
                    <p class="author">Lorem ipsum dolor. </p>
                    </p>
                </div>

                <div id="seccion2"  style="display: none"  class="col-12 col-md-8 offset-md-2 animated animatedFadeInUp fadeInUp">
                    <span class="semicolon">"</span>
                    <span class="LatoItalic title-slide">
                    2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur corporis cum cumque, cupiditate deleniti distinctio et excepturi hic ipsa, laudantium minus necessitatibus
                     </span>
                    <span class="semicolon">"</span>
                    <p class="author">Lorem ipsum dolor. </p>
                    <p>
                        <span class="semicolon">"</span>
                        <span class="LatoItalic title-slide">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur corporis cum cumque, cupiditate deleniti distinctio et excepturi hic ipsa, laudantium minus necessitatibus, nobis odit perferendis possimus praesentium quia quo
                     </span>
                        <span class="semicolon">"</span>
                    <p class="author">Lorem ipsum dolor. </p>
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
