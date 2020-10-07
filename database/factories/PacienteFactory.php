<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'nombre_apellido' => $faker->text,
        'genero' => $faker->text,
        'fechanac' => $faker->text,
        'edad' => $faker->randomDigitNotNull,
        'ci' => $faker->randomDigitNotNull,
        'barrio' => $faker->text,
        'telefono' => $faker->randomDigitNotNull,
        'grupo_sanguineo' => $faker->text,
        'enfermedad_referencial' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'latitud' => $faker->text,
        'longitud' => $faker->text,
        'email' => $faker->text,
        'resultado' => $faker->text
    ];
});
