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
          'nombre'=>'SERVISKY SA DE CV',
          'direccion'=>'AVENIDA LABNA MANZANA 17 LOTE 86 INT A',
          'colonia'=>'CENTRO SM 20',
          'codigopostal'=>'77500',
          'telefono1'=>'01-998-884-2905',
          'telefono2'=>'',
          'siglas'=>'GTC'
      ]);
    }
}
