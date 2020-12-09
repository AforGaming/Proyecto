<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class InsumosController extends Controller
{
    public function agregarInsumo(Request $request){
        $p = new InsumosModel;

        $p -> modelo = $request->input('modelo');
        $p -> categoria = $request->input('categoria');
        $p -> proveedor = $request->input('proveedor');
        $p -> save();

        $creado = true;
        return view('insumosalta', ['creado' => $creado]);

    }

    public function listarTodosLosInsumos(){
        $insumos = InsumosModel::all();
        return view('listaInsumos', ['insumos' => $insumos]);

    }
}
