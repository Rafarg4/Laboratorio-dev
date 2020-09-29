<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paciente;
use App\Models\Control;
class GraficoController extends Controller
{
	public function grafico(){
        $masculino = Paciente::select(\DB::raw("COUNT(*) as count"))
        ->where('pacientes.genero','Masculino')
                    ->pluck('count');
    {
    $femenino = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.genero','Femenino')
                    ->pluck('count');
    }{
    $otro = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.genero','Otro')
                    ->pluck('count');
    }{
        $encarnacion = Paciente::select(\DB::raw("COUNT(*) as count"))
        ->where('pacientes.barrio','Encarnacion')
                    ->pluck('count');
    }{
    $chaipe = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Chaipe')
                    ->pluck('count');
    }{
    $cambyreta = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Cambyreta')
                    ->pluck('count');
    }{
    $mboikae = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Mboi_Ka_e')
                    ->pluck('count');
    }{
    $sanisidro = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','San_Isidro')
                    ->pluck('count');
    }{
    $sagradafamilia = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Sagrada_Familia')
                    ->pluck('count');
    }{
     $ciudadnueva = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Ciudad_Nueva')
                    ->pluck('count');
    }{

    $santamaria = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Santa_Maria')
                    ->pluck('count');
    }{

    $itapaso = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Ita_Paso')
                    ->pluck('count');
    }{

    $buenavista = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Buena_Vista')
                    ->pluck('count');
    }{

    $fatima = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.barrio','Fatima')
                    ->pluck('count');
    }{
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
   
    return view('graficos', compact('masculino','femenino','otro','encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','santamaria','itapaso','buenavista','fatima','muertos','infectados','recuperados'));
    }
 }
}

