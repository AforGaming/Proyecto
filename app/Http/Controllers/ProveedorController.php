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

    public function listarTodosLosInsumos(){
        $proveedores = ProveedorModel::all();
        return view('listadoProveedores', ['proveedores' => $proveedores]);

    }
}
