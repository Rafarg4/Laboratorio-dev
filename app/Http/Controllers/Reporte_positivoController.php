<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso_positivo;

class Reporte_positivoController extends Controller
{
    public function casos_positivos()
    { 
    	$casos= Caso_positivo::all();
        return view('reporte_positivos',compact(
            'casos'));
    }
}
