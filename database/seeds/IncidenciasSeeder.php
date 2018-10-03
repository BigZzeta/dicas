<?php

use Illuminate\Database\Seeder;

class IncidenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('incidencias')->insert([
          'nombre'=>'Incapacidad'
      ]);

      DB::table('incidencias')->insert([
          'nombre'=>'Faltas Injustificada'
      ]);

      DB::table('incidencias')->insert([
          'nombre'=>'Permisos SGS'
      ]);

      DB::table('incidencias')->insert([
          'nombre'=>'Permisos CGS'
      ]);

    }
}
