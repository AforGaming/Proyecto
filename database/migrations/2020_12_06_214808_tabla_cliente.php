<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("rut")->unique();
            $table->string("nombre");
            $table->string("dirFacturacion");
            $table->string("mail");
            $table->string("dirFisica");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes_models');
    }

}