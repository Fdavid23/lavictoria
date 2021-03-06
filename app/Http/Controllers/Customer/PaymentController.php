<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        if (session()->has('payment_method') == false) {
            session()->put('payment_method', 'ssl_commerz_payment');
        }
        session()->put('mobile_app_payment_customer_id', $request['customer_id']);
        session()->put('mobile_app_payment_order_id', $request->order_id);

        $customer = User::find($request['customer_id']);
        $order= Order::where(['id'=>$request->order_id,'customer_id'=>$request['customer_id']])->first();

        if (isset($customer) && isset($order)){
            $data = [
                'name' => $customer['f_name'],
                'email' => $customer['email'],
                'phone' => $customer['phone'],
            ];
            session()->put('data', $data);

            return view('web-views.mobile-app-view.payment-view');
        }

        return response()->json(['errors' => ['code'=>'order-payment','message'=>'Datos no encontrados']], 403);

    }

    public function success()
    {
        return response()->json(['message' => 'Pago exitoso'], 200);
    }

    public function fail()
    {
        return response()->json(['message' => 'Pago fallido'], 403);
    }
}
