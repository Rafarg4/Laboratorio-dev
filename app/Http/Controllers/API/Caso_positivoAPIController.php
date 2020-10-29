<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCaso_positivoAPIRequest;
use App\Http\Requests\API\UpdateCaso_positivoAPIRequest;
use App\Models\Caso_positivo;
use App\Repositories\Caso_positivoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PersonaController
 * @package App\Http\Controllers\API
 */

class Caso_positivoAPIController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $caso_positivoRepository;

    public function __construct(Caso_positivoRepository $caso_positivoRepo)
    {
        $this->caso_positivoRepository = $caso_positivoRepo;
    }

    /**
     * Display a listing of the Persona.
     * GET|HEAD /personas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $caso_positivo = $this->caso_positivoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($caso_positivo->toArray(), 'caso_positivo visualizado correcatmente');
    }

    /**
     * Store a newly created Persona in storage.
     * POST /personas
     *
     * @param CreatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function store(Caso_positivoAPIRequest $request)
    {
        $input = $request->all();

        $caso_positivo = $this->caso_positivoRepository->create($input);

        return $this->sendResponse($caso_positivo->toArray(), 'caso_positivo Guardado correcatmente');
    }

    /**
     * Display the specified Persona.
     * GET|HEAD /personas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Persona $persona */
        $caso_positivo = $this->caso_positivoRepository->find($id);

        if (empty($caso_positivo)) {
            return $this->sendError('caso_positivo no encontrado');
        }

        return $this->sendResponse($caso_positivo->toArray(), 'Caso Positivo visualizado correcatmente');
    }

    /**
     * Update the specified Persona in storage.
     * PUT/PATCH /personas/{id}
     *
     * @param int $id
     * @param UpdatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaso_positivoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Persona $persona */
        $caso_positivo = $this->caso_positivoRepository->find($id);

        if (empty($caso_positivo)) {
            return $this->sendError('caso_positivo no encontrado');
        }

        $caso_positivo = $this->caso_positivoRepository->update($input, $id);

        return $this->sendResponse($caso_positivo->toArray(), 'caso_positivo actualizado correcatmente');
    }

    /**
     * Remove the specified Persona from storage.
     * DELETE /personas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Persona $persona */
        $caso_positivo = $this->caso_positivoRepository->find($id);
        if (empty($caso_positivo)) {return $this->sendError('caso_positivo no encontrado');
        }

        $caso_positivo->delete();
        return $this->sendSuccess('caso_positivo eliminado correcatmente');
    }
}
