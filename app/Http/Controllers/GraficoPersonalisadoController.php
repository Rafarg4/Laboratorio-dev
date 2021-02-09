<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use GuzzleHttp\Client;
class GraficoPersonalisadoController extends Controller
{
    private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/grafico_personalizados']);
    }

    public function personalizado ()
    {
        $repuesta=$this->client->get('grafico_personalizados');

        $reporte = json_decode($repuesta->getBody()->getContents());
       
        return view('graficos_personalizado',compact('reporte'));

    }
}