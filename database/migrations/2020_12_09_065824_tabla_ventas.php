<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_models', function (Blueprint $table) {
            $table->bigIncrements('nroVenta');
            $table->String('idProducto');
            $table->String('idEmpleado');
            $table->String('fechaVenta');
            $table->String('importe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venta_models');
    }

}