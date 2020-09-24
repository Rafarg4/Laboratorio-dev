<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistorialController extends Controller
{

	public function lista(){
    $historial=DB::table('pacientes')
        ->join('users','users.id','=', 'pacientes.id')
        ->join('controls','controls.id','=', 'pacientes.id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','users.name','users.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial')
        ->get();
        return view('historial',compact('historial'));
    }   
}
