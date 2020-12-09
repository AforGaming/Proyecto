<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaModel;
use Closure;

class CategoriaController extends Controller
{
    public function agregarCategoria(Request $request){
        $p = new CategoriaModel;

        $p -> nombre = $request->input('nombre');
        $p -> save();

        $creado = true;
        return view('categoriasalta', ['creado' => $creado]);

    }

    public function listarTodasLasCategorias(){
        $categorias = CategoriaModel::all();
        return view('listadocategorias', ['categorias' => $categorias]);

    }
}


