<?php

namespace App\Http\Controllers\api\v1\auth;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgotPassword extends Controller
{
    public function reset_password_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $customer = User::Where(['email' => $request['email']])->first();

        if (isset($customer)) {
            $token = Str::random(120);
            DB::table('password_resets')->insert([
                'email' => $customer['email'],
                'token' => $token,
                'created_at' => now(),
            ]);
            $reset_url = url('/') . '/customer/auth/reset-password?token=' . $token;
            Mail::to($customer['email'])->send(new \App\Mail\PasswordResetMail($reset_url));
            return response()->json(['message' => 'Correo electrónico enviado con éxito.'], 200);
        }
        return response()->json(['errors' => [
            ['code' => 'not-found', 'message' => '¡El correo electrónico no encontrado!']
        ]], 404);
    }

    public function reset_password_submit(Request $request)
    {
        $data = DB::table('password_resets')->where(['token' => $request['reset_token']])->first();
        if (isset($data)) {
            if ($request['password'] == $request['confirm_password']) {
                DB::table('users')->where(['email' => $data->email])->update([
                    'password' => bcrypt($request['confirm_password'])
                ]);
                Toastr::success('Restablecimiento de contraseña con éxito.');
                DB::table('password_resets')->where(['token' => $request['reset_token']])->delete();
                return response()->json(['message' => 'Contraseña cambiada con éxito.'], 200);
            }
            return response()->json(['errors' => [
                ['code' => 'mismatch', 'message' => '¡La contraseña no coincide!']
            ]], 401);
        }
        return response()->json(['errors' => [
            ['code' => 'invalid', 'message' => 'Simbolo no valido.']
        ]], 400);
    }
}
