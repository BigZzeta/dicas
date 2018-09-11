<?php

use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('periodos')->insert([
          'nombreperiodo' => 'Quincenal',
      ]);

      DB::table('periodos')->insert([
          'nombreperiodo' => 'Semanal',
      ]);
    }
}
