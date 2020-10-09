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
// Consulta de ver detalles para ver los pacientes activos en el historial
    public function detalles($id){	
    $detalles=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Activo')
        ->where('pacientes.id',$id)
        ->first();

        return view('detalle_activos',compact('detalles'));
    }
//Consulta para ver los detalles de los pacientes inactivos en el historial
    public function detalle_inactivo($id){
         $inactivos=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Inactivo')
        ->where('pacientes.id',$id)
        ->first();

      return view('detalle_inactivos',compact('inactivos'));
    } 
}
