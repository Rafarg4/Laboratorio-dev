<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class Reporte_pacienteController extends Controller
{
    public function reporte_paciente()
    { 
    	$reporte= Paciente::all();
        return view('reporte_pacientes',compact(
            'reporte'));
    }
}
