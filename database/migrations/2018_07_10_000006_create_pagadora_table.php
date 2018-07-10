<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagadoraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pagadora';

    /**
     * Run the migrations.
     * @table pagadora
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPagadora');
            $table->string('RFC', 13);
            $table->string('RazonSocial', 100);
            $table->dateTime('TimeStamp');

            $table->unique(["idPagadora", "RFC"], 'IDXIDCONTRATANTERFC');

            $table->unique(["RFC"], 'IX_nom10048');
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
