<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagadoraHasEmpleadosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pagadora_has_empleados';

    /**
     * Run the migrations.
     * @table pagadora_has_empleados
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('pagadora_idPagadora');
            $table->integer('empleados_idempleado');

            $table->index(["empleados_idempleado"], 'fk_pagadora_has_empleados_empleados1_idx');

            $table->index(["pagadora_idPagadora"], 'fk_pagadora_has_empleados_pagadora1_idx');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
