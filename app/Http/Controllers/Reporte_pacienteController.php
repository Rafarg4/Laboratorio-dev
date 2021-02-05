<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use GuzzleHttp\Client;
class Reporte_pacienteController extends Controller
{
    private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/reporte_pacientes']);
    }

    public function reporte_paciente ()
    {
        $repuesta=$this->client->get('reporte_pacientes');

        $reporte = json_decode($repuesta->getBody()->getContents());
       
        return view('reporte_pacientes',compact('reporte'));

    }
}
