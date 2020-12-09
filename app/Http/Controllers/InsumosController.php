<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsumosModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class InsumosController extends Controller
{

    public function listarTodosLosInsumos(){

        $insumos = InsumosModel::all();
        return view('listaInsumos', ['insumos' => $insumos]);

    }
}