<?php

namespace App\Http\Controllers;
use DB;
use App\models\Control;
use App\models\Caso_Positivo;
use App\models\Paciente;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HistorialFallecidoController extends Controller
{
    private $client;
    private $fallecidos;
    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/listafallecidos']);
    $this->fallecidos = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/detalle_fallecidos']);
    }

    public function listaFallecidos ()
    {
        $repuesta=$this->client->get('listafallecidos');

        $fallecidos = json_decode($repuesta->getBody()->getContents());
       
        return view('listafallecidos',compact('fallecidos'));

    }
     public function detalle_fallecido ($id)
    {
    
         $repuesta=$this->fallecidos->get('detalle_fallecidos/' .$id);

        $fallecidos = json_decode($repuesta->getBody()->getContents());
       
        return view('detalle_fallecidos',compact('fallecidos'));

    } 
}
