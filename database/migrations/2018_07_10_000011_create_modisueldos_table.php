<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModisueldosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'modisueldos';

    /**
     * Run the migrations.
     * @table modisueldos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idempleado');
            $table->dateTime('fecha');
            $table->char('tiposueldo', 1);
            $table->double('sueldo')->nullable()->default(null);

            $table->index(["idempleado"], 'IDXEMPLEADOTIPOPERIODO');

            $table->index(["idempleado", "fecha", "tiposueldo"], 'IDXEMPLEADOFECHA');

            $table->index(["idempleado", "tiposueldo"], 'IDXEMPLEADOTIPO');
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
