<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FuncionGetIdDepa extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::unprepared('DROP FUNCTION IF EXISTS getIdDepa; '
                . 'create function getIdDepa() '
                . 'returns int '
                . 'begin '
                . 'set @id=(select iddepartamento from departamentos order by iddepartamento DESC limit 1);'
                . ' return @id; end'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::unprepared('DROP FUNCTION IF EXISTS getIdDepa'); 
    }

}
