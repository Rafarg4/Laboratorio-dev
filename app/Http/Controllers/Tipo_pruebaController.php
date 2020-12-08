<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_pruebaRequest;
use App\Http\Requests\UpdateTipo_pruebaRequest;
use App\Repositories\Tipo_pruebaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Paciente;
use GuzzleHttp\Client;
class Tipo_pruebaController extends AppBaseController
{
     private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);

    }

    public function index ()
    {
        $repuesta=$this->client->get('tipo_pruebas');

        $tipoPruebas = json_decode($repuesta->getBody()->getContents());
       
        return view('tipo_pruebas.index',compact('tipoPruebas'));

    }
    public function create(){
       
        return view('tipo_pruebas.create');
    }
    public function store (Request $request)
    {
        $this->client->post('tipo_pruebas',[

        'json' => $request->all()
        ]);

        Flash::success('Prueba guardado correctamente.');

         return redirect(route('tipoPruebas.index'));
    }

     public function show($id)
    {
        $respuesta = $this->client->get('tipo_pruebas/' .$id);

        $tipoPruebas = $respuesta->getBody();

        return view('tipo_pruebas.show', ['tipoPruebas' => json_decode($tipoPruebas)]);
    }

    public function edit ($id)
    {

        $repuesta=$this->client->get('tipo_pruebas/' .$id);

        $tipoPruebas = json_decode($repuesta->getBody()->getContents());

       
        return view('tipo_pruebas.edit',compact('tipoPruebas'));
    }

    public function update (Request $request, $id)
     {

        $this->client->put('tipo_pruebas/' . $id,[

        'json' => $request->all()
        ]);

        Flash::success('Prueba Actualizado guardado correctamente.');

        return redirect(route('tipoPruebas.index'));

    }
    public function destroy ($id){

       $this->client->delete('tipo_pruebas/' .$id);

       Flash::error('Prueba Eliminado correctamente.');

       return redirect(route('tipoPruebas.index'));
    }
   
}






   