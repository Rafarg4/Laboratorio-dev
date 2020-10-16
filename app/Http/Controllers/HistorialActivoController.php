<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HistorialActivoController extends Controller
{
        	public function activo(){
    $activos=DB::table('caso_positivos')
        ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.estado_paciente','Activo')
        ->where('controls.deleted_at',null)
        ->get();
        return view('historial_activos',compact('activos'));
    } 
}
