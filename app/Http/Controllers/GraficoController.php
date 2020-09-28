<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paciente;
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
   
    return view('graficos', compact('masculino','femenino','otro'));
    }
 }
}
