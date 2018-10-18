<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('idexpediente')->unique();

            $table->unsignedInteger('idempleado');
            $table->foreign('idempleado')->references('idempleado')->on('empleados');

            $table->unsignedInteger('idcatexpediente');
            $table->foreign('idcatexpediente')->references('idcatexpediente')->on('catexpedientes');

            $table->string('documento');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('expedientes');
    }
}
