<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialperiodoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'historialperiodo';

    /**
     * Run the migrations.
     * @table historialperiodo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('empleados_idempleado');
            $table->integer('tipoperiodo_idtipoperiodo');
            $table->dateTime('datetime');

            $table->index(["tipoperiodo_idtipoperiodo"], 'fk_empleados_has_tipoperiodo_tipoperiodo1_idx');

          



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
