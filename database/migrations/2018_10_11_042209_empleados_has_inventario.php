<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpleadosHasInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_has_inventario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('empleados_id')->unsigned();
            $table->integer('depa_id')->unsigned();
            $table->integer('puestos_id')->unsigned();
            $table->char('estatus',1)->default('A');
            
            /*Indices*/
            $table->index(['empleados_id']);
            $table->index(['depa_id','puestos_id']);
            /*Llaves*/
            $table->primary(['depa_id','puestos_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_has_inventario');
    }
}
