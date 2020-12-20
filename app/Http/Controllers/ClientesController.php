<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientesModel;
use Closure;

class ClientesController extends Controller
{
    public function agregarCliente(Request $request){
        $p = new ClientesModel;

        $p -> rut = $request->input('rut');
        $p -> nombre = $request->input('nombre');
        $p -> mail = $request->input('mail');
        $p -> dirFacturacion = $request->input('dirFacturacion');
        $p -> dirFisica = $request->input('dirFisica');
        $p -> save();

        $creado = true;
        return view('clientesalta', ['creado' => $creado]);

    }

    public function listarTodosLosClientes(){
        $clientes = ClientesModel::all();
        return view('listaClientes', ['clientes' => $clientes]);

    }
}
