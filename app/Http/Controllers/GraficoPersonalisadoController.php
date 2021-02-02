<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class GraficoPersonalisadoController extends Controller
{  
    public function personalizado()
    { 
    	$reporte= Paciente::all();
        return view('graficos_personalizado',compact(
            'reporte'));
    }
}
