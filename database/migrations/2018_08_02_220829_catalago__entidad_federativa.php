<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalagoEntidadFederativa extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cat_entidad_federativa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado', 25);
            $table->timestamp('registro')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cat_entidad_federativa');
    }

}
