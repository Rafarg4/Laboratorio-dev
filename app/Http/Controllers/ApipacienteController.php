<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApipacienteController extends Controller
{
    private $client;

    public function __construct(){

    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    }

    public function index ()
    {
        $repuesta=$this->client->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
		return view('apipacientes',compact('pacientes'));

    }
    public function create(){

        return view('paciente');
    }
    public function store (Request $request)
    {

        $this->client->post('pacientes',[

        'json' => $request->all()
        ]);

        return redirect ('/paciente');
    }

    public function show($id)
    {
        $respuesta = $this->client->get($id);

        $pacientes = $respuesta->getBody();

        return view('ver',compact('pacientes'));
    }

    public function edit ($id)
    {

        $repuesta=$this->client->get('pacientes/' .$id);

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
        return view('editar',compact('pacientes'));
    }

     public function update (Request $request, $id)
     {

        $this->client->put('pacientes/' . $id,[

        'json' => $request->all()
        ]);

        return redirect ('/paciente');

    }
    public function destroy ($id){
       $this->client->delete('pacientes/' .$id);
         return redirect('apipacientes');
    }
   
}
