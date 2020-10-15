<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipo_prueba
 * @package App\Models
 * @version August 29, 2020, 9:12 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 */
class Tipo_prueba extends Model
{
    use SoftDeletes;

    public $table = 'tipo_pruebas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];
     public function paciente (){
        return $this-> hasMany('App\Models\Paciente');
    }
    
}
