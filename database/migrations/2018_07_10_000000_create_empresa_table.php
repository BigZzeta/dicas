<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'empresa';

    /**
     * Run the migrations.
     * @table empresa
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('idempresa')->nullable();
            $table->string('nombrecorto', 15)->nullable()->default(null);
            $table->string('direccion', 60)->nullable()->default(null);
            $table->string('localidad', 40)->nullable()->default(null);
            $table->string('codigopostal', 5)->nullable()->default(null);
            $table->string('telefono1', 20)->nullable()->default(null);
            $table->string('telefono2', 20)->nullable()->default(null);
            $table->string('telefono3', 20)->nullable()->default(null);
            $table->string('RegimenFiscal', 3)->nullable()->default(null);
            $table->dateTime('timestamp')->nullable()->default(null);

            $table->unique(["idempresa"], 'idempresa_UNIQUE');
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
