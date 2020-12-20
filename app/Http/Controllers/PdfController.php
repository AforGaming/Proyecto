<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use App\InsumosModel;
use App\ComprasModel;
use App\VentasModel;

class PdfController extends Controller
{
    public function generarPDF(){
     
        $insumos = InsumosModel::all();

        $pdf = PDF::loadView('reporteStock', compact('insumos'));

        return $pdf->stream('ReporteStock.pdf');
    }

    public function generarPDFcompras(){
     
        $compras = ComprasModel::all();

        $pdf = PDF::loadView('reporteCompras', compact('compras'));

        return $pdf->stream('ReporteCompras.pdf');
    }

    public function generarPDFventas(){
     
        $ventas = VentasModel::all();

        $pdf = PDF::loadView('reporteVentas', compact('ventas'));

        return $pdf->stream('ReporteVentas.pdf');
    }

    public function generarPDFganancias(Request $request){

        $anio = $request->get('anio');
        $mes = $request->get('mes');
        $dia = $request->get('dia');
     
        $compras = ComprasModel::where('anio','LIKE',$anio)->where('mes','LIKE',$mes)->where('dia','LIKE',$dia)->get();
        $ventas = VentasModel::where('anio','LIKE',$anio)->where('mes','LIKE',$mes)->where('dia','LIKE',$dia)->get();

        $com = "0";
        $comprado = (int)$com;

        $ven = "0";
        $vendido = (int)$ven;

        
        foreach($compras as $c)
        {
            $ma = ($c->importe);
            $mai = (int)$ma;
            $comprado = $comprado + $mai;
        }
        


        foreach($ventas as $v) 
        {
            $ca = ($v->importe);
            $cai = (int)$ca;
            $vendido = $vendido + $cai;
        }

        $ganancia = $vendido - $comprado;

        $mitems = (string)$ganancia;


        $pdf = PDF::loadView('reporteGanancias', compact('mitems'));

        return $pdf->stream('ReporteGanancias.pdf');
    }

}
