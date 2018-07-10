<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'vacaciones';

    /**
     * Run the migrations.
     * @table vacaciones
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtcontrolvacaciones');
            $table->integer('idempleado')->nullable()->default(null);
            $table->integer('ejercicio')->nullable()->default(null);
            $table->integer('diasvacaciones')->nullable()->default(null);
            $table->double('diasprimavacacional')->nullable()->default(null);
            $table->dateTime('fechainicio')->nullable()->default(null);
            $table->dateTime('fechafin')->nullable()->default(null);
            $table->string('diasdescanso', 100)->nullable()->default(null);
            $table->dateTime('timestamp')->nullable()->default(null);
            $table->dateTime('fechapago')->nullable()->default(null);

            $table->index(["idempleado"], 'IDXEMPLEADO');

            $table->index(["fechainicio"], 'IDXFECHAINICIO');

            $table->index(["idempleado", "fechainicio"], 'IDXEMPLEADOFECHAINICIO');

            $table->index(["ejercicio", "idempleado"], 'IDXEJERCICIOEMPLEADO');
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
