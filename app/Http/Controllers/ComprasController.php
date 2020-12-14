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
        $i = new InsumosModel;
    
        $i -> modelo = $request->get('modelo');
        $i -> categoria = $request->get('categoria');
        $i -> save();

        $p -> idProv = $request->input('idProv');
        $p -> modelo = $request->input('modelo');
        $p -> fechacompra = $request->input('fechacompra');
        $p -> importe = $request->input('importe');
        $p -> save();
        
        $creado = self::listarCategoriasClientes();

        return $creado;
    }

    public function listarCategoriasClientes(){
        $categorias = CategoriaModel::all();
        $clientes = ProveedorModel::all();
        return view('comprasalta', ['categorias' => $categorias],['clientes' => $clientes]);

    }

    public function listarTodasLasCompras(){
        $compras = ComprasModel::all();
        return view('listadoCompras', ['compras' => $compras]);

    }

    public function listarCompraParaModificar($id){
        $compras = ComprasModel::where('id',$id)->first();
        $id = ($id);
        $c = InsumosModel::where('id',$id)->first();

        return view('comprasmod', ['compras' => $compras],['c' => $c]);
    }

public function listarCompraParaEliminar($id){
        $compras = ComprasModel::where('id',$id)->first();
        $id = ($id);
        $c = InsumosModel::where('id',$id)->first();

        return view('comprasbaja', ['compras' => $compras],['c' => $c]);
    }

    public function eliminarCompra(Request $request){
        $p = ComprasModel::find($request->input('id'));
        $c = InsumosModel::find($request->input('id'));
        $c->delete();
        $p->delete();
        $eliminado = $request->input('id');
        
        return view('comprasbaja',['eliminado' => $eliminado]);
        
    }

    public function modificarCompra(Request $request){
        $p = ComprasModel::find($request->input('id'));
        $c = InsumosModel::find($request->input('id'));

        $c->modelo = $request->input('modelo');
        $c->categoria = $request->input('categoria');

        $c->save();

        $p->modelo = $request->input('modelo');
        $p->idProv = $request->input('idProv');
        $p->fechaCompra = $request->input('fechaCompra');
        $p->importe = $request->input('importe');

        $modificado = $request->input('id');

        $p->save();

        return view('comprasmod',['modificado' => $modificado]);


    }


}
