<?php

namespace App\Http\Controllers;
use DB;
use App\models\Control;
use App\models\Paciente;
use Illuminate\Http\Request;

class HistorialFallecidoController extends Controller
{
    public function listaFallecidos(){
    $fallecidos=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Fallecido')
        ->get();
        return view('listafallecidos',compact('fallecidos'));
    } 
    public function dashmuerto(){
    {
     $muertos = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Fallecido')
                    ->pluck('count');
   }{
    $infectados = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Activo')
                    ->pluck('count');
   }{
    $recuperados = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Inactivo')
                    ->pluck('count');
    }{
        $pacientes = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->pluck('count');
              
    return view('home', compact('muertos','infectados','recuperados','pacientes'));
    }
  } 
}
   