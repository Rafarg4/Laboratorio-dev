<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client; 
class HistorialActivoController extends Controller
{
    private $client;
    private $detalles;
    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/historial_activos']);
    $this->detalles = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/detalle_activos']);
    }

    public function activo ()
    {
        $repuesta=$this->client->get('historial_activos');

        $activos = json_decode($repuesta->getBody()->getContents());
       
        return view('historial_activos',compact('activos'));

    }
     public function detalle ($id)
    {
    
         $repuesta=$this->detalles->get('detalle_activos/' .$id);

        $detalles = json_decode($repuesta->getBody()->getContents());
       
        return view('detalle_activos',compact('detalles'));

    }
}