<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosHasIncapacidadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empleados_has_incapacidad';

    /**
     * Run the migrations.
     * @table empleados_has_incapacidad
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empleados_idempleado');
            $table->integer('incapacidad_idtarjetaincapacidad');

            $table->index(["incapacidad_idtarjetaincapacidad"], 'fk_empleados_has_incapacidad_incapacidad1_idx');

            $table->index(["empleados_idempleado"], 'fk_empleados_has_incapacidad_empleados1_idx');


      
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
