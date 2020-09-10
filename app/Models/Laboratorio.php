<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Laboratorio
 * @package App\Models
 * @version September 9, 2020, 9:29 pm -04
 *
 * @property string $nombre_laboratorio
 * @property string $descripcion
 * @property string $direccion
 * @property integer $telefono
 * @property string $representante
 */
class Laboratorio extends Model
{
    use SoftDeletes;

    public $table = 'laboratorios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_laboratorio',
        'descripcion',
        'direccion',
        'telefono',
        'representante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_laboratorio' => 'string',
        'descripcion' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer',
        'representante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_laboratorio' => 'required',
        'descripcion' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'representante' => 'required'
    ];

    
}
