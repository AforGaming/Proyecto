<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProveedorModel;
use Closure;

class ProveedorController extends Controller
{
    public function agregarProveedor(Request $request){
        $p = new ProveedorModel;

        $p -> rut = $request->input('rut');
        $p -> nombre = $request->input('nombre');
        $p -> dirFacturacion = $request->input('dirFacturacion');
        $p -> mail = $request->input('mail');
        $p -> dirFisica = $request->input('dirFisica');
        $p -> save();

        $creado = true;
        return view('proveedoresalta', ['creado' => $creado]);

    }

    public function listarTodosLosProveedores(){
        $proveedores = ProveedorModel::all();
        return view('listadoproveedores', ['proveedores' => $proveedores]);

    }

    public function listarProveedorParaModificar($id){
        $proveedor = ProveedorModel::where('id',$id)->first();
        return view('proveedoresmod', ['proveedor' => $proveedor]);
    }

    public function listarProveedorParaEliminar($id){
        $proveedor = ProveedorModel::where('id',$id)->first();
        return view('proveedoresbaja', ['proveedor' => $proveedor]);
    }

    public function eliminarProveedor(Request $request){
        $p = ProveedorModel::find($request->input('id'));
        $p->delete();
        $eliminado = $request->input('id');
        
        return view('proveedoresbaja',['eliminado' => $eliminado]);
        
    }

    public function modificarProveedor(Request $request){
        $p = ProveedorModel::find($request->input('id'));

        $p->rut = $request->input('rut');
        $p->nombre = $request->input('nombre');
        $p->dirFacturacion = $request->input('dirFacturacion');
        $p->mail = $request->input('mail');
        $p->dirFisica = $request->input('dirFisica');

        $modificado = $request->input('id');

        $p->save();

        return view('proveedoresmod',['modificado' => $modificado]);


    }




}
