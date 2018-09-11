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
        Schema::create('puestos', function (Blueprint $table) {
            $table->increments('idpuesto')->unique();
            $table->integer('numeropuesto')->unique();
            $table->string('nombre')->unique();
            $table->longText('funciones')->nullable();
            $table->string('cartatecnica')->nullable();
            $table->double('sueldominimo')->default(1.0);
            $table->double('sueldomaximo')->default(2.0);
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
