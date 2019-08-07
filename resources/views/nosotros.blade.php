@extends('layouts.default')

@section('content')
    <div class="nosotros">
        <div class="nosotros__hero">
            <div class="nosotros__hero__left"  data-aos="zoom-in" data-aos-duration="1500">

            </div>
            <div class="nosotros__hero__right" data-aos="fade-up" data-aos-duration="1500">
                <div class="nosotros__hero__right__title">
                    <p> NOSOTROS </p>
                </div>
                <div class="nosotros__hero__right__description">
                    <p>
                        En Bearstrat estamos listos para poner a tu disposición nuestra amplia experiencia en inversiones, con la misión de convertirnos en tus socios estratégicos y generar el mayor rendimiento para tu patrimonio.
                    </p>
                </div>
            </div>
        </div>
        <div class="nosotros__seccion2">
            <div class="nosotros__seccion2__hero"  data-tilt-axis="x" data-tilt>
                <div class="nosotros__seccion2__content-description"  >
                    <div class="nosotros__seccion2__description" data-aos="fade-up" data-aos-duration="1500">
                        <span class="nosotros__seccion2__marker">Compartir el éxito</span> con nuestros socios es lo que nos ha llevado a ser la mejor opción de <span class="nosotros__seccion2__marker">inversión</span> en el mercado.
                    </div>
                </div>
            </div>
        </div>
        <div class="nosotros_seccion3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">México</p>
                        <img class="img-fluid" onmouseover="this.src='/img/nosotros/Mexico_azul.png';" onmouseout="this.src='/img/nosotros/Mexico_color.png'" src="/img/nosotros/Mexico_color.png" alt="">
                        <p class="nosotros__seccion3__subtitle mb-0 mt-3">
                            AV. Insurgentes Sur 953, Nápoles,
                        </p>
                        <p class="nosotros__seccion3__subtitle2">
                            Ciudad de México, CDMX
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Querétaro </p>
                        <img class="img-fluid" onmouseover="this.src='/img/nosotros/Queretaro_azul.png';" onmouseout="this.src='/img/nosotros/Queretaro.png'" src="/img/nosotros/Queretaro.png" alt="">
                         <p class="nosotros__seccion3__subtitle mb-0 mt-3">
                            AV. Madero, Centro
                        </p>
                        <p class="nosotros__seccion3__subtitle2">
                           Santiago de Querétaro, Qro
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Mérida </p>
                        <img class="img-fluid" onmouseover="this.src='/img/nosotros/Merida_azul.png';" onmouseout="this.src='/img/nosotros/Merida_color.png'" src="/img/nosotros/Merida_color.png" alt="">
                         <p class="nosotros__seccion3__subtitle mb-0 mt-3">
                            Paseo de Montejo, Centro
                        </p>
                        <p class="nosotros__seccion3__subtitle2">
                            Mérida, Yuc
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="nosotros__seccion3__title">Montreal</p>
                        <img class="img-fluid" onmouseover="this.src='/img/nosotros/montreal_azul.png';" onmouseout="this.src='/img/nosotros/montreal_color.png'" src="/img/nosotros/montreal_color.png" alt="">
                         <p class="nosotros__seccion3__subtitle mb-0 mt-3">
                            1409 Rue Saint-Marc,
                        </p>
                        <p class="nosotros__seccion3__subtitle2">
                            Monteréal, Canadá
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
