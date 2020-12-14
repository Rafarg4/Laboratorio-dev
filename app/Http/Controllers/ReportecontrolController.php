<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;

class ReportecontrolController extends Controller
{
     public function reportecontrol()
    { 
    	$control= Control::all();
        return view('reporte_control',compact(
            'control'));
    }
}
