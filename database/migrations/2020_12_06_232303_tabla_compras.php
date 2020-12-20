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
            $table->bigIncrements('id');
            $table->string('idProducto');
            $table->string("idProv");
            $table->string("Cantidad");
            $table->string("importe");
            $table->string('dia');
            $table->string('mes');
            $table->string('anio');
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compras_models');
    }

}
