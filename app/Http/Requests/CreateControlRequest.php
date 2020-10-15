<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Control;
use Illuminate\validation\Rule;
class CreateControlRequest extends FormRequest
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
  public function rules ()
    {
        return [
        'paciente_id' => [
        'required',
        Rule::unique('controls')->ignore( $this->route('control'))
    ],
        'fecha_analisis' => 'required',
        'estado_paciente' => 'required',
        'recomendacion' => 'required',
        'fecha_alta' => 'required',
    ];
 } 
}