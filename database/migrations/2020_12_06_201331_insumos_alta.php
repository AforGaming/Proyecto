<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsumosAlta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("modelo");
            $table->string("categoria");
            $table->string("precioCompra");
            $table->string("precioVenta");
            $table->string("cantidad")->default("0");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('insumos_models');
    }

}
   

