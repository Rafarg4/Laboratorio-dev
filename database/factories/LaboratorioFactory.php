<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Laboratorio;
use Faker\Generator as Faker;

$factory->define(Laboratorio::class, function (Faker $faker) {

    return [
        'nombre_laboratorio' => $faker->text,
        'descripción' => $faker->text,
        'direccion' => $faker->text,
        'telefono' => $faker->randomDigitNotNull,
        'representante' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
