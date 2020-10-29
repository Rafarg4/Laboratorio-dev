<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateControlAPIRequest;
use App\Http\Requests\API\UpdateControlAPIRequest;
use App\Models\Control;
use App\Repositories\ControlRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PersonaController
 * @package App\Http\Controllers\API
 */

class ControlAPIController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $pacienteRepository;

    public function __construct(ControlRepository $controlRepo)
    {
        $this->controlRepository = $controlRepo;
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
        $control = $this->controlRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($control->toArray(), 'Control visualizado correcatmente');
    }

    /**
     * Store a newly created Persona in storage.
     * POST /personas
     *
     * @param CreatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateControlAPIRequest $request)
    {
        $input = $request->all();

        $control = $this->controlRepository->create($input);

        return $this->sendResponse($control->toArray(), 'Control Guardado correcatmente');
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
        $control = $this->controlRepository->find($id);

        if (empty($control)) {
            return $this->sendError('Control no encontrado');
        }

        return $this->sendResponse($control->toArray(), 'Control visualizado correcatmente');
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
    public function update($id, UpdateControlAPIRequest $request)
    {
        $input = $request->all();

        /** @var Persona $persona */
        $control = $this->controlRepository->find($id);

        if (empty($control)) {
            return $this->sendError('Control no encontrado');
        }

        $control = $this->controlRepository->update($input, $id);

        return $this->sendResponse($control->toArray(), 'Control actualizado correcatmente');
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
        $control = $this->controlRepository->find($id);
        if (empty($control)) {return $this->sendError('Control no encontrado');
        }

        $control->delete();
        return $this->sendSuccess('Control eliminado correcatmente');
    }
}
