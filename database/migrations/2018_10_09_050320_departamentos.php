<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Departamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('departamentos',function(Blueprint $table){
            $table->increments('iddepartamento');
            $table->integer('unes_idune')->unsigned();
            $table->integer('catDepa_id')->unsigned();
            $table->integer('num_depa')->nullable();
            $table->string('nombre',45)->nullable();
            $table->integer('num_empleados')->nullable();
            $table->integer('num_puestos')->nullable();
            $table->char('status',1)->default('A')->nullable();
            $table->timestamp('registro')->default(DB::raw('CURRENT_TIMESTAMP'));
            /*
            //crear indices para las relaciones
             */
            $table->index(['unes_idune']);
            $table->index(['catDepa_id']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('departamentos');
    }
}
