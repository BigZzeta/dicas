<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionDepartamentosHasPuestos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('departamentos_has_puestos', function(Blueprint $table) {
            
            $table->index(['depa_id','puestos_id']);

            $table->foreign('depa_id')
                    ->references('iddepartamento')->on('departamentos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

            $table->foreign('puestos_id')
                    ->references('idpuesto')->on('puestos')
                    ->onDelete('no action')
                    ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
