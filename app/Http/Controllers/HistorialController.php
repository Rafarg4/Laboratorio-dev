<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistorialController extends Controller
{

	public function lista(){
    $historial=DB::table('pacientes')
        ->join('controls','controls.id','=', 'pacientes.id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.estado_paciente','Inactivo')
        ->get();
        return view('historial',compact('historial'));
    }    
}
