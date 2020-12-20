<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use App\CategoriaModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class InsumosController extends Controller
{

    public function agregarInsumo(Request $request){
        $p = new InsumosModel;

        $p -> modelo = $request->input('modelo');
        $p -> categoria = $request->input('categoria');
        $p -> precioCompra = $request->input('precioCompra');
        $p -> precioVenta = $request->input('precioVenta');
        $p -> save();

        $creado = self::listarCategorias();

        return $creado;
    }

    public function listarCategorias(){
        $categorias = CategoriaModel::all();
        return view('insumosalta', ['categorias' => $categorias]);

    }


    public function listarTodosLosInsumos(){

        $insumos = InsumosModel::all();
        return view('listaInsumos', ['insumos' => $insumos]);

    }
}