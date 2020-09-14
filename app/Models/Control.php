<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Control
 * @package App\Models
 * @version September 13, 2020, 9:03 pm -04
 *
 * @property integer $paciente_id
 * @property string $fecha_analisis
 * @property string $estado_paciente
 * @property string $recomendacion
 * @property string $fecha_alta
 */
class Control extends Model
{
    use SoftDeletes;

    public $table = 'controls';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'paciente_id',
        'fecha_analisis',
        'estado_paciente',
        'recomendacion',
        'fecha_alta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paciente_id' => 'integer',
        'fecha_analisis' => 'string',
        'estado_paciente' => 'string',
        'recomendacion' => 'string',
        'fecha_alta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente_id' => 'required',
        'fecha_analisis' => 'required',
        'estado_paciente' => 'required',
        'recomendacion' => 'required',
        'fecha_alta' => 'required'
    ];

 public function paciente (){
        return $this-> belongsTo('App\Models\Paciente');
    }
    
}
