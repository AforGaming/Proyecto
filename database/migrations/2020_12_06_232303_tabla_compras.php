<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_models', function (Blueprint $table) {
            $table->bigIncrements('nroCompra');
            $table->string('modelo');
            $table->string("idProv");
            $table->string("fechaCompra");
            $table->string("importe");
            $table->timestamps();
        });
    }

}