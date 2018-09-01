<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('empresa')->insert([
          'nombre'=>'RECURSOS HUMANOS',
          'direccion'=>'AVENIDA MONTE DE AME',
          'telefono1'=>'01-998-884-2905',
          'telefono2'=>'',
          'siglas'=>'GTC'
      ]);
    }
}
