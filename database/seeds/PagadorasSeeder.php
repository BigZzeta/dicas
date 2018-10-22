<?php

use Illuminate\Database\Seeder;

class PagadorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pagadoras')->insert([
          'nombre'=>'SERVISKY SA DE CV',
          'direccion'=>'AV LABNA SM 20 MZ 17 LOTE 86',
      ]);

      DB::table('pagadoras')->insert([
          'nombre'=>'OPIZA SA DE CV',
          'direccion'=>'CHETUMAL',
      ]);

      DB::table('pagadoras')->insert([
          'nombre'=>'SERVIMID SA DE CV',
          'direccion'=>'merida',
      ]);
    }

}
