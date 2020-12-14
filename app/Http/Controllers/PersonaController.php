<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonaModel;
use Closure;
use Illuminate\Support\Facades\Auth;



class PersonaController extends Controller
{

    public function listarTodasLasPersonas(){
        $personas = PersonaModel::all();
        return view('lista', ['personas' => $personas]);

    }
    
    public function listarUnaPersona($id){
        $personas = PersonaModel::where('id',$id)->get();
        return view('lista', ['personas' => $personas]);
    }


    public function listarPersonaParaModificar($id){
        $persona = PersonaModel::where('id',$id)->first();
        return view('modificacion', ['persona' => $persona]);
    }

    public function listarPersonaParaEliminar($id){
        $persona = PersonaModel::where('id',$id)->first();
        return view('baja', ['persona' => $persona]);
    }


    public function agregarPersona(Request $request){
        $p = new PersonaModel;

        $p -> ci = $request->input('ci');
        $p -> nombre = $request->input('nombre');
        $p -> apellido = $request->input('apellido');
        $p -> mail = $request->input('mail');
        $p -> fechaIngreso = $request->input('fechaIngreso');
        $p -> fechaNacimiento = $request->input('fechaNacimiento');
        $p -> localidad = $request->input('localidad');
        $p -> save();

        $creado = true;
        return view('alta', ['creado' => $creado]);

    }

    public function eliminarPersona(Request $request){
        $p = PersonaModel::find($request->input('id'));
        $p->delete();
        $eliminado = $request->input('id');
        
        return view('baja',['eliminado' => $eliminado]);
        
    }

    public function modificarPersona(Request $request){
        $p = PersonaModel::find($request->input('id'));

        $p->ci = $request->input('ci');
        $p->nombre = $request->input('nombre');
        $p->apellido = $request->input('apellido');
        $p->mail = $request->input('mail');
        $p->fechaIngreso = $request->input('fechaIngreso');
        $p->fechaNacimiento = $request->input('fechaNacimiento');
        $p->localidad = $request->input('localidad');

        $modificado = $request->input('id');

        $p->save();

        return view('modificacion',['modificado' => $modificado]);


    }

    public function autenticarPersona(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('alta');
        }
        else{
            return view('login',['error' => "true"]);
        }
    }



}
