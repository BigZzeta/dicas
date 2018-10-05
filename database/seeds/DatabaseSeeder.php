<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dd('departamentoSeeder');
        $this->truncateTables([
            'cat_departamentos',
            'tipousuarios',
            'users',
            'cat_entidad_federativa',
            'puestos',
            'pagadoras',
            'periodos',
            'unes',
            'empresas',
            'horarios',
            'incidencias',
            'empleados',
            'expedientes'
        ]);

        $this->call(departamentosSeeder::class);
        $this->call(TipoUsuario::class);
        $this->call(userSeeder::class);
        $this->call(cat_entidad_federativa::class);
        $this->call(EmpresaSeeder::class);
        $this->call(PuestosSeeder::class);
        $this->call(PagadorasSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(UneSeeders::class);
        $this->call(HorarioSeeder::class);
        $this->call(IncidenciasSeeder::class);
        $this->call(empleadosSeeder::class);
        $this->call(ExpedientesSeeder::class);

    }
    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }


    DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
