<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('idempresa');
            $table->string('nombre')->nulllable();
            $table->string('direccion')->nulllable();
            $table->string('colonia')->nulllable();
            $table->string('codigopostal')->nulllable();
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('siglas');
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
        Schema::dropIfExists('empresa');
    }
}
