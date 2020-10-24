<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaso_positivoRequest;
use App\Http\Requests\UpdateCaso_positivoRequest;
use App\Repositories\Caso_positivoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;
use Response;
use App\Models\Paciente;

class Caso_positivoController extends AppBaseController
{
    /** @var  Caso_positivoRepository */
    private $casoPositivoRepository;

    public function __construct(Caso_positivoRepository $casoPositivoRepo)
    {
        $this->casoPositivoRepository = $casoPositivoRepo;
    }

    /**
     * Display a listing of the Caso_positivo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $casoPositivos = $this->casoPositivoRepository->all();

        return view('caso_positivos.index')
            ->with('casoPositivos', $casoPositivos);
    }

    /**
     * Show the form for creating a new Caso_positivo.
     *
     * @return Response
     */
    public function create()
    {
        //Consulta de el listado de pacientes con un especificacion de solo los pacientes positivos con una clausula where y usando el pluck para debolver solo el nombre.
        $pacientes= Paciente::where('resultado','=','Positivo')->pluck('nombre_apellido','id');
        return view('caso_positivos.create',compact(
            'pacientes'));
    }

    /**
     * Store a newly created Caso_positivo in storage.
     *
     * @param CreateCaso_positivoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaso_positivoRequest $request)
    {
        $input = $request->all();

        $casoPositivo = $this->casoPositivoRepository->create($input);

        Flash::success('Caso Positivo guardado correctamente.');

        return redirect(route('casoPositivos.index'));
    }

    /**
     * Display the specified Caso_positivo.
     *
     * @param int $id
     *
     * @return Response
     */
    // Consulta sql para unir casos positivos y los datos de los pacientes
    public function show($id)
    {
         $casoPositivo=DB::table('caso_positivos')
        ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->select('pacientes.id','pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','pacientes.resultado','pacientes.tipo_prueba_id','pacientes.fechanac','pacientes.ci','pacientes.telefono','pacientes.grupo_sanguineo','pacientes.email','pacientes.edad','pacientes.enfermedad_referencial','pacientes.usuario','pacientes.longitud','pacientes.latitud','caso_positivos.codigo','caso_positivos.region','caso_positivos.codigo_distrito','caso_positivos.distrito','caso_positivos.fecha_notificacion','caso_positivos.medico','caso_positivos.media_edad','caso_positivos.residente','caso_positivos.hospedaje','caso_positivos.telefono_verificado','caso_positivos.codigo_departamento','caso_positivos.departamento','caso_positivos.zona','caso_positivos.personal_de_blanco','caso_positivos.albergue','caso_positivos.lugar_albergue','caso_positivos.sintomas_fiebre','caso_positivos.hospitalizado','caso_positivos.signo_sintoma','caso_positivos.vacuna_para_la_influenza','caso_positivos.fecha_vacunacion','caso_positivos.viajo_resiente','caso_positivos.centro_asistencia_covid','caso_positivos.centro_asistencia_pais','caso_positivos','caso_positivos.centro_asistencia_ciudad','caso_positivos.nombre_centro_asistencia','caso_positivos.fecha_asistida','caso_positivos.contacto_con_animales','caso_positivos.dato_de_contacto','caso_positivos.tipo_contacto','caso_positivos.contacto_otro','caso_positivos.contacto_con_infectado','caso_positivos.contacto_persona','caso_positivos.toma_de_muestra','caso_positivos.laboratorio','caso_positivos.nro_planilla','caso_positivos.anho','caso_positivos.responsable_de_carga','caso_positivos.usuario_lugar')
        ->where('caso_positivos.deleted_at',null)
        ->where('caso_positivos.id',$id)
        ->first();
        return view('caso_positivos.show',compact('casoPositivo'));

    }

    /**
     * Show the form for editing the specified Caso_positivo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $casoPositivo = $this->casoPositivoRepository->find($id);
         $pacientes = Paciente::pluck('nombre_apellido','id');


        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo no encontrado');

            return redirect(route('casoPositivos.index'));
        }
         return view('caso_positivos.edit', compact('casoPositivo', 'pacientes',$casoPositivo ));
    }

    /**
     * Update the specified Caso_positivo in storage.
     *
     * @param int $id
     * @param UpdateCaso_positivoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaso_positivoRequest $request)
    {
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo no encontrado');

            return redirect(route('casoPositivos.index'));
        }

        $casoPositivo = $this->casoPositivoRepository->update($request->all(), $id);

        Flash::success('Caso Positivo actualizado correctamente.');

        return redirect(route('casoPositivos.index'));
    }

    /**
     * Remove the specified Caso_positivo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $casoPositivo = $this->casoPositivoRepository->find($id);

        if (empty($casoPositivo)) {
            Flash::error('Caso Positivo no encontrado');

            return redirect(route('casoPositivos.index'));
        }

        $this->casoPositivoRepository->delete($id);

        Flash::success('Caso Positivo eliminado correctamente.');

        return redirect(route('casoPositivos.index'));
    }
}
