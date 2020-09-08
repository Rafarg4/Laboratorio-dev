<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_pruebaRequest;
use App\Http\Requests\UpdateTipo_pruebaRequest;
use App\Repositories\Tipo_pruebaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_pruebaController extends AppBaseController
{
    /** @var  Tipo_pruebaRepository */
    private $tipoPruebaRepository;

    public function __construct(Tipo_pruebaRepository $tipoPruebaRepo)
    {
        $this->tipoPruebaRepository = $tipoPruebaRepo;
    }

    /**
     * Display a listing of the Tipo_prueba.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoPruebas = $this->tipoPruebaRepository->all();

        return view('tipo_pruebas.index')
            ->with('tipoPruebas', $tipoPruebas);
    }

    /**
     * Show the form for creating a new Tipo_prueba.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_pruebas.create');
    }

    /**
     * Store a newly created Tipo_prueba in storage.
     *
     * @param CreateTipo_pruebaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_pruebaRequest $request)
    {
        $input = $request->all();

        $tipoPrueba = $this->tipoPruebaRepository->create($input);

        Flash::success('Tipo Prueba saved successfully.');

        return redirect(route('tipoPruebas.index'));
    }

    /**
     * Display the specified Tipo_prueba.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoPrueba = $this->tipoPruebaRepository->find($id);

        if (empty($tipoPrueba)) {
            Flash::error('Tipo Prueba not found');

            return redirect(route('tipoPruebas.index'));
        }

        return view('tipo_pruebas.show')->with('tipoPrueba', $tipoPrueba);
    }

    /**
     * Show the form for editing the specified Tipo_prueba.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoPrueba = $this->tipoPruebaRepository->find($id);

        if (empty($tipoPrueba)) {
            Flash::error('Tipo Prueba not found');

            return redirect(route('tipoPruebas.index'));
        }

        return view('tipo_pruebas.edit')->with('tipoPrueba', $tipoPrueba);
    }

    /**
     * Update the specified Tipo_prueba in storage.
     *
     * @param int $id
     * @param UpdateTipo_pruebaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_pruebaRequest $request)
    {
        $tipoPrueba = $this->tipoPruebaRepository->find($id);

        if (empty($tipoPrueba)) {
            Flash::error('Tipo Prueba not found');

            return redirect(route('tipoPruebas.index'));
        }

        $tipoPrueba = $this->tipoPruebaRepository->update($request->all(), $id);

        Flash::success('Tipo Prueba updated successfully.');

        return redirect(route('tipoPruebas.index'));
    }

    /**
     * Remove the specified Tipo_prueba from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoPrueba = $this->tipoPruebaRepository->find($id);

        if (empty($tipoPrueba)) {
            Flash::error('Tipo Prueba not found');

            return redirect(route('tipoPruebas.index'));
        }

        $this->tipoPruebaRepository->delete($id);

        Flash::success('Tipo Prueba deleted successfully.');

        return redirect(route('tipoPruebas.index'));
    }
}
