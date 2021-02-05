<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso_positivo;
use GuzzleHttp\Client;
class Reporte_positivoController extends Controller
{
    private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/reporte_positivos']);
    }

    public function casos_positivos ()
    {
        $repuesta=$this->client->get('reporte_positivos');

        $casos = json_decode($repuesta->getBody()->getContents());
       
        return view('reporte_positivos',compact('casos'));

    }
}
