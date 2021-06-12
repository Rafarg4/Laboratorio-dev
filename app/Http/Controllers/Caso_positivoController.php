<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaso_positivoRequest;
use App\Http\Requests\UpdateCaso_positivoRequest;
use App\Repositories\Caso_positivoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;
use Response;
use App\Models\Paciente;
use GuzzleHttp\Client;
class Caso_positivoController extends AppBaseController
{
    private $client;

    private $pacientes;

    public function __construct(){
    //Ruta de api para consumir casos positivos.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    //Ruta para obtener los pacientes .
    $this->pacientes = new Client (['base_uri'=>'http://127.0.0.1:6060/pacientes']);
   
    }

    public function index ()
    {
        $repuesta=$this->client->get('casos_positivos');

        $casoPositivos = json_decode($repuesta->getBody()->getContents());
       
        return view('caso_positivos.index',compact('casoPositivos'));

    }

    public function create(){

        $repuesta=$this->pacientes->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
        return view('caso_positivos.create',compact('pacientes'));
    }
    public function store (Request $request)
    {
        $this->client->post('casos_positivos',[

        'json' => $request->all()
        ]);

        Flash::success('Caso guardado correctamente.');

          return redirect(route('casoPositivos.index'));
    }

     public function show($id)
    {
        $respuesta = $this->client->get('casos_positivos/' .$id);

        $casoPositivos = $respuesta->getBody();

        return view('caso_positivos.show', ['casoPositivos' => json_decode($casoPositivos)]);
    }

    public function edit ($id)
    {

        $repuesta=$this->client->get('casos_positivos/' .$id);

        $casoPositivos = json_decode($repuesta->getBody()->getContents());

        $repuesta=$this->pacientes->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());

       
        return view('caso_positivos.edit',compact('casoPositivos','pacientes'));
    }

    public function update (Request $request, $id)
     {

        $this->client->put('casos_positivos/' . $id,[

        'json' => $request->all()
        ]);

        Flash::success('Caso Actualizado correctamente.');

        return redirect(route('casoPositivos.index'));

    }
    public function destroy ($id){

       $this->client->delete('casos_positivos/' .$id);

       Flash::error('Caso Eliminado correctamente.');

        return redirect(route('casoPositivos.index'));
    }
   
}


