<?php

use Illuminate\Database\Seeder;

class TipoUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tipousuarios')->insert([
          'tipousuario'=>'Administrador'
      ]);

      DB::table('tipousuarios')->insert([
          'tipousuario'=>'Usuario'
      ]);
    }
}
