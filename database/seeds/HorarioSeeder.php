<?php

use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('horario')->insert([
          'horainicio'=>'08:00:00',
          'horafin'=>'17:00:00',
          'totalhoras'=>8,
          'descripcion'=>'horario variado',
      ]);
    }
}
