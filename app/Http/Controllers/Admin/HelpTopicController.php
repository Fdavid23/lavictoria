<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\HelpTopic;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HelpTopicController extends Controller
{
    public function add_new()
    {

        return view('admin-views.help-topics.add-new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ], [
            'question.required' => '¡El nombre de la pregunta es obligatorio!',
            'answer.required'   => '¡La respuesta a la pregunta es obligatoria!',

        ]);
        $helps = new HelpTopic;
        $helps->question = $request->question;
        $helps->answer = $request->answer;
        $helps->save();

        Toastr::success('¡Preguntas frecuentes añadidas con éxito!');
        return back();
    }
    public function status($id)
    {

        $helps = HelpTopic::findOrFail($id);
        if ($helps->status == 1) {
            $helps->update(["status" => 0]);

        } else {
            $helps->update(["status" => 1]);

        }
        return response()->json(['success' => 'Status Change']);

    }
    public function edit($id)
    {
        $helps = HelpTopic::findOrFail($id);
        return response()->json($helps);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ], [
            'question.required' => '¡El nombre de la pregunta es obligatorio!',
            'answer.required'   => '¡La respuesta a la pregunta es obligatoria!',

        ]);
        $helps = HelpTopic::find($id);
        $helps->question = $request->question;
        $helps->answer = $request->answer;
        $helps->ranking = $request->ranking;
        $helps->update();
        Toastr::success('Preguntas frecuentes ¡Actualización exitosa!');
        return back();
    }

    function list() {
        $helps = HelpTopic::latest()->get();
        return view('admin-views.help-topics.list', compact('helps'));
    }

    public function destroy(Request $request)
    {

        $helps = HelpTopic::find($request->id);
        $helps->delete();
        return response()->json();
    }

}
