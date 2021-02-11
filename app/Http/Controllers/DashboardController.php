<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class DashboardController extends Controller
{
    private $muertos;
    private $infectados;
    private $recuperados;
    private $pacientes;
    private $caso_positivos;
    private $nuevo_casos;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->muertos = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/muertos']);
    $this->infectados = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/infectados']);
    $this->recuperados = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/recuperados']);
    $this->pacientes = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/pacientes']);
    $this->caso_positivos = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/caso_positivos']);
    $this->nuevo_casos = new Client (['base_uri'=>'http://127.0.0.1:6060/dashboard/nuevo_casos']);

    }

    public function dashmuerto ()
    {
        $repuesta=$this->muertos->get('muertos');

        $muertos = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->infectados->get('infectados');

        $infectados = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->recuperados->get('recuperados');

        $recuperados = json_decode($repuesta->getBody()->getContents());
       //
        $repuesta=$this->pacientes->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->caso_positivos->get('caso_positivos');

        $caso_positivos = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->nuevo_casos->get('nuevo_casos');

        $nuevo_casos = json_decode($repuesta->getBody()->getContents());

        return view('home', compact('muertos','infectados','recuperados','pacientes','caso_positivos','nuevo_casos'));

    }
}

