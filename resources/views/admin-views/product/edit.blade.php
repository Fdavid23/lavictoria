@extends('layouts.back-end.app')
@section('title','Producto Editar')
@push('css_or_js')
    {{--    <link href="{{asset('public/assets/back-end')}}/css/select2.min.css" rel="stylesheet"/>--}}
    <link href="{{asset('public/assets/back-end/css/croppie.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/back-end/css/tags-input.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/back-end/css/custom.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 48px;
            height: 23px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #377dff;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #377dff;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        #product-images-modal .modal-content{
            width: 1116px !important;
            margin-left: -264px !important;
        }
        #thumbnail-image-modal .modal-content{
            width: 1116px !important;
            margin-left: -264px !important;
        }
        @media(max-width:768px){
            #product-images-modal .modal-content{
                width: 698px !important;
                margin-left: -75px !important;
            }

            #thumbnail-image-modal .modal-content{
                width: 698px !important;
                margin-left: -75px !important;
            }
        }
        @media(max-width:375px){
            #product-images-modal .modal-content{
                width: 367px !important;
                margin-left: 0 !important;
            }
            #thumbnail-image-modal .modal-content{
                width: 367px !important;
                margin-left: 0 !important;
            }
        }

        @media(max-width:500px){
            #product-images-modal .modal-content{
                width: 400px !important;
                margin-left: 0 !important;
            }
            #thumbnail-image-modal .modal-content{
                width: 400px !important;
                margin-left: 0 !important;
            }
            .btn-for-m{
                margin-bottom: 10px;
            }
            .parcent-margin{
                margin-left: 0px !important;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('messages.Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{trans('messages.Product')}}</li>
            <li class="breadcrumb-item" aria-current="page">{{trans('messages.Edit')}}</li>
        </ol>
    </nav>

    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-black-50">{{trans('messages.Product')}} {{trans('messages.Edit')}} </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <form class="product-form" action="javascript:" method="post" enctype="multipart/form-data"
                  id="choice_form">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>{{trans('messages.General Info')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{trans('messages.Product Name')}}</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ex : LUX"
                                   value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">{{trans('messages.Category')}}</label>
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        name="category_id"
                                        id="category_id"
                                        onchange="getRequest('{{url('/')}}/admin/product/get-categories?parent_id='+this.value,'sub-category-select','select')">
                                        <option value="0" selected disabled>---Seleccionar---</option>
                                        @foreach($categorys as $category)
                                            <option
                                                value="{{$category['id']}}" {{ $category->id==$product_category[0]->id ? 'selected' : ''}} >{{$category['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="name">{{trans('messages.Sub Category')}}</label>
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        name="sub_category_id" id="sub-category-select"
                                        data-id="{{count($product_category)>=2?$product_category[1]->id:''}}"
                                        onchange="getRequest('{{url('/')}}/admin/product/get-categories?parent_id='+this.value,'sub-sub-category-select','select')">
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="name">{{trans('messages.Sub Sub Category')}}</label>

                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        data-id="{{count($product_category)>=3?$product_category[2]->id:''}}"
                                        name="sub_sub_category_id" id="sub-sub-category-select">

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">{{trans('messages.Brand')}}</label>
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        name="brand_id">
                                        <option value="{{null}}" selected disabled>---Seleccionar---</option>
                                        @foreach($br as $b)
                                            <option
                                                value="{{$b['id']}}" {{ $b->id==$product->brand->id ? 'selected' : ''}} >{{$b['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="name">{{trans('messages.Unit')}}</label>
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        name="unit">
                                        @foreach(\App\CPU\Helpers::units() as $x)
                                            <option
                                                value={{$x}} {{ $product->unit==$x ? 'selected' : ''}}>{{$x}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h4>{{trans('messages.Variation')}}</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="colors">
                                        {{trans('messages.Colors')}} :
                                    </label>
                                    <label class="switch">
                                        <input type="checkbox" class="status"
                                               name="colors_active" {{count($product['colors'])>0?'checked':''}}>
                                        <span class="slider round"></span>
                                    </label>

                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control color-var-select"
                                        name="colors[]" multiple="multiple"
                                        id="colors-selector" {{count($product['colors'])>0?'':'disabled'}}>
                                        @foreach (\App\Model\Color::orderBy('name', 'asc')->get() as $key => $color)
                                            <option
                                                value={{ $color->code }} {{in_array($color->code,$product['colors'])?'selected':''}}>
                                                {{$color['name']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="attributes" style="padding-bottom: 3px">
                                        {{trans('messages.Attributes')}} :
                                    </label>
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive form-control"
                                        name="choice_attributes[]" id="choice_attributes" multiple="multiple">
                                        @foreach (\App\Model\Attribute::orderBy('name', 'asc')->get() as $key => $a)
                                            @if($product['attributes']!='null')
                                                <option
                                                    value="{{ $a['id']}}" {{in_array($a->id,json_decode($product['attributes'],true))?'selected':''}}>
                                                    {{$a['name']}}
                                                </option>
                                            @else
                                                <option value="{{ $a['id']}}">{{$a['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mt-2 mb-2">
                                    <div class="customer_choice_options" id="customer_choice_options">
                                        @include('admin-views.product.partials._choices',['choice_no'=>json_decode($product['attributes']),'choice_options'=>json_decode($product['choice_options'],true)])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h4>{{trans('messages.Product price & stock')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">{{trans('messages.Unit price')}}</label>
                                    <input type="number" min="0" step="0.01"
                                           placeholder="{{trans('messages.Unit price') }}"
                                           name="unit_price" class="form-control"
                                           value={{\App\CPU\BackEndHelper::usd_to_currency($product->unit_price)}} required>
                                </div>
                                <div class="col-md-6">
                                    <label
                                        class="control-label">{{trans('messages.Purchase price')}}</label>
                                    <input type="number" min="0" step="0.01"
                                           placeholder="{{trans('messages.Purchase price') }}"
                                           name="purchase_price" class="form-control"
                                           value={{ \App\CPU\BackEndHelper::usd_to_currency($product->unit_price) }} required>
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label">IVA</label>
                                    <label class="badge badge-info">{{trans('messages.Percent')}} ( % )</label>
                                    <input type="number" min="0" value={{ $product->tax }} step="0.01"
                                           placeholder="IVA" name="tax"
                                           class="form-control" required>
                                    <input name="tax_type" value="percent" style="display: none">
                                </div>

                                <div class="col-md-5">
                                    <label class="control-label">{{trans('messages.Discount')}}</label>
                                    <input type="number" min="0"
                                           value={{ $product->discount_type=='amount'?\App\CPU\BackEndHelper::usd_to_currency($product->discount): $product->discount}} step="0.01"
                                           placeholder="{{trans('messages.Discount') }}" name="discount"
                                           class="form-control" required>
                                </div>
                                <div class="col-md-1" style="padding-top: 30px;margin-left: -20px;">
                                    <select
                                        class="js-example-basic-multiple js-states js-example-responsive demo-select2"
                                        name="discount_type">
                                        <option value="percent">{{trans('messages.Percent')}}</option>
                                        <option value="amount">{{trans('messages.Flat')}}</option>

                                    </select>
                                </div>

                                <div class="col-md-6" id="quantity">
                                    <label class="control-label">{{trans('messages.Quantity')}}</label>
                                    <input type="number" min="0" value={{ $product->current_stock }} step="1"
                                           placeholder="{{trans('messages.Quantity') }}"
                                           name="current_stock" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="sku_combination" id="sku_combination">
                            @include('admin-views.product.partials._edit_sku_combinations',['combinations'=>json_decode($product['variation'],true)])
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Detalles de producto</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-xl-12">
                                <textarea name="details" id="editor" cols="30"
                                          rows="10">{{$product['details']}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">

                                    <button type="button" class="btn btn-secondary text-light" data-toggle="modal"
                                            style="width: 100%"
                                            data-target="#product-images-modal" data-whatever="@mdo"
                                            id="image-count-product-images-modal">
                                            <i class="tio-add-circle"></i> {{trans('messages.Upload product images')}}
                                    </button>
                                </div>

                                <div class="col-md-6">

                                    <button type="button" class="btn btn-secondary text-light" data-toggle="modal"
                                            style="width: 100%"
                                            data-target="#thumbnail-image-modal" data-whatever="@mdo"
                                            id="image-count-thumbnail-image-modal">
                                            <i class="tio-add-circle"></i> {{trans('messages.Upload thumbnail')}}
                                    </button>
                                </div>

                                <div class="col-md-12" style="padding-top: 20px">
                                    <button type="submit" class="btn btn-primary">{{trans('messages.Update')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                Miniatura
            </div>
            <div class="card">
                <div class="card-body">
                    <img width="300" style="margin-left: 30%"
                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                         alt="Product image" width="">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h4>Im??genes del producto</h4>
    <div class="row">
        @foreach (json_decode($product->images) as $key => $photo)
            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 100%" height="120"
                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                             src="{{asset("storage/app/public/product/$photo")}}" alt="Product image">
                        <a href="{{route('admin.product.remove-image',['id'=>$product['id'],'name'=>$photo])}}"
                           class="btn btn-danger btn-block">Eliminar</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!--modal-->
    @include('shared-partials.image-process._image-crop-modal',['modal_id'=>'product-images-modal'])

    @include('shared-partials.image-process._image-crop-modal',['modal_id'=>'thumbnail-image-modal'])

    {{--@include('shared-partials.image-process._image-crop-modal',['modal_id'=>'hot-deal-image-modal'])

    @include('shared-partials.image-process._image-crop-modal',['modal_id'=>'featured-image-modal'])--}}
    <!--modal-->
    </div>
@endsection

@push('script')
    <script src="{{asset('public/assets/back-end')}}/js/tags-input.min.js"></script>
    <script src="{{ asset('public/assets/select2/js/select2.min.js')}}"></script>
    <script>
        $(".js-example-theme-single").select2({
            theme: "classic"
        });

        $(".js-example-responsive").select2({
            width: 'resolve'
        });
    </script>

    <script>
        function getRequest(route, id, type) {
            $.get({
                url: route,
                dataType: 'json',
                success: function (data) {
                    if (type == 'select') {
                        $('#' + id).empty().append(data.select_tag);
                    }
                },
            });
        }

        $('input[name="colors_active"]').on('change', function () {
            if (!$('input[name="colors_active"]').is(':checked')) {
                $('#colors-selector').prop('disabled', true);
            } else {
                $('#colors-selector').prop('disabled', false);
            }
        });

        $('#choice_attributes').on('change', function () {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function () {
                //console.log($(this).val());
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
        });

        function add_more_customer_choice_option(i, name) {
            let n = name.split(' ').join('');
            $('#customer_choice_options').append('<div class="row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="' + i + '"><input type="text" class="form-control" name="choice[]" value="' + n + '" placeholder="{{trans('messages.Choice Title') }} ddgdsgs" readonly></div><div class="col-lg-9"><input type="text" class="form-control" name="choice_options_' + i + '[]" placeholder="{{trans('messages.Enter choice values') }}" data-role="tagsinput" onchange="update_sku()"></div></div>');
            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        }

        setTimeout(function () {
            $('.call-update-sku').on('change', function () {
                update_sku();
            });
        }, 2000)

        $('#colors-selector').on('change', function () {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function () {
            update_sku();
        });

        function update_sku() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: '{{route('admin.product.sku-combination')}}',
                data: $('#choice_form').serialize(),
                success: function (data) {
                    $('#sku_combination').html(data.view);
                    if (data.length > 1) {
                        $('#quantity').hide();
                    } else {
                        $('#quantity').show();
                    }
                }
            });
        }

        $(document).ready(function () {
            setTimeout(function () {
                let category = $("#category_id").val();
                let sub_category = $("#sub-category-select").attr("data-id");
                let sub_sub_category = $("#sub-sub-category-select").attr("data-id");
                getRequest('{{url('/')}}/admin/product/get-categories?parent_id=' + category + '&sub_category=' + sub_category, 'sub-category-select', 'select');
                getRequest('{{url('/')}}/admin/product/get-categories?parent_id=' + sub_category + '&sub_category=' + sub_sub_category, 'sub-sub-category-select', 'select');
            }, 100)
            // color select select2
            $('.color-var-select').select2({
                templateResult: colorCodeSelect,
                templateSelection: colorCodeSelect,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            function colorCodeSelect(state) {
                var colorCode = $(state.element).val();
                if (!colorCode) return state.text;
                return "<span class='color-preview' style='background-color:" + colorCode + ";'></span>" + state.text;
            }
        });
    </script>

    @include('shared-partials.image-process._script',[
    'id'=>'product-images-modal',
    'height'=>709,
    'width'=>600,
    'multi_image'=>true,
    'route'=>route('image-upload')
    ])

    @include('shared-partials.image-process._script',[
   'id'=>'thumbnail-image-modal',
    'height'=>560,
    'width'=>600,
   'multi_image'=>false,
   'route'=>route('image-upload')
   ])

    <script>
        $('.product-form').on('submit', function () {

            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: '{{route('admin.product.update',$product->id)}}',
                data: $('.product-form').serialize(),
                success: function (data) {
                    if (data.errors) {
                        for (var i = 0; i < data.errors.length; i++) {
                            toastr.error(data.errors[i].message, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    } else {
                        toastr.success('Producto actualizado con ??xito!', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        setTimeout(function () {
                            location.reload()
                        }, 2000);
                    }
                }
            });
        });
    </script>
@endpush
