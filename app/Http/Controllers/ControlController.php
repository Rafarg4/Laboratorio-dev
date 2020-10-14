<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateControlRequest;
use App\Http\Requests\UpdateControlRequest;
use App\Repositories\ControlRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Paciente;
use Flash;
use Response;

class ControlController extends AppBaseController
{
    /** @var  ControlRepository */
    private $controlRepository;

    public function __construct(ControlRepository $controlRepo)
    {
        $this->controlRepository = $controlRepo;
    }

    /**
     * Display a listing of the Control.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $controls = $this->controlRepository->all();

        return view('controls.index')
            ->with('controls', $controls);
    }

    /**
     * Show the form for creating a new Control.
     *
     * @return Response
     */
    public function create()
    {
         //Consulta de el listado de pacientes con un especificacion de solo los pacientes positivos con una clausula where y usando el pluck para debolver solo el nombre.
        $pacientes= Paciente::where('resultado','=','Positivo')->pluck('nombre_apellido','id');
        return view('controls.create',compact(
            'pacientes'));
    }

    /**
     * Store a newly created Control in storage.
     *
     * @param CreateControlRequest $request
     *
     * @return Response
     */
    public function store(CreateControlRequest $request)
    {
        $input = $request->all();

        $control = $this->controlRepository->create($input);

        Flash::success('Control Guardado correctamente.');

        return redirect(route('controls.index'));
    }

    /**
     * Display the specified Control.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $control = $this->controlRepository->find($id);

        if (empty($control)) {
            Flash::error('Control no encontrado');

            return redirect(route('controls.index'));
        }

        return view('controls.show')->with('control', $control);
    }

    /**
     * Show the form for editing the specified Control.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $control = $this->controlRepository->find($id);
        $pacientes = Paciente::pluck('nombre_apellido','id');

        if (empty($control)) {
            Flash::error('Control no encontrado');

            return redirect(route('controls.index'));
        }

        return view('controls.edit', compact('control', 'pacientes'));
    }

    /**
     * Update the specified Control in storage.
     *
     * @param int $id
     * @param UpdateControlRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateControlRequest $request)
    {
        $control = $this->controlRepository->find($id);

        if (empty($control)) {
            Flash::error('Control no encontrado');

            return redirect(route('controls.index'));
        }

        $control = $this->controlRepository->update($request->all(), $id);

        Flash::success('Control actualizado correctamente.');

        return redirect(route('controls.index'));
    }

    /**
     * Remove the specified Control from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $control = $this->controlRepository->find($id);

        if (empty($control)) {
            Flash::error('Control no encontrado');

            return redirect(route('controls.index'));
        }

        $this->controlRepository->delete($id);

        Flash::success('Control eliminado correctamente.');

        return redirect(route('controls.index'));
    }
}
