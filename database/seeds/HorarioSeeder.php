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
      DB::table('horarios')->insert([
          'nombre'=>'HorarioVentas',
          // 'horainicio'=>'08:00:00',
          // 'horafin'=>'17:00:00',
          // 'totalhoras'=>8,
          'descripcion'=>'DE LUENZ A VIERNES DE 8 AM A 5 PM CON HORA DE COMIDA DE 14 A 16, SABADOS DE 8 A 14 Y DOMINGO DE 14 A 19',
      ]);

      DB::table('horarios')->insert([
          'nombre'=>'HorarioContabilidad',
          // 'horainicio'=>'09:00:00',
          // 'horafin'=>'19:00:00',
          // 'totalhoras'=>8,
          'descripcion'=>'horario variado',
      ]);

      DB::table('horarios')->insert([
          'nombre'=>'HorarioVentas',
          // 'horainicio'=>'08:00:00',
          // 'horafin'=>'17:00:00',
          // 'totalhoras'=>8,
          'descripcion'=>'horario variado',
      ]);
    }
}
