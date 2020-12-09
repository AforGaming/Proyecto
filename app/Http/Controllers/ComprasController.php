<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use Closure;
use App\ComprasModel;
use App\ClientesModel;
use App\CategoriaModel;

class ComprasController extends Controller
{
    public function agregarCompra(Request $request){
        $p = new ComprasModel;
        $i = new InsumosModel;
    
        $i -> modelo = $request->get('modelo');
        $i -> categoria = $request->get('categoria');
        $i -> save();

        $p -> rut = $request->input('rut');
        $p -> modelo = $request->input('modelo');
        $p -> fechacompra = $request->input('fechacompra');
        $p -> importe = $request->input('importe');
        $p -> save();
        
        $creado = self::listarCategoriasClientes();

        return $creado;
    }

    public function listarCategoriasClientes(){
        $categorias = CategoriaModel::all();
        $clientes = ClientesModel::all();
        return view('comprasalta', ['categorias' => $categorias],['clientes' => $clientes]);

    }

    public function listarTodasLasCompras(){
        $compras = ComprasModel::all();
        return view('listadoCompras', ['compras' => $compras]);

    }
}
