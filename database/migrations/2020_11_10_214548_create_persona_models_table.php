<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("ci")->unique();
            $table->string("nombre");
            $table->string("apellido");
            $table->string("mail")->unique();
            $table->string("celular");
            $table->string("fechaIngreso");
            $table->string("fechaNacimiento");
            $table->string("localidad");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_models');
    }
}
