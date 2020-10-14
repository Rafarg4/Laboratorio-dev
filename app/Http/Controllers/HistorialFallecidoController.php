<?php

namespace App\Http\Controllers;
use DB;
use App\models\Control;
use App\models\Caso_Positivo;
use App\models\Paciente;
use Illuminate\Http\Request;

class HistorialFallecidoController extends Controller
{
    //consulta de la vista de fallecidos segun su estado..
    public function listaFallecidos(){
    $fallecidos=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Fallecido')
        ->get();
        return view('listafallecidos',compact('fallecidos'));
    } 

    //Consulta para la vista de historial y ver los detalles de todos los fallecidos segun su estado.

    public function detalle_fallecido($id){
         $fallecidos=DB::table('controls')
        ->join('pacientes','pacientes.id','=', 'controls.paciente_id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Fallecido')
        ->where('pacientes.id',$id)
        ->first();
      return view('detalle_fallecidos',compact('fallecidos'));
    } 

    // Consultas para el total de muertos, infectado,recuperado, pacientes para el dasboard de la plataforma.
    //Consulta de los pacientes totales y los casos totales
    
    public function dashmuerto(){
    {
        //Cantidad de muertos
     $muertos = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Fallecido')
                    ->pluck('count');
    }{
        //Cantidad de infectados
    $infectados = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Activo')
                    ->pluck('count');
    }{
        //Cantidad de recuperados
     $recuperados = Control::select(\DB::raw("COUNT(*) as count"))
                    ->where('controls.estado_paciente','Inactivo')
                    ->pluck('count');
    }{
        //Cantiadad de Pacientes
     $pacientes = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->pluck('count');
    }{
        //Cantiadad de casos positivos
        $caso_positivos = Caso_Positivo::select(\DB::raw("COUNT(*) as count"))
                    ->pluck('count');
    }{
        //Todos los nuevos casos
        $nuevo_casos = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.resultado','Positivo')
                    ->pluck('count');

    return view('home', compact('muertos','infectados','recuperados','pacientes','caso_positivos','nuevo_casos'));
    }
  } 
}
   