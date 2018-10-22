<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionesEmpleadosHasInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados_has_inventario', function (Blueprint $table) {
            $table->foreign('empleados_id')->references('idempleado')->on('empleados');
            $table->foreign(['depa_id','puestos_id'])->references(['depa_id','puestos_id'])->on('departamentos_has_puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('empleados_has_iventario', function (Blueprint $table) {
            //
        //});
    }
}
