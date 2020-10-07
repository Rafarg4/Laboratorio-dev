<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Caso_positivo
 * @package App\Models
 * @version October 3, 2020, 7:13 pm -04
 *
 * @property integer $codigo_region
 * @property string $region
 * @property integer $codigo_distrito
 * @property string $distrito
 * @property string $fecha_notificacion
 * @property string $fecha_notificacion_se
 * @property string $medico
 * @property string $medida_edad
 * @property string $grupo_etareo
 * @property string $residente
 * @property string $hospedaje
 * @property integer $telefono_verificado
 * @property integer $codigo_departamento
 * @property string $departamento
 * @property string $zona
 * @property string $personal_blanco
 * @property string $profesion
 * @property string $profesion_otro
 * @property string $albergue
 * @property string $lugar_albergue
 * @property string $fiebre
 * @property string $tipo_fiebre
 * @property integer $grado
 * @property string $inicio_fiebre_sintoma
 * @property string $inicio_fiebre_sintoma_se
 * @property string $fecha_primera_consulta
 * @property string $fecha_primera_consulta_se
 * @property string $asistencia_respiratoria_mecanica
 * @property string $hospitalizado
 * @property string $fecha_hospitalizacion
 * @property string $fecha_hospitalizacion_se
 * @property string $lugar_hospitalizacion
 * @property string $lugar_hospitalizacion_se
 * @property string $fecha_alta
 * @property string $fecha_alta_se
 * @property string $uci
 * @property string $fecha_ingreso_uci
 * @property string $fecha_ingreso_uci_se
 * @property string $lugar_uci
 * @property string $lugar_uci_otro
 * @property string $fecha_egreso_uci
 * @property string $fecha_egreso_uci_se
 * @property string $fallecido
 * @property string $fecha_fallecido
 * @property string $fecha_fallecido_se
 * @property string $lugar_fallecido_residencia
 * @property string $lugar_fallecido_otro
 * @property string $clasificacion_final_obito
 * @property string $cierre_obito_fecha
 * @property string $responsable_cierre_ovito
 * @property string $signos_sintomas
 * @property string $fiebre_referida
 * @property string $temperatura_mayor
 * @property string $coriza_rinorrea
 * @property string $congestion_nasal
 * @property string $tos
 * @property string $dificultad_de_respirar
 * @property string $irritabilidad_confusion
 * @property string $dolor_de_cabeza
 * @property string $inyeccion_cojuntival
 * @property string $disnea_taquipnea
 * @property string $nauseas_vomitos
 * @property string $dolor_abdominal
 * @property string $convulsiones
 * @property string $auscultacion_pulmonar_anormal
 * @property string $dolor_de_oido
 * @property string $dolor_de_garganta
 * @property string $mialigas
 * @property string $postracion
 * @property string $diarrea
 * @property string $sintomas_otro
 * @property string $factor_de_riesgo
 * @property string $cardiopatia_cronica
 * @property string $asma
 * @property string $enfermedad_pulmonar_cronica
 * @property string $diabetes
 * @property string $enfermedad_hepatica_cornica
 * @property string $enfermedad_tratamiento
 * @property string $enfe_neurologica_cronica
 * @property string $sindrome_de_down
 * @property string $desnutricion
 * @property string $obesidad
 * @property string $masa_corporal
 * @property string $masa_corporal_mayor
 * @property string $otro
 * @property string $embarazada
 * @property string $trimestre_embarazo
 * @property string $puerpera
 * @property string $vacuna_influenza
 * @property string $fecha_vacunacion
 * @property string $fecha_vacunacion
 * @property string $viajo_reside
 * @property string $lugar
 * @property string $fecha_de_ingreso_pai
 * @property string $centro_asistencial_con_covid
 * @property string $centro_asistencial_pais
 * @property string $centro_asistencial_ciudad
 * @property string $nombre_centro_asistencial
 * @property string $fecha_en_que_asistio
 * @property string $contacto_con_animales
 * @property string $animal
 * @property string $animal_otro
 * @property string $contacto_con_personas
 * @property string $tipo_de_contacto
 * @property string $contacto_otro
 * @property string $contacto_con_infectado
 * @property string $nombre_contacto
 * @property integer $documento_contacto
 * @property string $pai_contacto
 * @property string $ciudad_contacto
 * @property string $toma_de_muestra
 * @property integer $nro_muestra
 * @property string $lugar_toma_muestra
 * @property string $otro_lugar_muestra
 * @property string $muestra
 * @property string $fecha_toma
 * @property string $hora_toma
 * @property string $fecha_envio
 * @property integer $nro_laboratorio
 * @property string $laboratorio
 * @property string $otro_laboratorio
 * @property string $tecnica
 * @property string $otra_tecnica
 * @property string $clasificacion_final
 * @property string $resultado
 * @property string $otro_agente
 * @property string $observacion_laboratorio
 * @property integer $nro_plantilla_dato
 * @property string $clasi_final_sarc_cov
 * @property string $fecha_cierre_sars_cov
 * @property string $responsable_cierre_sarscov
 * @property string $recuperado
 * @property string $anho
 * @property string $responsble_carga
 * @property string $usuario_lugar
 * @property integer $paciente_id
 * @property integer $prueba_id
 * @property integer $laboratorio_id
 */
class Caso_positivo extends Model
{
    use SoftDeletes;

    public $table = 'caso_positivos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_region' => 'integer',
        'region' => 'string',
        'codigo_distrito' => 'integer',
        'distrito' => 'string',
        'fecha_notificacion' => 'date',
        'fecha_notificacion_se' => 'date',
        'medico' => 'string',
        'medida_edad' => 'string',
        'grupo_etareo' => 'string',
        'residente' => 'string',
        'hospedaje' => 'string',
        'telefono_verificado' => 'integer',
        'codigo_departamento' => 'integer',
        'departamento' => 'string',
        'zona' => 'string',
        'personal_blanco' => 'string',
        'profesion' => 'string',
        'profesion_otro' => 'string',
        'albergue' => 'string',
        'lugar_albergue' => 'string',
        'fiebre' => 'string',
        'tipo_fiebre' => 'string',
        'grado' => 'integer',
        'inicio_fiebre_sintoma' => 'date',
        'inicio_fiebre_sintoma_se' => 'date',
        'fecha_primera_consulta' => 'date',
        'fecha_primera_consulta_se' => 'date',
        'asistencia_respiratoria_mecanica' => 'string',
        'hospitalizado' => 'string',
        'fecha_hospitalizacion' => 'date',
        'fecha_hospitalizacion_se' => 'date',
        'lugar_hospitalizacion' => 'string',
        'lugar_hospitalizacion_se' => 'string',
        'fecha_alta' => 'date',
        'fecha_alta_se' => 'date',
        'uci' => 'string',
        'fecha_ingreso_uci' => 'date',
        'fecha_ingreso_uci_se' => 'date',
        'lugar_uci' => 'string',
        'lugar_uci_otro' => 'string',
        'fecha_egreso_uci' => 'date',
        'fecha_egreso_uci_se' => 'date',
        'fallecido' => 'string',
        'fecha_fallecido' => 'date',
        'fecha_fallecido_se' => 'date',
        'lugar_fallecido_residencia' => 'string',
        'lugar_fallecido_otro' => 'string',
        'clasificacion_final_obito' => 'string',
        'cierre_obito_fecha' => 'date',
        'responsable_cierre_ovito' => 'string',
        'signos_sintomas' => 'string',
        'fiebre_referida' => 'string',
        'temperatura_mayor' => 'string',
        'coriza_rinorrea' => 'string',
        'congestion_nasal' => 'string',
        'tos' => 'string',
        'dificultad_de_respirar' => 'string',
        'irritabilidad_confusion' => 'string',
        'dolor_de_cabeza' => 'string',
        'inyeccion_cojuntival' => 'string',
        'disnea_taquipnea' => 'string',
        'nauseas_vomitos' => 'string',
        'dolor_abdominal' => 'string',
        'convulsiones' => 'string',
        'auscultacion_pulmonar_anormal' => 'string',
        'dolor_de_oido' => 'string',
        'dolor_de_garganta' => 'string',
        'mialigas' => 'string',
        'postracion' => 'string',
        'diarrea' => 'string',
        'sintomas_otro' => 'string',
        'factor_de_riesgo' => 'string',
        'cardiopatia_cronica' => 'string',
        'asma' => 'string',
        'enfermedad_pulmonar_cronica' => 'string',
        'diabetes' => 'string',
        'enfermedad_hepatica_cornica' => 'string',
        'enfermedad_tratamiento' => 'string',
        'enfe_neurologica_cronica' => 'string',
        'sindrome_de_down' => 'string',
        'desnutricion' => 'string',
        'obesidad' => 'string',
        'masa_corporal' => 'string',
        'masa_corporal_mayor' => 'string',
        'otro' => 'string',
        'embarazada' => 'string',
        'trimestre_embarazo' => 'string',
        'puerpera' => 'string',
        'vacuna_influenza' => 'string',
        'fecha_vacunacion' => 'date',
        'fecha_vacunaciondos' => 'date',
        'viajo_reside' => 'string',
        'lugar' => 'string',
        'fecha_de_ingreso_pai' => 'date',
        'centro_asistencial_con_covid' => 'string',
        'centro_asistencial_pais' => 'string',
        'centro_asistencial_ciudad' => 'string',
        'nombre_centro_asistencial' => 'string',
        'fecha_en_que_asistio' => 'date',
        'contacto_con_animales' => 'string',
        'animal' => 'string',
        'animal_otro' => 'string',
        'contacto_con_personas' => 'string',
        'tipo_de_contacto' => 'string',
        'contacto_otro' => 'string',
        'contacto_con_infectado' => 'string',
        'nombre_contacto' => 'string',
        'documento_contacto' => 'integer',
        'pai_contacto' => 'string',
        'ciudad_contacto' => 'string',
        'toma_de_muestra' => 'string',
        'nro_muestra' => 'integer',
        'lugar_toma_muestra' => 'string',
        'otro_lugar_muestra' => 'string',
        'muestra' => 'string',
        'fecha_toma' => 'date',
        'hora_toma' => 'date',
        'fecha_envio' => 'date',
        'nro_laboratorio' => 'integer',
        'laboratorio' => 'string',
        'otro_laboratorio' => 'string',
        'tecnica' => 'string',
        'otra_tecnica' => 'string',
        'clasificacion_final' => 'string',
        'resultado' => 'string',
        'otro_agente' => 'string',
        'observacion_laboratorio' => 'string',
        'nro_plantilla_dato' => 'integer',
        'clasi_final_sarc_cov' => 'string',
        'fecha_cierre_sars_cov' => 'date',
        'responsable_cierre_sarscov' => 'string',
        'recuperado' => 'string',
        'anho' => 'date',
        'responsble_carga' => 'string',
        'usuario_lugar' => 'string',
        'paciente_id' => 'integer',
        'prueba_id' => 'integer',
        'laboratorio_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_region' => 'required',
        'region' => 'required',
        'codigo_distrito' => 'required',
        'distrito' => 'required',
        'fecha_notificacion' => 'required',
        'fecha_notificacion_se' => 'required',
        'medico' => 'required',
        'medida_edad' => 'required',
        'grupo_etareo' => 'required',
        'residente' => 'required',
        'hospedaje' => 'required',
        'telefono_verificado' => 'required',
        'codigo_departamento' => 'required',
        'departamento' => 'required',
        'zona' => 'required',
        'personal_blanco' => 'required',
        'profesion' => 'required',
        'profesion_otro' => 'required',
        'albergue' => 'required',
        'lugar_albergue' => 'required',
        'fiebre' => 'required',
        'tipo_fiebre' => 'required',
        'grado' => 'required',
        'inicio_fiebre_sintoma' => 'required',
        'inicio_fiebre_sintoma_se' => 'required',
        'fecha_primera_consulta' => 'required',
        'fecha_primera_consulta_se' => 'required',
        'asistencia_respiratoria_mecanica' => 'required',
        'hospitalizado' => 'required',
        'fecha_hospitalizacion' => 'required',
        'fecha_hospitalizacion_se' => 'required',
        'lugar_hospitalizacion' => 'required',
        'lugar_hospitalizacion_se' => 'required',
        'fecha_alta' => 'required',
        'fecha_alta_se' => 'required',
        'uci' => 'required',
        'fecha_ingreso_uci' => 'required',
        'fecha_ingreso_uci_se' => 'required',
        'lugar_uci' => 'required',
        'lugar_uci_otro' => 'required',
        'fecha_egreso_uci' => 'required',
        'fecha_egreso_uci_se' => 'required',
        'fallecido' => 'required',
        'fecha_fallecido' => 'required',
        'fecha_fallecido_se' => 'required',
        'lugar_fallecido_residencia' => 'required',
        'lugar_fallecido_otro' => 'required',
        'clasificacion_final_obito' => 'required',
        'cierre_obito_fecha' => 'required',
        'responsable_cierre_ovito' => 'required',
        'signos_sintomas' => 'required',
        'fiebre_referida' => 'required',
        'temperatura_mayor' => 'required',
        'coriza_rinorrea' => 'required',
        'congestion_nasal' => 'required',
        'tos' => 'required',
        'dificultad_de_respirar' => 'required',
        'irritabilidad_confusion' => 'required',
        'dolor_de_cabeza' => 'required',
        'inyeccion_cojuntival' => 'required',
        'disnea_taquipnea' => 'required',
        'nauseas_vomitos' => 'required',
        'dolor_abdominal' => 'required',
        'convulsiones' => 'required',
        'auscultacion_pulmonar_anormal' => 'required',
        'dolor_de_oido' => 'required',
        'dolor_de_garganta' => 'required',
        'mialigas' => 'required',
        'postracion' => 'required',
        'diarrea' => 'required',
        'sintomas_otro' => 'required',
        'factor_de_riesgo' => 'required',
        'cardiopatia_cronica' => 'required',
        'asma' => 'required',
        'enfermedad_pulmonar_cronica' => 'required',
        'diabetes' => 'required',
        'enfermedad_hepatica_cornica' => 'required',
        'enfermedad_tratamiento' => 'required',
        'enfe_neurologica_cronica' => 'required',
        'sindrome_de_down' => 'required',
        'desnutricion' => 'required',
        'obesidad' => 'required',
        'masa_corporal' => 'required',
        'masa_corporal_mayor' => 'required',
        'otro' => 'required',
        'embarazada' => 'required',
        'trimestre_embarazo' => 'required',
        'puerpera' => 'required',
        'vacuna_influenza' => 'required',
        'fecha_vacunacion' => 'required',
        'fecha_vacunacion' => 'required',
        'viajo_reside' => 'required',
        'lugar' => 'required',
        'fecha_de_ingreso_pai' => 'required',
        'centro_asistencial_con_covid' => 'required',
        'centro_asistencial_pais' => 'required',
        'centro_asistencial_ciudad' => 'required',
        'nombre_centro_asistencial' => 'required',
        'fecha_en_que_asistio' => 'required',
        'contacto_con_animales' => 'required',
        'animal' => 'required',
        'animal_otro' => 'required',
        'contacto_con_personas' => 'required',
        'tipo_de_contacto' => 'required',
        'contacto_otro' => 'required',
        'contacto_con_infectado' => 'required',
        'nombre_contacto' => 'required',
        'documento_contacto' => 'required',
        'pai_contacto' => 'required',
        'ciudad_contacto' => 'required',
        'toma_de_muestra' => 'required',
        'nro_muestra' => 'required',
        'lugar_toma_muestra' => 'required',
        'otro_lugar_muestra' => 'required',
        'muestra' => 'required',
        'fecha_toma' => 'required',
        'hora_toma' => 'required',
        'fecha_envio' => 'required',
        'nro_laboratorio' => 'required',
        'laboratorio' => 'required',
        'otro_laboratorio' => 'required',
        'tecnica' => 'required',
        'otra_tecnica' => 'required',
        'clasificacion_final' => 'required',
        'resultado' => 'required',
        'otro_agente' => 'required',
        'observacion_laboratorio' => 'required',
        'nro_plantilla_dato' => 'required',
        'clasi_final_sarc_cov' => 'required',
        'fecha_cierre_sars_cov' => 'required',
        'responsable_cierre_sarscov' => 'required',
        'recuperado' => 'required',
        'anho' => 'required',
        'responsble_carga' => 'required',
        'usuario_lugar' => 'required',
        'paciente_id' => 'required',
        'prueba_id' => 'required',
        'laboratorio_id' => 'required'
    ];

    
}
