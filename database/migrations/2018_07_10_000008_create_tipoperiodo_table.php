<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoperiodoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tipoperiodo';

    /**
     * Run the migrations.
     * @table tipoperiodo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idtipoperiodo');
            $table->string('nombretipoperiodo', 40)->nullable()->default(null);
            $table->integer('diasdelperiodo')->nullable()->default(null);
            $table->dateTime('timestamp')->nullable()->default(null);

            $table->index(["diasdelperiodo"], 'IDXDIASDELPERIODO');

            $table->index(["idtipoperiodo"], 'IDXIDTIPOPERIODO');

            $table->index(["nombretipoperiodo"], 'IDXNOMBRETIPOPERIODO');
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
