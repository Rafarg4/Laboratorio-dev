<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class MapaPacienteController extends Controller
{
    public function index()
    {
         $mapap= Paciente::all();
        return view('mapa_pacientes',compact(
            'mapap'));
    }
}
