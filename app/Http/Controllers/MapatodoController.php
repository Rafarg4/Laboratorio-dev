<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class MapatodoController extends Controller
{
	 public function index()
    {
    $mapap= Paciente::all();
        return view('mapa_todopacientes',compact(
            'mapap'));
}
}
