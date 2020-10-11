<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version September 5, 2020, 4:05 pm -04
 *
 * @property string $nombre_apellido
 * @property string $genero
 * @property string $fechanac
 * @property integer $edad
 * @property integer $ci
 * @property string $barrio
 * @property integer $telefono
 * @property string $grupo_sanguineo
 * @property string $enfermedad_referencial
 */
class Paciente extends Model
{
    use SoftDeletes;

    public $table = 'pacientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_apellido',
        'genero',
        'fechanac',
        'edad',
        'ci',
        'barrio',
        'telefono',
        'grupo_sanguineo',
        'enfermedad_referencial',
        'latitud', 
        'longitud',
        'email',
        'resultado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_apellido' => 'string',
        'genero' => 'string',
        'fechanac' => 'string',
        'edad' => 'integer',
        'ci' => 'integer',
        'barrio' => 'string',
        'telefono' => 'integer',
        'grupo_sanguineo' => 'string',
        'enfermedad_referencial' => 'string',
        'latitud' => 'string',
        'longitud' => 'string',
        'email' => 'string',
        'resultado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_apellido' => 'required',
        'genero' => 'required',
        'fechanac' => 'required',
        'edad' => 'required',
        'ci' => 'required|max:10',
        'barrio' => 'required',
        'telefono' => 'required|max:10',
        'grupo_sanguineo' => 'required',
        'enfermedad_referencial' => 'required',
        'latitud' => 'required',
        'longitud' => 'required',
        'email' => 'required',
        'resultado' => 'required'
    ];

    
    public function control (){
     return $this-> hasMany('App\Models\Control');

    }
     public function caso_positivo (){
     return $this-> hasMany('App\Models\Caso_positivo');

    }
}
