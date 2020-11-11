<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paciente;
use App\Models\Control;
use DB;
use Carbon\Carbon;
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
    $muertos = Control::select(DB::raw("COUNT(*) as count"))
        ->where('controls.estado_paciente','Fallecido')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $muertos = array_column($muertos, 'count');
    }{
    $infectados = Control::select(DB::raw("COUNT(*) as count"))
        ->where('controls.estado_paciente','Activo')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $infectados = array_column($infectados, 'count');
    }{
     $recuperados = Control::select(DB::raw("COUNT(*) as count"))
        ->where('controls.estado_paciente','Inactivo')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $recuperados = array_column($recuperados, 'count');
    }{
    $eleccion = Control::select(DB::raw("COUNT(*) as count"))
        ->where('controls.estado_paciente','Sin eleccion')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $eleccion = array_column($eleccion, 'count');
    }{
     $otro_estado = Control::select(DB::raw("COUNT(*) as count"))
        ->where('controls.estado_paciente','Otro')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $otro_estado = array_column($otro_estado, 'count');
    }{                
    $positivos = Paciente::select(DB::raw("COUNT(*) as count"))
        ->where('pacientes.resultado','Positivo')
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $positivos = array_column($positivos, 'count');
    }{
    $negativos = Paciente::select(DB::raw("COUNT(*) as count"))
        ->where('pacientes.resultado','Negativo')
       ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
        ->get()->toArray();
    $negativos = array_column($negativos, 'count');
    }{
         $positotal = Paciente::select(\DB::raw("COUNT(*) as count"))
         ->where('pacientes.resultado','Positivo')
                    ->pluck('count');
    }{
         $negatotal = Paciente::select(\DB::raw("COUNT(*) as count"))
          ->where('pacientes.resultado','Negativo')
                    ->pluck('count');
    }{
       $promedio = Paciente::avg('edad');
       $max = Paciente::max('edad');
       $min = Paciente::min('edad');
    }{
    return view('graficos', compact('masculino','femenino','otro','encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','santamaria','itapaso','buenavista','fatima','muertos','infectados','recuperados','eleccion','otro_estado','positivos','negativos','positotal','negatotal','promedio','max','min'));
    }
  }
}

