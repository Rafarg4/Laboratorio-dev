<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client;
class HistorialRecuperadoController extends Controller
{
    private $client;
    private $inactivos;
    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/historial_recuperados']);
    $this->inactivos = new Client (['base_uri'=>'http://127.0.0.1:6060/historial/detalle_recuperados']);
    }

    public function lista ()
    {
        $repuesta=$this->client->get('historial_recuperados');

        $historial = json_decode($repuesta->getBody()->getContents());
       
        return view('historial_recuperados',compact('historial'));

    }
     public function detalle_inactivo ($id)
    {
    
         $repuesta=$this->inactivos->get('detalle_recuperados/' .$id);

        $inactivos = json_decode($repuesta->getBody()->getContents());
       
        return view('detalle_inactivos',compact('inactivos'));

    } 
}
