<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("rut");
            $table->string("nombre");
            $table->string("dirFacturacion");
            $table->string("mail");
            $table->string("dirFisica");
            $table->timestamps();
        });
    }

}