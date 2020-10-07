<?php

namespace App\Repositories;

use App\Models\Caso_positivo;
use App\Repositories\BaseRepository;

/**
 * Class Caso_positivoRepository
 * @package App\Repositories
 * @version October 3, 2020, 7:13 pm -04
*/

class Caso_positivoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_region',
        'region',
        'codigo_distrito',
        'distrito',
        'fecha_notificacion',
        'fecha_notificacion_se',
        'medico',
        'medida_edad',
        'grupo_etareo',
        'residente',
        'hospedaje',
        'telefono_verificado',
        'codigo_departamento',
        'departamento',
        'zona',
        'personal_blanco',
        'profesion',
        'profesion_otro',
        'albergue',
        'lugar_albergue',
        'fiebre',
        'tipo_fiebre',
        'grado',
        'inicio_fiebre_sintoma',
        'inicio_fiebre_sintoma_se',
        'fecha_primera_consulta',
        'fecha_primera_consulta_se',
        'asistencia_respiratoria_mecanica',
        'hospitalizado',
        'fecha_hospitalizacion',
        'fecha_hospitalizacion_se',
        'lugar_hospitalizacion',
        'lugar_hospitalizacion_se',
        'fecha_alta',
        'fecha_alta_se',
        'uci',
        'fecha_ingreso_uci',
        'fecha_ingreso_uci_se',
        'lugar_uci',
        'lugar_uci_otro',
        'fecha_egreso_uci',
        'fecha_egreso_uci_se',
        'fallecido',
        'fecha_fallecido',
        'fecha_fallecido_se',
        'lugar_fallecido_residencia',
        'lugar_fallecido_otro',
        'clasificacion_final_obito',
        'cierre_obito_fecha',
        'responsable_cierre_ovito',
        'signos_sintomas',
        'fiebre_referida',
        'temperatura_mayor',
        'coriza_rinorrea',
        'congestion_nasal',
        'tos',
        'dificultad_de_respirar',
        'irritabilidad_confusion',
        'dolor_de_cabeza',
        'inyeccion_cojuntival',
        'disnea_taquipnea',
        'nauseas_vomitos',
        'dolor_abdominal',
        'convulsiones',
        'auscultacion_pulmonar_anormal',
        'dolor_de_oido',
        'dolor_de_garganta',
        'mialigas',
        'postracion',
        'diarrea',
        'sintomas_otro',
        'factor_de_riesgo',
        'cardiopatia_cronica',
        'asma',
        'enfermedad_pulmonar_cronica',
        'diabetes',
        'enfermedad_hepatica_cornica',
        'enfermedad_tratamiento',
        'enfe_neurologica_cronica',
        'sindrome_de_down',
        'desnutricion',
        'obesidad',
        'masa_corporal',
        'masa_corporal_mayor',
        'otro',
        'embarazada',
        'trimestre_embarazo',
        'puerpera',
        'vacuna_influenza',
        'fecha_vacunacion',
        'fecha_vacunaciondos',
        'viajo_reside',
        'lugar',
        'fecha_de_ingreso_pai',
        'centro_asistencial_con_covid',
        'centro_asistencial_pais',
        'centro_asistencial_ciudad',
        'nombre_centro_asistencial',
        'fecha_en_que_asistio',
        'contacto_con_animales',
        'animal',
        'animal_otro',
        'contacto_con_personas',
        'tipo_de_contacto',
        'contacto_otro',
        'contacto_con_infectado',
        'nombre_contacto',
        'documento_contacto',
        'pai_contacto',
        'ciudad_contacto',
        'toma_de_muestra',
        'nro_muestra',
        'lugar_toma_muestra',
        'otro_lugar_muestra',
        'muestra',
        'fecha_toma',
        'hora_toma',
        'fecha_envio',
        'nro_laboratorio',
        'laboratorio',
        'otro_laboratorio',
        'tecnica',
        'otra_tecnica',
        'clasificacion_final',
        'resultado',
        'otro_agente',
        'observacion_laboratorio',
        'nro_plantilla_dato',
        'clasi_final_sarc_cov',
        'fecha_cierre_sars_cov',
        'responsable_cierre_sarscov',
        'recuperado',
        'anho',
        'responsble_carga',
        'usuario_lugar',
        'paciente_id',
        'prueba_id',
        'laboratorio_id'
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
