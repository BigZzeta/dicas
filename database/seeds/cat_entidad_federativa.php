<?php

use Illuminate\Database\Seeder;

class cat_entidad_federativa extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('cat_entidad_federativa')->insert([
            'codigo' => '01',
            'estado' => 'AGUASCALIENTES'
        ]);
        DB::table('cat_entidad_federativa')->insert([
            'codigo' => '02',
            'estado' => 'BAJA CALIFORNIA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '03',
            'estado' => 'BAJA CALIFORNIA SUR'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '04',
            'estado' => 'CAMPECHE'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '05',
          'estado' => 'COHAUILA DE ZARAGOZA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '06',
          'estado' => 'COLIMA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '07',
          'estado' => 'CHIAPAS'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '08',
          'estado' => 'CHIHUAHUA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '09',
          'estado' => 'DISTRITO FEDERAL'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '10',
          'estado' => 'DURANGO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '11',
          'estado' => 'GUANAJUATO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '12',
          'estado' => 'GUERRERO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '13',
          'estado' => 'HIDALGO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '14',
          'estado' => 'JALISCO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '15',
          'estado' => 'MEXICO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '16',
          'estado' => 'MICHOACAN DE OCAMPO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '17',
          'estado' => 'MORELOS'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '18',
          'estado' => 'NAYARIT'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '19',
          'estado' => 'NUEVO LEON'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '20',
          'estado' => 'OAXACA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '21',
          'estado' => 'PUEBLA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '22',
          'estado' => 'QUERETARO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '23',
          'estado' => 'QUINTANA ROO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '24',
          'estado' => 'SAN LUIS POTOSI'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '25',
          'estado' => 'SINALOA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '26',
          'estado' => 'SONORA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '27',
          'estado' => 'TABASCO'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '28',
          'estado' => 'TAMAULIPAS'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '29',
          'estado' => 'TLAXCALA'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '30',
          'estado' => 'VERACRUZ DE IGNACIO DE LA LLAVE'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '31',
          'estado' => 'YUCATAN'
        ]);
        DB::table('cat_entidad_federativa')->insert([
          'codigo' => '32',
          'estado' => 'ZACATECAS'
        ]);

    }

}
