<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use Closure;
use App\ComprasModel;
use App\ClientesModel;

class ComprasController extends Controller
{
    public function agregarCompra(Request $request){
        $p = new ComprasModel;

        $p -> modelo = $request->get('modelo');
        $p -> codigo = $request->input('codigo');
        $p -> cantidad = $request->input('cantidad');
        $p -> rut = $request->input('rut');
        $p -> fechacompra = $request->input('fechacompra');
        $p -> importe = $request->input('importe');
        $p -> save();
        
        $creado = self::listarIsnumosClientes();

        return $creado;
    }

    public function listarIsnumosClientes(){
        $insumos = InsumosModel::all();
        $clientes = ClientesModel::all();
        return view('comprasalta', ['insumos' => $insumos],['clientes' => $clientes]);

    }

    public function listarTodasLasCompras(){
        $compras = ComprasModel::all();
        return view('listadoCompras', ['compras' => $compras]);

    }
}
