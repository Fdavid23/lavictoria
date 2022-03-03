@extends('layouts.front-end.app')

@section('title','Acerca de')

@push('css_or_js')
    <style>
        .headerTitle {
            font-size: 25px;
            font-weight: 700;
            margin-top: 2rem;
        }

        .for-container {
            width: 91%;
            border: 1px solid #D8D8D8;
            margin-top: 3%;
            margin-bottom: 3%;
        }

        .for-padding {
            padding: 3%;
        }


    </style>

    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="About {{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="about {{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">
@endpush

@section('content')

<div class="contact-form">
    <div class="map-responsive">

    <div class="container for-container">
        <div class="container text-center shadow mt-5 pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h5 class="mt-5 mb-3">
                        <strong>
                        SOBRE NUESTRA EMPRESA
                        </strong>
                    </h5>

                    <p class="mt-5">
                    Lácteos “La Victoria” inicio sus actividades comerciales el 22/09/2004 como personas
                    naturales. Actualmente seguimos con la elaboración y producción de lácteos.
                    </p>

                    </br>

                    <h5 class="mt-3">
                    <strong>
                    MISIÓN
                    </strong>
                    </h5>
                    <p>
                    Lácteos “La Victoria” elabora productos de calidad, y a bajo coste, genera actividad económica
                    vinculada con la sociedad mediante la producción y elaboración de lácteos, para impulsar al
                    micronegocio local y nacional.
                    </p>

                    </br>
                    <h5 class="mt-3">
                    <strong>
                    VISIÓN
                    </strong>
                    </h5>
                    <p>
                    Ser una empresa de producción con altos estándares de calidad en la elaboración de
                    productos lácteos y derivados, con el fin de generar ingresos en el sector local y potenciar la
                    producción en la sociedad.
                    </p>
                </div>
            </div>
        </div>
            </br>
            </br>
            </br>
    </div>
@endsection
