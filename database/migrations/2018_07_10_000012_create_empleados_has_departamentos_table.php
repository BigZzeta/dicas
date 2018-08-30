<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosHasDepartamentosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empleados_has_departamentos';

    /**
     * Run the migrations.
     * @table empleados_has_departamentos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empleados_idempleado');
            $table->unsignedInteger('departamentos_iddepartamento');
            $table->unsignedInteger('puestos_idpuesto');

            $table->index(["empleados_idempleado"], 'fk_empleados_has_departamentos_empleados1_idx');

            $table->index(["departamentos_iddepartamento"], 'fk_empleados_has_departamentos_departamentos1_idx');

            $table->index(["puestos_idpuesto"], 'fk_empleados_has_departamentos_puestos1_idx');


          
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
