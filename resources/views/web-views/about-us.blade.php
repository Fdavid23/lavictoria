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
<CENTER> <h1>COMO LLEGAR LÁCTEOS LA VICTORIA</h1></CENTER>
<div class="contact-form">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.420363196008!2d-78.64376498572749!3d-0.8092502355188957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4599ad3e87b29%3A0x8a68e9cb17330b16!2sLacteos%20%22La%20Victoria%22!5e0!3m2!1ses-419!2sec!4v1645675525789!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>

    <div class="container for-container">
        <h2 class="text-center mt-3 headerTitle">Sobre nuestra Empresa</h2>
        <div class="for-padding">
            {!! $about_us['value'] !!}
        </div>
    </div>
@endsection
