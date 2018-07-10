<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoincidenciaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tipoincidencia';

    /**
     * Run the migrations.
     * @table tipoincidencia
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtipoincidencia');
            $table->string('descripcion', 40)->nullable()->default(null);
            $table->tinyInteger('derechosueldo')->default('0');
            $table->double('porcentajesueldo')->nullable()->default(null);
            $table->string('tipoimss', 1)->nullable()->default(null);
            $table->string('tipoincidencia', 1)->nullable()->default(null);
            $table->tinyInteger('derechoseptimodia')->default('0');
            $table->dateTime('timestamp')->nullable()->default(null);
            $table->double('valorunidad')->nullable()->default(null);

            $table->index(["tipoincidencia"], 'IDXTIPOINCIDENCIA');

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
