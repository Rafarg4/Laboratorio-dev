<?php

namespace App\Repositories;

use App\Models\Tipo_prueba;
use App\Repositories\BaseRepository;

/**
 * Class Tipo_pruebaRepository
 * @package App\Repositories
 * @version August 29, 2020, 9:12 pm UTC
*/

class Tipo_pruebaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return Tipo_prueba::class;
    }
}
