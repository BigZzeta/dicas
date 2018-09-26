<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\CatDepartamento::class, function (Faker $faker) {
    return [
        'numerodepartamento' => $faker->unique()->numberBetween($min = 1, $max = 300),
        'nombre' => $faker->unique()->text(20),
        // 'numempleados' => $faker->numberBetween($min = 1, $max = 30),
        // 'numerodepuestos' => $faker->numberBetween($min = 1, $max = 30),

    ];
});

// $factory->define(App\Puesto::class, function (Faker $faker) {
//     return [
//         'numeropuesto' => $faker->unique()->randomDigit,
//         'descripcion' => $faker->unique()->text(10),
//         'sueldominimo' => $faker->randomDigit,
//         'sueldomaximo' => $faker->randomDigit,
//     ];
// });
