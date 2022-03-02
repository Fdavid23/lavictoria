@extends('layouts.front-end.app')

@section('title',' Inicio' )

@push('css_or_js')
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">
    <script src="{{asset('public/assets/front-end')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/home.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
    <style>
        .cz-countdown-days {
            color: white !important;
            background-color: {{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .cz-countdown-hours {
            color: white !important;
            background-color: {{$web_config['secondary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .discount-top-f {
            text-align: end;
            /* margin-top: 5px; */
            margin-bottom: 5px;
        }

        .cz-countdown-minutes {
            color: white !important;
            background-color: {{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 3px !important;
        }

        .cz-countdown-seconds {
            color: {{$web_config['primary_color']}};
            border: 1px solid{{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px !important;
        }

        .flash_deal_product_details .flash-product-price {
            font-weight: 700;
            font-size: 18px;
            color: {{$web_config['primary_color']}};
        }

        .for-discoutn-value {
            background: {{$web_config['primary_color']}};

        }

        .featured_deal_left {
            height: 130px;
            background: {{$web_config['primary_color']}} 0% 0% no-repeat padding-box;
            padding: 10px 100px;
            text-align: center;
        }

        .featured_deal {
            min-height: 130px;

        }

        .category_div:hover {
            color: {{$web_config['secondary_color']}};
        }

        .deal_of_the_day {
            /* filter: grayscale(0.5); */
            opacity: .8;
            background: {{$web_config['secondary_color']}};
            border-radius: 3px;
        }

        .deal-title {
            font-size: 12px;

        }

        .for-flash-deal-img img {
            max-width: none;
        }

        @media (max-width: 375px) {
            .cz-countdown {
                display: flex !important;

            }

            .cz-countdown .cz-countdown-seconds {

                margin-top: -5px !important;
            }

            .for-feature-title {
                font-size: 20px !important;
            }
        }

        @media (max-width: 600px) {
            .flash_deal_title {
                font-weight: 600;
                font-size: 18px;
                text-transform: uppercase;
            }

            .cz-countdown .cz-countdown-value {
                font-family: "Roboto", sans-serif;
                font-size: 11px !important;
                font-weight: 700 !important;
            }

            .featured_deal {
                opacity: 1 !important;
            }

            .cz-countdown {
                display: inline-block;
                flex-wrap: wrap;
                font-weight: normal;
                margin-top: 4px;
                font-size: smaller;
            }

            .view-btn-div-f {

                margin-top: 6px;
                float: right;
            }

            .view-btn-div {
                float: right;
            }

            .viw-btn-a {
                font-size: 10px;
                font-weight: 600;
            }


            .for-mobile {
                display: none;
            }

            .featured_for_mobile {
                max-width: 95%;
                margin-top: 20px;
            }
        }

        @media (max-width: 360px) {
            .featured_for_mobile {
                max-width: 96%;
                margin-top: 11px;
            }

            .featured_deal {
                opacity: 1 !important;
            }
        }

        @media (max-width: 375px) {
            .featured_for_mobile {
                max-width: 96%;
                margin-top: 11px;
            }

            .featured_deal {
                opacity: 1 !important;
            }

            .for-iphone-mobile {
                margin-left: 2%;
            }
        }

        @media (min-width: 768px) {
            .displayTab {
                display: block !important;
            }
        }

        @media (max-width: 800px) {
            .for-tab-view-img {
                width: 40%;
            }

            .for-tab-view-img {
                width: 105px;
            }

            .widget-title {
                font-size: 19px !important;
            }
        }

        .featured_deal_carosel .carousel-inner {
            width: 100% !important;
        }
    </style>

@endpush
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width:90%; margin-left:5%">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"  style="height: 500px; width: 100%; " >
        <img src="{{ asset('public/assets/front-end/img/panel3.jpg') }}" class="d-block w-100" alt="..." style="margin-top:1%; position: relative;">
      </div>
      <div class="carousel-item" style="height: 500px; width: 100%; ">
        <img src="{{ asset('public/assets/front-end/img/panel1.png') }}" class="d-block w-100" alt="..."  style="margin-top:1%">
      </div>
      <div class="carousel-item" style="height: 500px; width: 100%; ">
        <img src="{{ asset('public/assets/front-end/img/panel2.jpg') }}" class="d-block w-100" alt="..." style="margin-top:1%">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container" style="margin-top:3%; ">
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{ asset('public/assets/front-end/img/Productos/mora.png') }}" class="card-img-top" alt="A Street in Europe" style="height:200px; width:50%; margin-left: 25%">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">Yogurt</h5>
                    <p class="card-text"  style="text-align: justify">El yogur, —también conocido como yogurt, yoghourt, yogourt, yoghurt, yogurth o yagurt ​ - es un producto lácteo obtenido mediante la fermentación de la leche​ por medio de bacterias de los géneros Lactobacillus y Streptococcus.</p>
                    <a href="#" class="btn btn-primary">Ir Principal</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{ asset('public/assets/front-end/img/qr.jpeg') }}" class="card-img-top" alt="London" style="height:200px; width:50%; margin-left: 25%">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">QR</h5>
                    <p class="card-text" style="text-align: justify">Con nuestro lector QR online puedes decodificar códigos QR de forma directa desde el navegador. El proceso de decodificación se realiza en tu propia ventana del navegador por lo que los códigos QR no se cargan en el servidor.                         </p>
                    <a href="#" class="btn btn-primary">Ir principal</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{ asset('public/assets/front-end/img/delivery.jpg') }}" class="card-img-top" alt="New York" style="height:200px; width:50%; margin-left: 25%">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">Delivery</h5>
                    <p class="card-text" style="text-align: justify">El término delivery no forma parte del diccionario, pero su uso es muy frecuente en nuestro idioma. Se llama delivery al servicio de reparto que ofrece un comercio para entregar sus productos en el domicilio del comprador.</p>
                    <a href="#" class="btn btn-primary">Ir Principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
  <CENTER> <h1>COMO LLEGAR LÁCTEOS LA VICTORIA GUAYTACAMA</h1></CENTER>
<div class="contact-form">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.420363196008!2d-78.64376498572749!3d-0.8092502355188957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4599ad3e87b29%3A0x8a68e9cb17330b16!2sLacteos%20%22La%20Victoria%22!5e0!3m2!1ses-419!2sec!4v1645675525789!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>


@endsection

@push('script')

@endpush
