<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltasbrTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'altasbr';

    /**
     * Run the migrations.
     * @table altasbr
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idbajareingreso');
            $table->integer('idempleado')->nullable()->default(null);
            $table->char('clavebajareingreso', 1)->nullable()->default(null);
            $table->dateTime('fecha')->nullable()->default(null);
            $table->integer('cidperiodo')->nullable()->default(null);
            $table->integer('cidtipoperiodo')->nullable()->default(null);

            $table->index(["idempleado", "fecha"], 'IDXEMPLEADO');

            $table->index(["idempleado", "fecha", "cidtipoperiodo"], 'IDXEMPLEADOFECHATIPOPER');

            $table->index(["idempleado", "fecha"], 'IDXEMPLEADOFECHA');

            $table->index(["fecha", "clavebajareingreso", "idempleado"], 'IDXPRIMARYKEY');
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
