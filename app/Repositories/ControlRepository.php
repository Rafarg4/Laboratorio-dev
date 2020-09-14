<?php

namespace App\Repositories;

use App\Models\Control;
use App\Repositories\BaseRepository;

/**
 * Class ControlRepository
 * @package App\Repositories
 * @version September 13, 2020, 9:03 pm -04
*/

class ControlRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paciente_id',
        'fecha_analisis',
        'estado_paciente',
        'recomendacion',
        'fecha_alta'
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
        return Control::class;
    }
}
