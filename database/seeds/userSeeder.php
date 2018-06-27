<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Eric',
            'apellidoPaterno'=>'Centeno',
            'apellidoMaterno'=>'Arcos',
            'email'=>'ericcenteno1@gmail.com',
            'username'=>'ericen',
            'password'=> bcrypt('celeste12'),
            'status'=>'1'
        ]);

        DB::table('users')->insert([
            'name'=>'Jose',
            'apellidoPaterno'=>'Lopez',
            'apellidoMaterno'=>'Lopez',
            'email'=>'jose@gmail.com',
            'username'=>'jose',
            'password'=> bcrypt('jose'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Adrian',
            'apellidoPaterno'=>'Guzman',
            'apellidoMaterno'=>'Lara',
            'email'=>'adrian@gmail.com',
            'username'=>'adrian',
            'password'=> bcrypt('adrian'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Guadalupe',
            'apellidoPaterno'=>'Uc',
            'apellidoMaterno'=>'Can',
            'email'=>'guadalupe@gmail.com',
            'username'=>'guadalupe',
            'password'=> bcrypt('guadalupe'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Margarito',
            'apellidoPaterno'=>'Sanchez',
            'apellidoMaterno'=>'Estrada',
            'email'=>'margarito@gmail.com',
            'username'=>'margarito',
            'password'=> bcrypt('margarito'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Juan',
            'apellidoPaterno'=>'Rodriguez',
            'apellidoMaterno'=>'Camaney',
            'email'=>'juancamaney@gmail.com',
            'username'=>'juan',
            'password'=> bcrypt('juan'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Adrian',
            'apellidoPaterno'=>'Uribe',
            'apellidoMaterno'=>'Uribe',
            'email'=>'adrianuribe@gmail.com',
            'username'=>'adrianuribe',
            'password'=> bcrypt('adrian'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Rosendo',
            'apellidoPaterno'=>'Martinez',
            'apellidoMaterno'=>'Yam',
            'email'=>'rosendo@gmail.com',
            'username'=>'rosendo',
            'password'=> bcrypt('rosendo'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Martiniano',
            'apellidoPaterno'=>'Sanchez',
            'apellidoMaterno'=>'Esquivel',
            'email'=>'martiniano@gmail.com',
            'username'=>'martiniano',
            'password'=> bcrypt('martiniano'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Luis Alfonso',
            'apellidoPaterno'=>'Ceballos',
            'apellidoMaterno'=>'Chable',
            'email'=>'luisalfonso@gmail.com',
            'username'=>'luisalfonso',
            'password'=> bcrypt('luisalfonso'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Tomas Eduardo',
            'apellidoPaterno'=>'Orozco',
            'apellidoMaterno'=>'Ibarra',
            'email'=>'tomasibarra@gmail.com',
            'username'=>'tomasibarra',
            'password'=> bcrypt('tomasi'),
            'status'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'Lilia',
            'apellidoPaterno'=>'De La Cuesta',
            'apellidoMaterno'=>'Rivera',
            'email'=>'liliarivera@gmail.com',
            'username'=>'liliarivera',
            'password'=> bcrypt('lilia'),
            'status'=>'0'
        ]);



            /*
        factory(Users::class)->create([
            'User_id'=>$id,
        ]);

        factory(User::class, 48)->create();
            */

    }
}
