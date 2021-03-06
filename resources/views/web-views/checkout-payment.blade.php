@extends('layouts.front-end.app')

@section('title','Método de pago Elegir')

@push('css_or_js')

@endpush

@section('content')
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <div class="col-md-12 mb-5 pt-5">
                <div class="feature_header" style="background: #dcdcdc;line-height: 1px">
                    <span>{{ trans('messages.payment_method')}}</span>
                </div>
            </div>
            <section class="col-lg-8">
                <hr>
                <div class="checkout_details mt-3">
                @include('web-views.partials._checkout-steps',['step'=>3])
                <!-- Payment methods accordion-->
                    <h2 class="h6 pb-3 mb-2 mt-5">{{trans('messages.choose_payment')}}</h2>

                    <div class="row">
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('cash_on_delivery'))
                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('cash_on_delivery')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="cash_on_delivery" checked>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>{{trans('messages.cash_on_delivery')}}</span>
                                    </div>
                                    <span style="color: #2e0f9b; text-align: justify;">Envío contra reembolso, a veces llamado cobro a la entrega, es la venta de mercancías por correo, donde el pago se hace cuando se recibe el producto, en lugar de por adelantado.</span>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('ssl_commerz_payment'))

                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('ssl_commerz_payment')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="ssl_commerz_payment" {{session('payment_method')=='ssl_commerz_payment'?'checked':''}}>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>{{trans('messages.ssl_commerz_payment')}}</span>
                                    </div>
                                </div>
                            @endif
                        </div> --}}
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('paypal'))
                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('paypal')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="paypal" {{session('payment_method')=='paypal'?'checked':''}}>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>{{trans('messages.paypal_online_payent')}}</span>
                                    </div>
                                    <span style="color: #2e0f9b; text-align: justify;">PayPal es un método de pago en línea que te sigue vayas donde vayas. Paga como quieras. Asocia tus tarjetas de crédito a tu cuenta PayPal y, cuando quieras pagar, simplemente inicia sesión con tu correo electrónico y contraseña y elige la tarjeta que deseas usar para hacer el pago.</span>

                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('stripe'))
                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('stripe')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="stripe" {{session('payment_method')=='stripe'?'checked':''}}>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>{{trans('messages.stripe_online_payment')}}dfsfsf</span>
                                    </div>
                                    <form action="" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <input type="text" name="nombre" placeholder="ingrese nombre:">
                                        <input type="file" name="imagen">
                                        <button type="submit">GUARDAR</button>

                                     </form>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('razor_pay'))
                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('razor_pay')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="razor_pay" {{session('payment_method')=='razor_pay'?'checked':''}}>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>{{trans('messages.razor_pay')}}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            @php($config=\App\CPU\Helpers::get_business_settings('paytm'))
                            @if($config['status'])
                                <div class="card" onclick="setPaymentMethod('paytm')">
                                    <div class="card-body">
                                        <input type="radio" name="payment_gateway" id="paytm" {{session('paytm')=='ssl_commerz_payment'?'checked':''}}>
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span>Pago transferencia o deposito</span>
                                        <br>

                                    </div>
                                    <span style="color: #2e0f9b; text-align: justify; ">  Realiza tu pago directamente nuestra cuenta bancaria, por favor usa el número de pedido como referencia de tu pago. Tu pedido no se procesará hasta que se haya recibido el importe a nuestra cuenta.
                                    </span>
                                    <br>
                                    <span>Imagen de transferencia</span>
                                    <br>
                                    <form action="codeaguardar" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <input type="file" name="imagen">


                                        <button type="submit" class="btn btn-primary btn-block" style="background-color: #1c0447; color: white; margin-top:5%"  >Enviar</button>
                                     </form>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- Navigation (desktop)-->
                    <div class="row">
                        <div class="col-6">
                            <a class="btn  btn-block"  style="background-color: #EAE4DC; color: rgb(3, 3, 3); margin-left:0%" href="{{route('checkout-shipping')}}">
                                <i class="czi-arrow-left mt-sm-0 mr-1"></i>
                                <span class="d-none d-sm-inline">Volver a Envíos</span>
                                <span class="d-inline d-sm-none">Atrás</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn  btn-block" style="background-color: #AF1C1C; color: white; margin-left:0%"
                               href="{{route('checkout-review')}}">
                                <span class="d-none d-sm-inline">Revise su orden</span>
                                <span class="d-inline d-sm-none">Revisar orden</span>
                                <i class="czi-arrow-right mt-sm-0 ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            @include('web-views.partials._order-summary')
        </div>
    </div>
@endsection

@push('script')
    <script>
        function setPaymentMethod(name) {
            $.get({
                url: '{{ url('/') }}/customer/set-payment-method/' + name,
                success: function () {
                    $('#' + name).prop('checked', true);
                    toastr.success(name.replace(/_/g, " ") + ' ha sido seleccionado con éxito');
                }
            });
        }
    </script>
@endpush
