@extends('layouts.default')

@section('content')
    <div class="nosotros">
        <div class="nosotros__hero">
            <div class="nosotros__hero__left"  data-aos="zoom-in" data-aos-duration="1500">

            </div>
            <div class="nosotros__hero__right" data-aos="fade-up" data-aos-duration="1500">
                <div class="nosotros__hero__right__title">
                    <p> {{ trans('nosotros.seccion1-title') }} </p>
                </div>
                <div class="nosotros__hero__right__description">
                    <p>
                        {{ trans('nosotros.seccion1-description') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="nosotros__hero-movil">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="zoom-in" data-aos-duration="1500">
                        <img class="img-fluid" src="/img/nosotros/Imagen_nosotros_414.png" data-tilt-axis="x" data-tilt>
                    </div>
                    <div class="col-12" data-aos="fade-up" data-aos-duration="1500">

                        <div class="nosotros__hero__right__description">
                            <div class="nosotros__hero__right__title">
                                <p> {{ trans('nosotros.seccion1-title') }} </p>
                            </div>
                            <p>
                                {{ trans('nosotros.seccion1-description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nosotros__oso3d" >
            <div class="nosotros__oso3d__img" data-tilt-axis="x" data-tilt>
                <img class="img-fluid" src="/img/nosotros/Oso.png" alt="">
            </div>
            <div class="nosotros__oso3d__content-text">
               <div class="nosotros__oso3d__text">
                   {!! trans('nosotros.seccion2-description')  !!}
               </div>
            </div>
        </div>
        <div class="nosotros__seccion2 d-none">
            <div class="nosotros__seccion2__hero"  data-tilt-axis="x" data-tilt>
                <div class="nosotros__seccion2__content-description"  >
                    <div class="nosotros__seccion2__description" data-aos="fade-up" data-aos-duration="1500">
                    {!! trans('nosotros.seccion2-description')  !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="nosotros_seccion3">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">CDMX </p>
                        <a href="https://www.google.com/maps/place/Plaza+Metr%C3%B3poli+Patriotismo/@19.396306,-99.1826388,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff653a323f85:0xe120e3c6baa15f01!8m2!3d19.396306!4d-99.1804501?hl=es-MX" target="_blank"><img class="img-fluid" onmouseout="this.src='/img/nosotros/Mexico_azul.png';" onmouseover="this.src='/img/nosotros/Mexico_color.png'" src="/img/nosotros/Mexico_azul.png" alt=""></a>
                        <div class="nosotros__seccion3__content-text">
                            <p class="nosotros__seccion3__subtitle mb-0 mt-3" data-aos="fade-up" data-aos-duration="1500">
                                Plaza Metrópoli Patriotismo, Piso 4, <br> Col. San Pedro de los Pinos
                            </p>
                            <p class="nosotros__seccion3__subtitle2" data-aos="fade-up" data-aos-duration="1500">
                                Ciudad de México, CDMX
                            </p>
                        </div>
                        <div class="row justify-content-center mt-n3">
                            <div class="col-12  col-md-8">
                                <svg  version="1.1" id="linea1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">
                                <style type="text/css">


                                </style>
                                    <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                    <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                    <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Querétaro </p>
                        <img class="img-fluid" onmouseout="this.src='/img/nosotros/Queretaro_azul.png';" onmouseover="this.src='/img/nosotros/Queretaro.png'" src="/img/nosotros/Queretaro_azul.png" alt="">
                        <div class="nosotros__seccion3__content-text">
                            <p class="nosotros__seccion3__subtitle mb-0 mt-3" data-aos="fade-up" data-aos-duration="1500">
                                AV. Madero, Centro
                            </p>
                            <p class="nosotros__seccion3__subtitle2" data-aos="fade-up" data-aos-duration="1500">
                                Santiago de Querétaro, Qro
                            </p>
                        </div>

                        <div class="row justify-content-center mt-n3">
                            <div class="col-12  col-md-8">
                                <svg  version="1.1" id="linea2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">
                                <style type="text/css">


                                </style>
                                    <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                    <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                    <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Mérida </p>
                        <a href="https://www.google.com/maps/place/Calle+71+207a,+Montes+de+Am%C3%A9,+97115+M%C3%A9rida,+Yuc./@21.032974,-89.6220164,19z/data=!3m1!4b1!4m5!3m4!1s0x8f56769cb77ea3b9:0x771dc809ef7c5324!8m2!3d21.0329727!4d-89.6214692?hl=es-MX" target="_blank"><img class="img-fluid"  onmouseout="this.src='/img/nosotros/Merida_azul.png';" onmouseover="this.src='/img/nosotros/Merida_color.png'" src="/img/nosotros/Merida_azul.png" alt=""></a>
                        <div class="nosotros__seccion3__content-text">
                            <p class="nosotros__seccion3__subtitle mb-0 mt-3" data-aos="fade-up" data-aos-duration="1500">
                                Calle 71 #203, Col. Montes de Amé

                            </p>
                            <p class="nosotros__seccion3__subtitle2" data-aos="fade-up" data-aos-duration="1500">
                                Mérida, Yuc
                            </p>
                        </div>
                        <div class="row justify-content-center mt-n3">
                            <div class="col-12  col-md-8">
                                <svg  version="1.1" id="linea3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">
                                <style type="text/css">


                                </style>
                                    <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                    <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                    <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Montreal</p>
                        <img class="img-fluid" onmouseout="this.src='/img/nosotros/montreal_azul.png';" onmouseover="this.src='/img/nosotros/montreal_color.png'" src="/img/nosotros/montreal_azul.png" alt="">
                        <div class="nosotros__seccion3__content-text">
                            <p class="nosotros__seccion3__subtitle mb-0 mt-3" data-aos="fade-up" data-aos-duration="1500">
                                1409 Rue Saint-Marc,
                            </p>
                            <p class="nosotros__seccion3__subtitle2" data-aos="fade-up" data-aos-duration="1500">
                                Monteréal, Canadá
                            </p>
                        </div>
                        <div class="row justify-content-center mt-n3">
                            <div class="col-12  col-md-8">
                                <svg  version="1.1" id="linea4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      viewBox="0 0 479 16.5" style="enable-background:new 0 0 479 16.5;" xml:space="preserve">
                                <style type="text/css">


                                </style>
                                    <line class="como-st0" x1="16" y1="8.25" x2="465.5" y2="8.25"/>
                                    <circle class="como-st1" cx="11.75" cy="8.25" r="4.75"/>
                                    <circle class="como-st1" cx="468.25" cy="8.25" r="4.75"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nosotros__grafica2 mt-5" >
            <div class="nosotros__grafica2__image" id="grafica2">

                <svg id="grafica2-svg" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 928.66 222.75"><defs><style>.cls-1,.cls-2{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;}.cls-1{stroke:#0b2131;}.cls-2{stroke:#1a3042;stroke-dasharray:0.3 4;}.cls-3{fill:#c9a751;}.cls-4{fill:#0b2131;}</style></defs><title>grafica_nosotros (1)</title><g id="Linea_1" data-name="Linea 1"><path class="cls-1" d="M5.77,178.76c135-45.34,242.86-49.38,321.23-42.63,116.73,10.06,164.66,43.77,248.86,10.67,82.86-32.57,119.3-97.78,247.44-134C865,1,869,5.64,896.41-4.24A223,223,0,0,0,930.87-20.1" transform="translate(-4.27 21.6)"/></g><g id="Linea_2" data-name="Linea 2"><path class="cls-2" d="M8.89,192.92c94.47-19.34,173.32-22.46,233.19-20.61,169.43,5.23,221.84,51.32,334.36,10.84,95.79-34.47,104.42-84.64,224.45-114.24,53.59-13.22,88.43-12.23,130.54-30.68" transform="translate(-4.27 21.6)"/></g><g id="Puntos"><path class="cls-3" d="M173.68,142.42l-.49,0a3.75,3.75,0,0,1,.47-7.47l.49,0a3.75,3.75,0,0,1-.47,7.47Z" transform="translate(-4.27 21.6)"/><path class="cls-4" d="M173.67,136.17h0l.33,0a2.5,2.5,0,0,1,1.66.95,2.46,2.46,0,0,1,.5,1.85,2.5,2.5,0,0,1-2.47,2.18l-.33,0a2.5,2.5,0,0,1,.31-5m0-2.5a5,5,0,0,0-.63,10,4.73,4.73,0,0,0,.65,0,5,5,0,0,0,.63-10c-.22,0-.44,0-.65,0Z" transform="translate(-4.27 21.6)"/><path class="cls-3" d="M354.32,142.51l-.49,0a3.75,3.75,0,0,1,.47-7.47l.49,0a3.75,3.75,0,0,1-.47,7.47Z" transform="translate(-4.27 21.6)"/><path class="cls-4" d="M354.31,136.26h0l.33,0a2.5,2.5,0,0,1,1.66.95,2.46,2.46,0,0,1,.5,1.85,2.5,2.5,0,0,1-2.47,2.18l-.33,0a2.5,2.5,0,0,1,.31-5m0-2.5a5,5,0,0,0-.63,10,4.73,4.73,0,0,0,.65,0,5,5,0,0,0,.63-10c-.22,0-.44,0-.65,0Z" transform="translate(-4.27 21.6)"/><path class="cls-3" d="M857.52,8.22l-.49,0A3.75,3.75,0,0,1,857.5.72l.49,0a3.75,3.75,0,0,1-.47,7.47Z" transform="translate(-4.27 21.6)"/><path class="cls-4" d="M857.51,2h0l.33,0a2.5,2.5,0,0,1-.31,5l-.33,0a2.5,2.5,0,0,1,.31-5m0-2.5a5,5,0,0,0-.63,10,4.73,4.73,0,0,0,.65,0,5,5,0,0,0,.63-10c-.22,0-.44,0-.65,0Z" transform="translate(-4.27 21.6)"/><path class="cls-3" d="M535.35,161.39l-.49,0a3.75,3.75,0,0,1,.47-7.47l.49,0a3.75,3.75,0,0,1-.47,7.47Z" transform="translate(-4.27 21.6)"/><path class="cls-4" d="M535.34,155.14h0l.33,0a2.5,2.5,0,0,1,1.66,1,2.46,2.46,0,0,1,.5,1.85,2.5,2.5,0,0,1-2.47,2.18l-.33,0a2.5,2.5,0,0,1-1.66-1,2.46,2.46,0,0,1-.5-1.85,2.5,2.5,0,0,1,2.47-2.18m0-2.5a5,5,0,0,0-.63,10,4.73,4.73,0,0,0,.65,0,5,5,0,0,0,.63-10,4.82,4.82,0,0,0-.65,0Z" transform="translate(-4.27 21.6)"/><path class="cls-3" d="M751.6,43.4l-.49,0a3.75,3.75,0,0,1,.47-7.47l.49,0a3.75,3.75,0,0,1-.47,7.47Z" transform="translate(-4.27 21.6)"/><path class="cls-4" d="M751.59,37.15h0l.33,0a2.5,2.5,0,0,1-.31,5l-.33,0a2.5,2.5,0,0,1,.31-5m0-2.5a5,5,0,0,0-.63,10,4.73,4.73,0,0,0,.65,0,5,5,0,0,0,.63-10c-.22,0-.44,0-.65,0Z" transform="translate(-4.27 21.6)"/></g></svg>
            </div>
            <div>
                <p class="nosotros__grafica2__title pb-0 mb-0">Queremos ser tus socios</p>
                <p class="nosotros__grafica2__subtitle mt-n3">
                    Empecemos a trabajar juntos.
                </p>
            </div>
        </div>

    </div>

@endsection
