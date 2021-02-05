<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Repositories\PacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use GuzzleHttp\Client;
class PacienteController extends AppBaseController
{
    private $client;

    private $pruebas;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    //Ruta para obtener los tipos de pruebas en pacientes.
    $this->pruebas = new Client (['base_uri'=>'http://127.0.0.1:6060/pruebas']);
    }

    public function index ()
    {
        $repuesta=$this->client->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
        return view('pacientes.index',compact('pacientes'));

    }
    public function create(){

        $repuesta=$this->pruebas->get('pruebas');

        $pruebas = json_decode($repuesta->getBody()->getContents());
       
        return view('pacientes.create',compact('pruebas'));
    }
    public function store (Request $request)
    {
        $this->client->post('pacientes',[

        'json' => $request->all()
        ]);

        Flash::success('Paciente guardado correctamente.');

         return redirect(route('pacientes.index'));
    }

     public function show($id)
    {
        $respuesta = $this->client->get('pacientes/' .$id);

        $pacientes = $respuesta->getBody();

        return view('pacientes.show', ['pacientes' => json_decode($pacientes)]);
    }

    public function edit ($id)
    {

        $repuesta=$this->client->get('pacientes/' .$id);

        $pacientes = json_decode($repuesta->getBody()->getContents());

        $repuesta=$this->pruebas->get('pruebas');

        $pruebas = json_decode($repuesta->getBody()->getContents());

        return view('pacientes.edit',compact('pacientes','pruebas'));
    }

    public function update (Request $request, $id)
     {

        $this->client->put('pacientes/' . $id,[

        'json' => $request->all()
        ]);

        Flash::success('Paciente Actualizado correctamente.');

        return redirect(route('pacientes.index'));

    }
    public function destroy ($id){

       $this->client->delete('pacientes/' .$id);

       Flash::error('Paciente Eliminado correctamente.');

       return redirect(route('pacientes.index'));
    }
   
}
