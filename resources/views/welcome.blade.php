<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bearstrat</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>
    <section class="header">
        <div>
            @if (isset($_GET['lang']) && $_GET['lang'] == 'eng')
                <a href="/?lang=eng"><img class="img-fluid" src="/img/btn_eng-on.png" alt=""></a>

            @else
                <a href="/?lang=eng"><img class="img-fluid" src="/img/btn_eng-off.png" alt=""></a>
            @endif
        </div>
        <div class="ml-3">
            @if (!isset($_GET['lang']))
                <a href="/?lang=esp"><img class="img-fluid" src="/img/btn_esp-on.png" alt=""></a>
            @else
                @if (isset($_GET['lang']) && $_GET['lang'] == 'esp')
                <a href="/?lang=esp"><img class="img-fluid" src="/img/btn_esp-on.png" alt=""></a>
                @else
                <a href="/?lang=esp"><img class="img-fluid" src="/img/btn_esp-off.png" alt=""></a>
                @endif
            @endif

        </div>
    </section>
    <section class="content">
        <div class="content-left"></div>
        <div class="content-right">
            <div class="content-right__space">
                <div>
                    <img class="img-titulo" src="/img/Name_Logo_Beartrat.png" alt="">
                </div>
                @if (!isset($_GET['lang']))
                <div class="mt-3">
                    <span class="content-right__title">Estamos renovando nuestro sitio,
                        muy pronto lo podrás conocer</span>
                    <span class="content-right__description">
                        Si necesitas hablar con nosotros, puedes llamarnos al <br> 55 88 52 74 85 o escribirnos a contacto@bearstrat.com
                    </span>
                </div>
                @else
                @if (isset($_GET['lang']) && $_GET['lang'] == 'esp')
                <span class="content-right__title">Estamos renovando nuestro sitio,
                    muy pronto lo podrás conocer</span>
                <span class="content-right__description">
                    Si necesitas hablar con nosotros, puedes llamarnos al <br> 55 88 52 74 85 o escribirnos a contacto@bearstrat.com
                </span>
                @else
                <div class="mt-3">
                    <span class="content-right__title">
                        We’re currently renewing our website,
                        soon you’ll get to see it
                    </span>
                    <span class="content-right__description">
                        If you need to talk to us, you can call at <br> +52 (55) 88 52 74 85 or write to contacto@bearstrat.com
                    </span>
                </div>
                @endif
                @endif
            </div>
        </div>
    </section>

    <section class="container container-movil">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="/img/Logo_Beartrat.png" alt="">
                <div class="mt-4">
                    <img class="img-fluid" src="/img/Name_Logo_Beartrat.png" alt="">
                </div>
            </div>
            <div class="col-12 pb-5">
                @if (!isset($_GET['lang']))
                    <div class="mt-3">
                    <span class="content-right__title">Estamos renovando nuestro sitio,
                        muy pronto lo podrás conocer</span>
                        <span class="content-right__description">
                        Si necesitas hablar con nosotros, puedes llamarnos al  55 88 52 74 85 o escribirnos <br> a contacto@bearstrat.com
                    </span>
                    </div>
                @else
                    @if (isset($_GET['lang']) && $_GET['lang'] == 'esp')
                        <div class="mt-3">
                            <span class="content-right__title">Estamos renovando nuestro sitio,
                             muy pronto lo podrás conocer</span>
                            <span class="content-right__description">
                                Si necesitas hablar con nosotros, puedes llamarnos al 55 88 52 74 85 o escribirnos <br> a contacto@bearstrat.com
                            </span>
                        </div>
                    @else
                        <div class="mt-3">
                    <span class="content-right__title">
                        We’re currently renewing our website,
                        soon you’ll get to see it
                    </span>
                            <span class="content-right__description">
                        If you need to talk to us, you can call at <br> +52 (55) 88 52 74 85 or write to <br> contacto@bearstrat.com
                    </span>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>

</body>

</html>
