<?php

use Illuminate\Database\Seeder;

class CatexpedientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('catexpedientes')->insert([
        'numero'=>'1',
        'nombre'=>'Solicitud de Empleo',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'2',
        'nombre'=>'Curriculum',
        'estatus'=>'1',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'3',
        'nombre'=>'Acta de nacimiento',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'4',
        'nombre'=>'Comprobante de domicilio',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'5',
        'nombre'=>'Fotografia del domicilio',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'6',
        'nombre'=>'Croquis del domicilio',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'7',
        'nombre'=>'Identificacion oficial',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'8',
        'nombre'=>'Carta de recomendacion 1',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'9',
        'nombre'=>'Carta de recomendacion 2',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'10',
        'nombre'=>'Carta de recomendacion 3',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'11',
        'nombre'=>'CURP',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'12',
        'nombre'=>'Carta de ISR',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'13',
        'nombre'=>'Carta Infonavit',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'14',
        'nombre'=>'Carta de Antecedentes No Penales',
      ]);
      DB::table('catexpedientes')->insert([
        'numero'=>'15',
        'nombre'=>'Constancia del RFC',
      ]);
    }
}
