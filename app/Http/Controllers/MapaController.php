<?php

namespace App\Http\Controllers;
use App\models\Paciente;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class MapaController extends Controller
{
    private $encarnacion;
    private $cambyreta;
    private $ciudadnueva;
    private $fatima;
    private $itapaso;
    private $mboikae;
    private $sagradafamilia;
    private $sanisidro;
    private $santamaria;
    private $chaipe;
    private $buenavista;
    private $santo_domingo;
    private $nueva_alborada;
     private $de_diciembre;

    public function __construct(){

    $this->encarnacion = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/encarnacion']);
    $this->buenavista = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/buenavista']);
    $this->cambyreta = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/cambyreta']);
    $this->ciudadnueva = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/ciudadnueva']);
    $this->fatima = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/fatima']);
    $this->itapaso = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/itapaso']);
    $this->mboikae = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/mboikae']);
    $this->sagradafamilia = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/sagradafamilia']);
    $this->sanisidro = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/sanisidro']);
    $this->santamaria = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/santamaria']);
    $this->chaipe = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/chaipe']);
    $this->santo_domingo = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/santo_domingo']);
    $this->nueva_alborada = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/nueva_alborada']);
    $this->de_diciembre = new Client (['base_uri'=>'http://127.0.0.1:6060/mapa_barrios/de_diciembre']);
    
    }

    public function mapa ()
    {
        // mapa_Barrios

        //
        $repuesta=$this->encarnacion->get('encarnacion');

        $encarnacion = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->buenavista->get('buenavista');

        $buenavista = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->cambyreta->get('cambyreta');

        $cambyreta = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->ciudadnueva->get('ciudadnueva');

        $ciudadnueva = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->fatima->get('fatima');

        $fatima = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->itapaso->get('itapaso');

        $itapaso = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->mboikae->get('mboikae');

        $mboikae = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->sagradafamilia->get('sagradafamilia');

        $sagradafamilia = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->sanisidro->get('sanisidro');

        $sanisidro = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->santamaria->get('santamaria');

        $santamaria = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->chaipe->get('chaipe');

        $chaipe = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->santo_domingo->get('santo_domingo');

        $santo_domingo = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->nueva_alborada->get('nueva_alborada');

        $nueva_alborada = json_decode($repuesta->getBody()->getContents());
         //
        $repuesta=$this->de_diciembre->get('de_diciembre');

        $de_diciembre = json_decode($repuesta->getBody()->getContents());
        
        return view('mapas', compact('encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','santamaria','itapaso','buenavista','fatima','nueva_alborada','santo_domingo','de_diciembre'));

    }
}