<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellidoPaterno')->nullable();
            $table->string('apellidoMaterno')->nullable();
            $table->string('foto')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('idTipoUsuario')->default('2');
            $table->boolean('status')->default('0');
            $table->rememberToken();
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
