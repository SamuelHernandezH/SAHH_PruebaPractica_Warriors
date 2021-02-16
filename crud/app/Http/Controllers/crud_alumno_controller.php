<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class crud_alumno_controller extends Controller
{
    //

    public function alumno_index()
    {
        $alumnos = DB::table('alumno')->latest()->paginate(5);
        return view('alumnos_lista',compact('alumnos'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function alumno_CrearView()
    {
        $Grupos = DB::table('grupo')->get();

        return view('alumnos_insertar',compact('Grupos'));
    }

    public function alumno_guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'cve_grupo' => 'required',
        ]);

        Alumno::create($request->all());

        return redirect()->route('ListaAlumnos')
        ->with('success','Product created successfully.');

    }

    public function alumno_EditarView($id){
        $Alumno = DB::table('alumno')->where('cve_alumno', $id)->first();
        $Grupos = DB::table('grupo')->get();
        return view('alumnos_editar', compact('Alumno','Grupos'));
    }

    function alumno_Actualizar($id,Request $request){
        $Alumno = Alumno::find($id);

        $Alumno->nombre = $request->input('nombre');
        $Alumno->apellido = $request->input('apellido');
        $Alumno->edad = $request->input('edad');
        $Alumno->telefono = $request->input('telefono');
        $Alumno->cve_grupo = $request->input('cve_grupo');
        $Alumno->email = $request->input('email');
     
        $Alumno->save();

        return redirect('/lista_alumnos');
    }

    public function alumno_Eliminar($id){
        $Alumno = Alumno::find($id);
         $Alumno->delete();
         return redirect('/lista_alumnos');
    }
}
