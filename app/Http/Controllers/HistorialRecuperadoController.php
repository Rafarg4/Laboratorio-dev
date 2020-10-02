<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HistorialRecuperadoController extends Controller
{
    	public function lista(){
    $historial=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.estado_paciente','Inactivo')
        ->where('controls.deleted_at',null)
        ->get();
        return view('historial_recuperados',compact('historial'));
    } 
}
