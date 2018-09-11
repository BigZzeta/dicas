<?php

use Illuminate\Database\Seeder;

class PagadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pagadora')->insert([
          'nombre'=>'SERVISKY SA DE CV',
      ]);

      DB::table('pagadora')->insert([
          'nombre'=>'OPIZA SA DE CV',
      ]);

      DB::table('pagadora')->insert([
          'nombre'=>'SERVIMID SA DE CV',
      ]);
    }
}
