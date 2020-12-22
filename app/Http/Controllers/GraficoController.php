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
                    ->where('pacientes.resultado','Positivo')
                    ->pluck('count');
    {
    $femenino = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.genero','Femenino')
                    ->where('pacientes.resultado','Positivo')
                    ->pluck('count');
    }{
    $otro = Paciente::select(\DB::raw("COUNT(*) as count"))
                    ->where('pacientes.genero','Otro')
                    ->where('pacientes.resultado','Positivo')
                    ->pluck('count');
    }{
        $encarnacion = Paciente::select(\DB::raw("COUNT(*) as count"))
        ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Encarnacion')
                     ->get()->toArray();
    $encarnacion = array_column($encarnacion, 'count');
    }{
    $chaipe = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Chaipe')
                    ->get()->toArray();
    $chaipe = array_column($chaipe, 'count');
    }{
    $cambyreta = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Cambyreta')
                     ->get()->toArray();
    $cambyreta = array_column($cambyreta, 'count');
    }{
    $mboikae = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Mboi_Ka_e')
                     ->get()->toArray();
    $mboikae = array_column($mboikae, 'count');
    }{
    $sanisidro = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','San_Isidro')
                    ->get()->toArray();
    $sanisidro = array_column($sanisidro, 'count');
    }{
    $sagradafamilia = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Sagrada_Familia')
                    ->get()->toArray();
    $sagradafamilia = array_column($sagradafamilia, 'count');
    }{
    $ciudadnueva = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Ciudad_Nueva')
                    ->get()->toArray();
    $ciudadnueva = array_column($ciudadnueva, 'count');
    }{
    $santamaria = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Santa_Maria')
                    ->get()->toArray();
    $santamaria = array_column($santamaria, 'count');
    }{
    $itapaso = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Ita_Paso')
                    ->get()->toArray();
    $itapaso = array_column($itapaso, 'count');
    }{
    $buenavista = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Buena_Vista')
                    ->get()->toArray();
    $buenavista = array_column($buenavista, 'count');
    }{
    $fatima = Paciente::select(\DB::raw("COUNT(*) as count"))
     ->groupBy(\DB::raw("extract(MONTH from created_at)", "=", Carbon::now()->month))
                    ->where('pacientes.barrio','Fatima')
                    ->get()->toArray();
    $fatima = array_column($fatima, 'count');
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
        //Edad promedio
       $promedio = DB::table('pacientes')
       ->where('pacientes.resultado','Positivo')
       ->avg('edad');
       //Edad maxima
       $max = DB::table('pacientes')
       ->where('pacientes.resultado','Positivo')
       ->max('edad');
       //Edad minima
      $min = DB::table('pacientes')
       ->where('pacientes.resultado','Positivo')
       ->min('edad');
    }{
    return view('graficos', compact('masculino','femenino','otro','encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','santamaria','itapaso','buenavista','fatima','muertos','infectados','recuperados','eleccion','otro_estado','positivos','negativos','positotal','negatotal','promedio','max','min'));
    }
  }
}

