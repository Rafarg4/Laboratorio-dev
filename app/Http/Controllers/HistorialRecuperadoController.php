<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HistorialRecuperadoController extends Controller
{
    	public function lista(){
    $historial=DB::table('caso_positivos')
      ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','controls.estado_paciente','controls.fecha_alta','pacientes.telefono','pacientes.enfermedad_referencial','controls.fecha_analisis')
        ->where('controls.estado_paciente','Inactivo')
        ->where('controls.deleted_at',null)
        ->get();
        return view('historial_recuperados',compact('historial'));
    } 
// Consulta de ver detalles para ver los pacientes activos en el historial
    public function detalles($id){	
    $detalles=DB::table('caso_positivos')
        ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.id','pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','pacientes.resultado','pacientes.tipo_prueba_id','pacientes.fechanac','pacientes.ci','pacientes.telefono','pacientes.grupo_sanguineo','pacientes.email','controls.estado_paciente','controls.fecha_alta','controls.recomendacion','controls.id','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud','caso_positivos.codigo','caso_positivos.region','caso_positivos.codigo_distrito','caso_positivos.distrito','caso_positivos.fecha_notificacion','caso_positivos.medico','caso_positivos.media_edad','caso_positivos.residente','caso_positivos.hospedaje','caso_positivos.telefono_verificado','caso_positivos.codigo_departamento','caso_positivos.departamento','caso_positivos.zona','caso_positivos.personal_de_blanco','caso_positivos.albergue','caso_positivos.lugar_albergue','caso_positivos.sintomas_fiebre','caso_positivos.hospitalizado','caso_positivos.signo_sintoma','caso_positivos.vacuna_para_la_influenza','caso_positivos.fecha_vacunacion','caso_positivos.viajo_resiente','caso_positivos.centro_asistencia_covid','caso_positivos.centro_asistencia_pais','caso_positivos','caso_positivos.centro_asistencia_ciudad','caso_positivos.nombre_centro_asistencia','caso_positivos.fecha_asistida','caso_positivos.contacto_con_animales','caso_positivos.dato_de_contacto','caso_positivos.tipo_contacto','caso_positivos.contacto_otro','caso_positivos.contacto_con_infectado','caso_positivos.contacto_persona','caso_positivos.toma_de_muestra','caso_positivos.laboratorio','caso_positivos.nro_planilla','caso_positivos.anho','caso_positivos.responsable_de_carga','caso_positivos.usuario_lugar')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Activo')
        ->where('pacientes.id',$id)
        ->first();
//SELECT  controls.estado_paciente,pacientes.nombre_apellido,caso_positivos.paciente_id as pacienteid, caso_positivos.id as idCasos
//FROM caso_positivos
//JOIN pacientes ON pacientes.id = caso_positivos.paciente_id
//JOIN controls ON controls.id = caso_positivos.id
//where controls.estado_paciente='Inactivo' 
        return view('detalle_activos',compact('detalles'));
    }
//Consulta para ver los detalles de los pacientes inactivos en el historial
    public function detalle_inactivo($id){
         $inactivos=DB::table('caso_positivos')
        ->join('pacientes','pacientes.id','=', 'caso_positivos.paciente_id')
        ->join('controls','controls.id','=', 'caso_positivos.id')
        ->select('pacientes.id','pacientes.nombre_apellido','pacientes.barrio','pacientes.genero', 'pacientes.id','pacientes.resultado','pacientes.tipo_prueba_id','pacientes.fechanac','pacientes.ci','pacientes.telefono','pacientes.grupo_sanguineo','pacientes.email','controls.estado_paciente','controls.fecha_alta','controls.recomendacion','controls.id','pacientes.edad','pacientes.enfermedad_referencial','controls.fecha_analisis','pacientes.longitud','pacientes.latitud','caso_positivos.codigo','caso_positivos.region','caso_positivos.codigo_distrito','caso_positivos.distrito','caso_positivos.fecha_notificacion','caso_positivos.medico','caso_positivos.media_edad','caso_positivos.residente','caso_positivos.hospedaje','caso_positivos.telefono_verificado','caso_positivos.codigo_departamento','caso_positivos.departamento','caso_positivos.zona','caso_positivos.personal_de_blanco','caso_positivos.albergue','caso_positivos.lugar_albergue','caso_positivos.sintomas_fiebre','caso_positivos.hospitalizado','caso_positivos.signo_sintoma','caso_positivos.vacuna_para_la_influenza','caso_positivos.fecha_vacunacion','caso_positivos.viajo_resiente','caso_positivos.centro_asistencia_covid','caso_positivos.centro_asistencia_pais','caso_positivos','caso_positivos.centro_asistencia_ciudad','caso_positivos.nombre_centro_asistencia','caso_positivos.fecha_asistida','caso_positivos.contacto_con_animales','caso_positivos.dato_de_contacto','caso_positivos.tipo_contacto','caso_positivos.contacto_otro','caso_positivos.contacto_con_infectado','caso_positivos.contacto_persona','caso_positivos.toma_de_muestra','caso_positivos.laboratorio','caso_positivos.nro_planilla','caso_positivos.anho','caso_positivos.responsable_de_carga','caso_positivos.usuario_lugar')
        ->where('controls.deleted_at',null)
        ->where('controls.estado_paciente','Inactivo')
        ->where('pacientes.id',$id)
        ->first();

      return view('detalle_inactivos',compact('inactivos'));
    } 
}
