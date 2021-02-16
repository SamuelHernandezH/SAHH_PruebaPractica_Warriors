<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class crud_grupo_controller extends Controller
{
    //

    public function grupo_index()
    {
        $grupos = DB::table('grupo')->latest()->paginate(5);

        return view('grupos_lista',compact('grupos'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function grupo_CrearView()
    {
        return view('grupos_insertar');
    }

    public function grupo_guardar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'semestre' => 'required',
            'grupo' => 'required',
            'turno' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/lista_grupos/InsertaGrupo')
                        ->withErrors($validator)
                        ->withInput();
        }

        Grupo::create($request->all());

        return redirect()->route('ListaGrupos');

    }

    public function grupo_EditarView($id){
        $grupo = DB::table('grupo')->where('cve_grupo', $id)->first();

        return view('grupos_editar', compact('grupo'));
    }

    function grupo_Actualizar($id,Request $request){
        $grupo = Grupo::find($id);

        $grupo->nombre = $request->input('nombre');
        $grupo->semestre = $request->input('semestre');
        $grupo->grupo = $request->input('grupo');
        $grupo->turno = $request->input('turno');

        $grupo->save();
        return redirect('/lista_grupos');
    }

    public function grupo_Eliminar($id){
        $grupo = Grupo::find($id);
         $grupo->delete();
         return redirect('/lista_grupos');
    }
}
