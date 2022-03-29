@extends('layouts.back-end.app')
@section('title','Ver Depósito')
@section('content')
<div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('messages.Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">Depósito</li>
        </ol>
    </nav>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class="mb-0 text-black-50">{{trans('messages.general_business_settings')}}</h4>
    </div>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between pl-4 pr-4">
                        <div>
                            <h5><b>Ver Depósito por foto </b></h5>
                        </div>
                    </div>
                </div>
<div class="col-md-12" >
                <img src="{{asset('public/assets/front-end/img/factura.jpeg')}}"  width="200" height="350"  alt="">
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
