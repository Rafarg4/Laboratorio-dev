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
    $fallecidos=DB::table('caso_positivos')
        ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Fallecido')
        ->get();
        return view('listafallecidos',compact('fallecidos'));
    } 

    //Consulta para la vista de historial y ver los detalles de todos los fallecidos segun su estado.

    public function detalle_fallecido($id){
         $fallecidos=DB::table('caso_positivos')
         ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.id','pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','pacientes.resultado','pacientes.tipo_prueba_id','pacientes.fechanac','pacientes.ci','pacientes.telefono','pacientes.grupo_sanguineo','pacientes.email','pacientes.usuario','controls.estado_paciente','controls.fecha_alta','controls.recomendacion','controls.id','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud','caso_positivos.codigo','caso_positivos.region','caso_positivos.codigo_distrito','caso_positivos.distrito','caso_positivos.fecha_notificacion','caso_positivos.medico','caso_positivos.media_edad','caso_positivos.residente','caso_positivos.hospedaje','caso_positivos.telefono_verificado','caso_positivos.codigo_departamento','caso_positivos.departamento','caso_positivos.zona','caso_positivos.personal_de_blanco','caso_positivos.albergue','caso_positivos.lugar_albergue','caso_positivos.sintomas_fiebre','caso_positivos.hospitalizado','caso_positivos.signo_sintoma','caso_positivos.vacuna_para_la_influenza','caso_positivos.fecha_vacunacion','caso_positivos.viajo_resiente','caso_positivos.centro_asistencia_covid','caso_positivos.centro_asistencia_pais','caso_positivos','caso_positivos.centro_asistencia_ciudad','caso_positivos.nombre_centro_asistencia','caso_positivos.fecha_asistida','caso_positivos.contacto_con_animales','caso_positivos.dato_de_contacto','caso_positivos.tipo_contacto','caso_positivos.contacto_otro','caso_positivos.contacto_con_infectado','caso_positivos.contacto_persona','caso_positivos.toma_de_muestra','caso_positivos.laboratorio','caso_positivos.nro_planilla','caso_positivos.anho','caso_positivos.responsable_de_carga','caso_positivos.usuario_lugar')
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
   