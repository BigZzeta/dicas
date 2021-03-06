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
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('idempresa')->unique();
            $table->string('nombre')->unique();
            $table->string('direccion');
            $table->string('colonia');
            $table->string('codigopostal');
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('siglas');
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
