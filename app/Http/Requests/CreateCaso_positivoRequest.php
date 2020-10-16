<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Caso_positivo;
use Illuminate\validation\Rule;
class CreateCaso_positivoRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'paciente_id' => [
        'required',
        Rule::unique('caso_positivos')->ignore( $this->route('caso_positivo'))
    ],
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
    }
}
