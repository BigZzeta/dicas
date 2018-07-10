<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosHasModisueldosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empleados_has_modisueldos';

    /**
     * Run the migrations.
     * @table empleados_has_modisueldos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empleados_idempleado');
            $table->integer('modisueldos_idempleado');
            $table->dateTime('modisueldos_fecha');
            $table->char('modisueldos_tiposueldo', 1);

            $table->index(["empleados_idempleado"], 'fk_empleados_has_modisueldos_empleados1_idx');

            $table->index(["modisueldos_idempleado", "modisueldos_fecha", "modisueldos_tiposueldo"], 'fk_empleados_has_modisueldos_modisueldos1_idx');


        
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
