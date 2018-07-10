<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'departamentos';

    /**
     * Run the migrations.
     * @table departamentos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('iddepartamento');
            $table->integer('numerodepartamento');
            $table->string('descripcion', 40);
            $table->string('numerodepuestos', 45);
            $table->dateTime('timestamp')->nullable()->default(null);

            $table->index(["numerodepartamento"], 'IDXNUMERODEPARTAMENTO');

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