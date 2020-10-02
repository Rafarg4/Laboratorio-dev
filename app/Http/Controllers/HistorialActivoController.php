<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HistorialActivoController extends Controller
{
        	public function activo(){
    $activos=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.estado_paciente','Activo')
        ->where('controls.deleted_at',null)
        ->get();
        return view('historial_activos',compact('activos'));
    } 
}
