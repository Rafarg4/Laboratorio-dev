<?php

namespace App\Repositories;

use App\Models\Caso_positivo;
use App\Repositories\BaseRepository;

/**
 * Class Caso_positivoRepository
 * @package App\Repositories
 * @version October 10, 2020, 10:51 pm -03
*/

class Caso_positivoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paciente_id',
        'codigo',
        'region',
        'codigo_distrito',
        'distrito',
        'fecha_notificacion',
        'medico',
        'media_edad',
        'residente',
        'hospedaje',
        'telefono_verificado',
        'codigo_departamento',
        'departamento',
        'zona',
        'personal_de_blanco',
        'albergue',
        'lugar_albergue',
        'sintomas_fiebre',
        'hospitalizado',
        'signo_sintoma',
        'vacuna_para_la_influenza',
        'fecha_vacunacion',
        'viajo_resiente',
        'centro_asistencia_covid',
        'centro_asistencia_pais',
        'centro_asistencia_ciudad',
        'nombre_centro_asistencia',
        'fecha_asistida',
        'contacto_con_animales',
        'contacto_persona',
        'tipo_contacto',
        'contacto_otro',
        'contacto_con_infectado',
        'dato_de_contacto',
        'toma_de_muestra',
        'laboratorio',
        'nro_planilla',
        'anho',
        'responsable_de_carga',
        'usuario_lugar'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Caso_positivo::class;
    }
}
