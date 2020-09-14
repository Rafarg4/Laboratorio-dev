<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Control;
use Faker\Generator as Faker;

$factory->define(Control::class, function (Faker $faker) {

    return [
        'paciente_id' => $faker->randomDigitNotNull,
        'fecha_analisis' => $faker->text,
        'estado_paciente' => $faker->text,
        'recomendacion' => $faker->text,
        'fecha_alta' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
