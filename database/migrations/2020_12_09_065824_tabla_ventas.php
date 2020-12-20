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
            $table->String('cantidad');
            $table->String('importe');
            $table->string('dia');
            $table->string('mes');
            $table->string('anio');
            $table->timestamp('created_at')->toDateString();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venta_models');
    }

}