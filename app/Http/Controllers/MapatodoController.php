<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use GuzzleHttp\Client;
class MapatodoController extends Controller
	{
    private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/mapatodopacientes']);
    }

    public function index ()
    {
        $repuesta=$this->client->get('mapatodopacientes');

        $mapap = json_decode($repuesta->getBody()->getContents());
       
        return view('mapa_todopacientes',compact('mapap'));

    }
}
