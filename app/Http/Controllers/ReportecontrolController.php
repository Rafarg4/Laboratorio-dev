<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;
use GuzzleHttp\Client;
class ReportecontrolController extends Controller
{
      private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/reporte_control']);
    }

    public function reportecontrol ()
    {
        $repuesta=$this->client->get('reporte_control');

        $control = json_decode($repuesta->getBody()->getContents());
       
        return view('reporte_control',compact('control'));

    }
}
