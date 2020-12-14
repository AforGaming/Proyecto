<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VentasModel;
use App\InsumosModel;
use App\PersonaModel;
use Closure;

class VentasController extends Controller
{
    public function agregarVenta(Request $request){
        $p = new VentasModel;


        

        $p -> idProducto = $request->input('idProducto');
        $p -> fechaVenta = $request->input('fechaVenta');
        $p -> idEmpleado = $request->input('idEmpleado');
        $p -> importe = $request->input('importe');
        $p -> save();



        $creado = self::listarInsumos();

        return $creado;
    }

    public function listarInsumos(){
        $insumos = InsumosModel::all();
        $empleados = PersonaModel::all();
        return view('ventasalta', ['insumos' => $insumos],['empleados' => $empleados]);

    }

    public function listarTodasLasVentas(){
        $ventas = VentasModel::all();
        return view('listadoventas', ['ventas' => $ventas]);

    }
}
