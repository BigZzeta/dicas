<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartamentosHasPuestos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('departamentos_has_puestos', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('depa_id')->unsigned();
            $table->integer('puestos_id')->unsigned();
            $table->integer('num_empleados');
           $table->primary(['depa_id','puestos_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('departamentos_has_puestos');
    }

}
