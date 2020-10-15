<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Caso_positivo
 * @package App\Models
 * @version October 10, 2020, 10:51 pm -03
 *
 * @property integer $paciente_id
 * @property integer $codigo
 * @property string $region
 * @property integer $codigo_distrito
 * @property string $distrito
 * @property string $fecha_notificacion
 * @property string $medico
 * @property integer $media_edad
 * @property string $residente
 * @property string $hospedaje
 * @property integer $telefono_verificado
 * @property integer $codigo_departamento
 * @property string $departamento
 * @property string $zona
 * @property string $personal_de_blanco
 * @property string $albergue
 * @property string $lugar_albergue
 * @property string $sintomas_fiebre
 * @property string $hospitalizado
 * @property string $signo_sintoma
 * @property string $vacuna_para_la_influenza
 * @property string $fecha_vacunacion
 * @property string $viajo_resiente
 * @property string $centro_asistencia_covid
 * @property string $centro_asistencia_pais
 * @property string $centro_asistencia_ciudad
 * @property string $nombre_centro_asistencia
 * @property string $fecha_asistida
 * @property string $contacto_con_animales
 * @property string $contacto_persona
 * @property string $tipo_contacto
 * @property string $contacto_otro
 * @property string $contacto_con_infectado
 * @property string $dato_de_contacto
 * @property string $toma_de_muestra
 * @property string $laboratorio
 * @property string $nro_planilla
 * @property string $anho
 * @property string $responsable_de_carga
 * @property string $usuario_lugar
 */
class Caso_positivo extends Model
{
    use SoftDeletes;

    public $table = 'caso_positivos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paciente_id' => 'integer',
        'codigo' => 'integer',
        'region' => 'string',
        'codigo_distrito' => 'integer',
        'distrito' => 'string',
        'fecha_notificacion' => 'string',
        'medico' => 'string',
        'media_edad' => 'integer',
        'residente' => 'string',
        'hospedaje' => 'string',
        'telefono_verificado' => 'integer',
        'codigo_departamento' => 'integer',
        'departamento' => 'string',
        'zona' => 'string',
        'personal_de_blanco' => 'string',
        'albergue' => 'string',
        'lugar_albergue' => 'string',
        'sintomas_fiebre' => 'string',
        'hospitalizado' => 'string',
        'signo_sintoma' => 'string',
        'vacuna_para_la_influenza' => 'string',
        'fecha_vacunacion' => 'string',
        'viajo_resiente' => 'string',
        'centro_asistencia_covid' => 'string',
        'centro_asistencia_pais' => 'string',
        'centro_asistencia_ciudad' => 'string',
        'nombre_centro_asistencia' => 'string',
        'fecha_asistida' => 'string',
        'contacto_con_animales' => 'string',
        'contacto_persona' => 'string',
        'tipo_contacto' => 'string',
        'contacto_otro' => 'string',
        'contacto_con_infectado' => 'string',
        'dato_de_contacto' => 'string',
        'toma_de_muestra' => 'string',
        'laboratorio' => 'string',
        'nro_planilla' => 'string',
        'anho' => 'string',
        'responsable_de_carga' => 'string',
        'usuario_lugar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente_id' => 'required',
        'codigo' => 'required',
        'region' => 'required',
        'codigo_distrito' => 'required',
        'distrito' => 'required',
        'fecha_notificacion' => 'required',
        'medico' => 'required',
        'media_edad' => 'required',
        'residente' => 'required',
        'hospedaje' => 'required',
        'telefono_verificado' => 'required',
        'codigo_departamento' => 'required',
        'departamento' => 'required',
        'zona' => 'required',
        'personal_de_blanco' => 'required',
        'albergue' => 'required',
        'lugar_albergue' => 'required',
        'sintomas_fiebre' => 'required',
        'hospitalizado' => 'required',
        'signo_sintoma' => 'required',
        'vacuna_para_la_influenza' => 'required',
        'fecha_vacunacion' => 'required',
        'viajo_resiente' => 'required',
        'centro_asistencia_covid' => 'required',
        'centro_asistencia_pais' => 'required',
        'centro_asistencia_ciudad' => 'required',
        'nombre_centro_asistencia' => 'required',
        'fecha_asistida' => 'required',
        'contacto_con_animales' => 'required',
        'contacto_persona' => 'required',
        'tipo_contacto' => 'required',
        'contacto_otro' => 'required',
        'contacto_con_infectado' => 'required',
        'dato_de_contacto' => 'required',
        'toma_de_muestra' => 'required',
        'laboratorio' => 'required',
        'nro_planilla' => 'required',
        'anho' => 'required',
        'responsable_de_carga' => 'required',
        'usuario_lugar' => 'required'
    ];

    public function paciente (){
        return $this-> belongsTo('App\Models\Paciente');
    }
    public function control (){
     return $this-> hasMany('App\Models\Control');

    }
}
