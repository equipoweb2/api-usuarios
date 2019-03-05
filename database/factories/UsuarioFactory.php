<?php

use Faker\Generator as Faker;
use App\Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
    ];
});
