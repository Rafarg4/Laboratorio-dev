<?php

namespace App\Repositories;

use App\Models\Laboratorio;
use App\Repositories\BaseRepository;

/**
 * Class LaboratorioRepository
 * @package App\Repositories
 * @version September 9, 2020, 7:49 pm -04
*/

class LaboratorioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_laboratorio',
        'descripción',
        'direccion',
        'telefono',
        'representante'
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
        return Laboratorio::class;
    }
}
