<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_departamentos', function (Blueprint $table) {
            $table->increments('idcatdepartamento')->unique();
            $table->integer('numerodepartamento')->unsigned()->unique();
            $table->string('nombre',50)->unique();
            // $table->integer('numempleados');
            // $table->integer('numerodepuestos');
            $table->boolean('estatus')->default(1);//activo o inectivo
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
        Schema::dropIfExists('cat_departamentos');
    }
}
