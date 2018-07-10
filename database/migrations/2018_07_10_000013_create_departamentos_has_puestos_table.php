<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosHasPuestosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'departamentos_has_puestos';

    /**
     * Run the migrations.
     * @table departamentos_has_puestos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('departamentos_iddepartamento');
            $table->unsignedInteger('puestos_idpuesto');

            $table->index(["departamentos_iddepartamento"], 'fk_departamentos_has_puestos_departamentos1_idx');

            $table->index(["puestos_idpuesto"], 'fk_departamentos_has_puestos_puestos1_idx');


          
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
