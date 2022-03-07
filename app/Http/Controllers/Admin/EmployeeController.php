<?php

namespace App\Http\Controllers\Admin;

use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\AdminRole;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function add_new()
    {
        ImageManager::cleanSession();
        $rls = AdminRole::whereNotIn('id', [1])->get();
        return view('admin-views.employee.add-new', compact('rls'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'role_id' => 'required',
            'email'   => 'required|email|unique:users',

        ], [
            'name.required'      => '¡El nombre del rol es obligatorio!',
            'role_name.required' => 'El ID de rol es obligatorio',
            'email.required'     => 'Se requiere identificación de correo electrónico',

        ]);

        if ($request->role_id == 1) {
            Toastr::warning('Access Denied!');
            return back();
        }

        $x = ImageManager::upload('admin/', 'png', 'employee_image_modal');

        DB::table('admins')->insert([
            'name'          => $request->name,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'admin_role_id' => $request->role_id,
            'password'      => bcrypt($request->password),
            'image'         => $x[0],
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        Toastr::success('Empleado añadido con éxito!');
        return back();
    }

    function list() {
        $em = Admin::with(['role'])->whereNotIn('id', [1])->paginate(10);
        return view('admin-views.employee.list', compact('em'));
    }

    public function edit($id)
    {
        $e = Admin::where(['id' => $id])->first();
        $rls = AdminRole::whereNotIn('id', [1])->get();
        return view('admin-views.employee.edit', compact('rls', 'e'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required',
            'role_id' => 'required',
        ], [
            'name.required' => '¡El nombre del rol es obligatorio!',
        ]);

        if ($request->role_id == 1) {
            Toastr::warning('¡Acceso denegado!');
            return back();
        }

        $e = Admin::find($id);

        if ($request['password'] == null) {
            $pass = $e['password'];
        } else {
            $pass = bcrypt($request['password']);
        }

        $x = ImageManager::update('admin/', $e['image'], 'png', 'employee_image_modal');

        DB::table('admins')->where(['id' => $id])->update([
            'name'          => $request->name,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'admin_role_id' => $request->role_id,
            'password'      => $pass,
            'image'         => $x[0],
            'updated_at'    => now(),
        ]);

        Toastr::success('Empleado actualizado con éxito!');
        return back();
    }
}
