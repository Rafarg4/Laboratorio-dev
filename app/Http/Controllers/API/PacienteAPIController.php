<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePacienteAPIRequest;
use App\Http\Requests\API\UpdatePacienteAPIRequest;
use App\Models\Paciente;
use App\Repositories\PacienteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PersonaController
 * @package App\Http\Controllers\API
 */

class PacienteAPIController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $pacienteRepository;

    public function __construct(PacienteRepository $pacienteRepo)
    {
        $this->pacienteRepository = $pacienteRepo;
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
        $paciente = $this->pacienteRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($paciente->toArray(), 'Paciente visualizado correcatmente');
    }

    /**
     * Store a newly created Persona in storage.
     * POST /personas
     *
     * @param CreatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePacienteAPIRequest $request)
    {
        $input = $request->all();

        $paciente = $this->pacienteRepository->create($input);

        return $this->sendResponse($paciente->toArray(), 'Persona Guardado correcatmente');
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
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            return $this->sendError('Paciente no encontrado');
        }

        return $this->sendResponse($paciente->toArray(), 'Paciente visualizado correcatmente');
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
    public function update($id, UpdatePacienteAPIRequest $request)
    {
        $input = $request->all();

        /** @var Persona $persona */
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            return $this->sendError('Paciente no encontrado');
        }

        $paciente = $this->pacienteRepository->update($input, $id);

        return $this->sendResponse($paciente->toArray(), 'Paciente actualizado correcatmente');
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
        $paciente = $this->pacienteRepository->find($id);
        if (empty($paciente)) {return $this->sendError('Paciente no encontrado');
        }

        $paciente->delete();
        return $this->sendSuccess('Paciente eliminado correcatmente');
    }
}
