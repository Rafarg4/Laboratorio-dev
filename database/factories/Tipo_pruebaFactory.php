<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_prueba;
use Faker\Generator as Faker;

$factory->define(Tipo_prueba::class, function (Faker $faker) {

    return [
        'nombre' => $faker->text,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
