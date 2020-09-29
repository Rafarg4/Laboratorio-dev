<?php

namespace App\Http\Controllers;
use App\models\Paciente;
use Illuminate\Http\Request;

class MapaController extends Controller
{
    	public function mapa(){
        $encarnacion = Paciente::select(\DB::raw("COUNT(*) as count"))
        ->where('pacientes.barrio','Encarnacion')
                    ->pluck('count');
    {
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
   
    return view('mapas', compact('encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','ciudadnueva','santamaria','itapaso','buenavista','fatima'));
    }
 }
}