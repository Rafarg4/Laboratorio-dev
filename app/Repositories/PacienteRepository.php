<?php

namespace App\Repositories;

use App\Models\Paciente;
use App\Repositories\BaseRepository;

/**
 * Class PacienteRepository
 * @package App\Repositories
 * @version September 5, 2020, 4:05 pm -04
*/

class PacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_prueba_id',
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
        'resultado',
        'usuario'
        
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
        return Paciente::class;
    }
}
