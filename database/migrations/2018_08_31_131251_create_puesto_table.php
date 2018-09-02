<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto', function (Blueprint $table) {
            $table->increments('idpuesto');
            $table->integer('numeropuesto');
            $table->string('descripcion');
            $table->increments('idpuesto')->unique();
            $table->integer('numeropuesto')->unique();
            $table->string('descripcion')->unique();
            $table->string('cartatecnica');
            $table->double('sueldominimo');
            $table->double('sueldomaximo');
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
        Schema::dropIfExists('puesto');
    }
}
