<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use Closure;
use App\ComprasModel;
use App\ProveedorModel;
use App\CategoriaModel;


class ComprasController extends Controller
{
    public function agregarCompra(Request $request){
        $p = new ComprasModel;
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

        $p -> idProv = $request->input('idProv');
        $p -> idProducto = $request->input('idProducto');
        $p -> Cantidad = $request->input('cantidad');

        $m = $request->input('cantidad');
        $intm = (int)$m;
        $ma = ($i->precioCompra);
        $mai = (int)$ma;
        $importe = $mai * $intm;
        $mitems = (string)$importe;

        $p -> importe = $mitems;

        $curTime = new \DateTime();
        $p -> anio = $curTime->format('Y');
        $p -> mes = $curTime->format('m');
        $p -> dia = $curTime->format('d');

        $p -> save();
        
        $creado = self::listarCategoriasClientes();

        return $creado;
    }

    public function confirmarCompra(){
        $productos = InsumosModel::all();
        $clientes = ProveedorModel::all();
        return view('comprasalta', ['productos' => $productos],['clientes' => $clientes]);

    }

    public function listarCategoriasClientes(){
        $productos = InsumosModel::all();
        $clientes = ProveedorModel::all();
        return view('comprasalta', ['productos' => $productos],['clientes' => $clientes]);

    }

    public function listarTodasLasCompras(){
        $compras = ComprasModel::all();
        return view('listadoCompras', ['compras' => $compras]);

    }

    public function listarCompraParaModificar($id){
        $compras = ComprasModel::where('id',$id)->first();
        $clientes = ProveedorModel::all();

        return view('comprasmod', ['compras' => $compras],['clientes' => $clientes]);
    }

    public function listarCompraParaEliminar($id){
        $compras = ComprasModel::where('id',$id)->first();

        return view('comprasbaja', ['compras' => $compras]);
    }

    public function eliminarCompra(Request $request){
        $p = ComprasModel::find($request->input('id'));
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


        $p->delete();
        $eliminado = $request->input('id');
        
        return view('comprasbaja',['eliminado' => $eliminado]);
        
    }

    public function modificarCompra(Request $request){
        $p = ComprasModel::find($request->input('id'));
    
        $p->idProv = $request->input('idProv');
       

        $modificado = $request->input('id');

        $p->save();

        return view('comprasmod',['modificado' => $modificado]);


    }


}
