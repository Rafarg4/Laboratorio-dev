<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Caso_positivo;
use Faker\Generator as Faker;

$factory->define(Caso_positivo::class, function (Faker $faker) {

    return [
        'paciente_id' => $faker->randomDigitNotNull,
        'codigo' => $faker->randomDigitNotNull,
        'region' => $faker->text,
        'codigo_distrito' => $faker->randomDigitNotNull,
        'distrito' => $faker->text,
        'fecha_notificacion' => $faker->text,
        'medico' => $faker->text,
        'media_edad' => $faker->randomDigitNotNull,
        'residente' => $faker->text,
        'hospedaje' => $faker->text,
        'telefono_verificado' => $faker->randomDigitNotNull,
        'codigo_departamento' => $faker->randomDigitNotNull,
        'departamento' => $faker->text,
        'zona' => $faker->text,
        'personal_de_blanco' => $faker->text,
        'albergue' => $faker->text,
        'lugar_albergue' => $faker->text,
        'sintomas_fiebre' => $faker->text,
        'hospitalizado' => $faker->text,
        'signo_sintoma' => $faker->text,
        'vacuna_para_la_influenza' => $faker->text,
        'fecha_vacunacion' => $faker->text,
        'viajo_resiente' => $faker->text,
        'centro_asistencia_covid' => $faker->text,
        'centro_asistencia_pais' => $faker->text,
        'centro_asistencia_ciudad' => $faker->text,
        'nombre_centro_asistencia' => $faker->text,
        'fecha_asistida' => $faker->text,
        'contacto_con_animales' => $faker->text,
        'contacto_persona' => $faker->text,
        'tipo_contacto' => $faker->text,
        'contacto_otro' => $faker->text,
        'contacto_con_infectado' => $faker->text,
        'dato_de_contacto' => $faker->text,
        'toma_de_muestra' => $faker->text,
        'laboratorio' => $faker->text,
        'nro_planilla' => $faker->text,
        'anho' => $faker->text,
        'responsable_de_carga' => $faker->text,
        'usuario_lugar' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
