<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unes', function (Blueprint $table) {
          $table->increments('idune')->unique();
          $table->integer('numeroune')->unique();
          $table->string('nombre')->unique();
          $table->string('direccion');
          $table->integer('inventariopuestos');
          $table->integer('estatus')->default(1);
          $table->timestamp('tiemstamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unes');
    }
}
