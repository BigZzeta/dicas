<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncapacidadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'incapacidad';

    /**
     * Run the migrations.
     * @table incapacidad
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtarjetaincapacidad');
            $table->integer('idtipoincidencia')->nullable()->default(null);
            $table->integer('idempleado')->nullable()->default(null);
            $table->string('folio', 20)->nullable()->default(null);
            $table->integer('diasautorizados')->nullable()->default(null);
            $table->dateTime('fechainicio')->nullable()->default(null);
            $table->string('descripcion', 40)->nullable()->default(null);
            $table->string('incapacidadinicial', 1)->nullable()->default(null);
            $table->string('ramoseguro', 1)->nullable()->default(null);
            $table->string('tiporiesgo', 1)->nullable()->default(null);
            $table->integer('numerocaso')->nullable()->default(null);
            $table->tinyInteger('fincaso')->default('0');
            $table->double('porcentajeincapacidad')->nullable()->default(null);
            $table->tinyInteger('controlmaternidad')->default('0');
            $table->string('nombremedico', 40)->nullable()->default(null);
            $table->string('matriculamedico', 40)->nullable()->default(null);
            $table->string('circunstancia', 1)->nullable()->default(null);
            $table->dateTime('timestamp')->nullable()->default(null);
            $table->char('controlincapacidad', 1)->nullable()->default(null);
            $table->char('secuelaconsecuencia', 1)->nullable()->default(null);

            $table->index(["idempleado"], 'IDXEMPLEADO');

            $table->index(["folio"], 'IDXFOLIO');

            $table->index(["idempleado", "numerocaso"], 'IDXEMPLEADONUMEROCASO');

            $table->index(["idempleado", "folio"], 'IDXEMPLEADOFOLIO');
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
