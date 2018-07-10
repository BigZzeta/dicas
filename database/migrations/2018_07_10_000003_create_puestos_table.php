<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'puestos';

    /**
     * Run the migrations.
     * @table puestos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpuesto');
            $table->unsignedInteger('numeropuesto');
            $table->string('descripcion', 40);
            $table->string('Detalle')->default('');
            $table->dateTime('timestamp');

            $table->index(["numeropuesto"], 'IDXNUMEROPUESTO');

            $table->index(["descripcion"], 'IDXDESCRIPCION');
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
