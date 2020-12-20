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
        $id = $request->get('idProducto');
        $i = InsumosModel::where('id',$id)->first();;

        $c = $request->input('cantidad');
        $int = (int)$c;
        $ca = ($i->cantidad);
        $cai = (int)$ca;
        $cantidad = $cai - $int;
        $items = (string)$cantidad;
        $i -> cantidad = $items;
        $i -> save();

        

        $p -> idProducto = $request->input('idProducto');
        $p -> cantidad = $request->input('cantidad');
        $p -> idEmpleado = $request->input('idEmpleado');

        $m = $request->input('cantidad');
        $intm = (int)$m;
        $ma = ($i->precioVenta);
        $mai = (int)$ma;
        $importe = $mai * $intm;
        $mitems = (string)$importe;

        $p -> importe = $mitems;

        $curTime = new \DateTime();
        $p -> anio = $curTime->format('Y');
        $p -> mes = $curTime->format('m');
        $p -> dia = $curTime->format('d');


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

    public function listarVentaParaEliminar($nroVenta){
        $ventas = VentasModel::where('nroVenta',$nroVenta)->first();

        return view('ventasbaja', ['ventas' => $ventas]);
    }

    public function eliminarVenta(Request $request){
        $a = VentasModel::find($request->input('nroVenta'));
        $id = $request->get('idProducto');
        $i = InsumosModel::where('id',$id)->first();;

        $c = $request->input('cantidad');
        $int = (int)$c;
        $ca = ($i->cantidad);
        $cai = (int)$ca;
        $cantidad = $cai + $int;
        $items = (string)$cantidad;
        $i -> cantidad = $items;

        $i -> save();


        $a->delete();
        $eliminado = $request->input('nroVenta');
        
        return view('ventasbaja',['eliminado' => $eliminado]);
        
    }
}
