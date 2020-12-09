<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VentasModel;
use App\InsumosModel;
use Closure;

class VentasController extends Controller
{
    public function agregarVenta(Request $request){
        $p = new VentasModel;

        $p -> idProducto = $request->input('idProducto');
        $p -> fechaVenta = $request->input('fechaVenta');
        $p -> importe = $request->input('importe');
        $p -> save();

        $creado = self::listarInsumos();

        return $creado;
    }

    public function listarInsumos(){
        $insumos = InsumosModel::all();
        return view('ventasalta', ['insumos' => $insumos]);

    }

    public function listarTodasLasVentas(){
        $ventas = VentasModel::all();
        return view('listadoventas', ['ventas' => $ventas]);

    }
}
