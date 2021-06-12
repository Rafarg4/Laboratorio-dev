<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateControlRequest;
use App\Http\Requests\UpdateControlRequest;
use App\Repositories\ControlRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Caso_positivo;
use Flash;
use Response;
use GuzzleHttp\Client;

class ControlController extends AppBaseController
{
    private $client;

    private $caso_pacientes;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    //Ruta para obtener los tipos de pacientes en pacientes.
    $this->caso_pacientes = new Client (['base_uri'=>'http://127.0.0.1:6060/caso_pacientes']);
    }

    public function index ()
    {
        $repuesta=$this->client->get('controles');

        $controls = json_decode($repuesta->getBody()->getContents());
       
        return view('controls.index',compact('controls'));

    }
    public function create(){

        $repuesta=$this->caso_pacientes->get('caso_pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
        return view('controls.create',compact('pacientes'));
    }

    /**
     * Store a newly created Control in storage.
     *
     * @param CreateControlRequest $request
     *
     * @return Response
     */
    public function store (Request $request)
    {
        $this->client->post('controles',[

        'json' => $request->all()
        ]);

        Flash::success('Control guardado correctamente.');

         return redirect(route('controls.index'));
    }

    /**
     * Display the specified Control.
     *
     * @param int $id
     *
     * @return Response
     */
       public function show($id)
    {
        $respuesta = $this->client->get('controles/' .$id);

        $controls = $respuesta->getBody();

        return view('controls.show', ['controls' => json_decode($controls)]);
    }

    /**
     * Show the form for editing the specified Control.
     *
     * @param int $id
     *
     * @return Response
     */
   public function edit ($id)
    {

        $repuesta=$this->client->get('controles/' .$id);

        $controls = json_decode($repuesta->getBody()->getContents());

        $repuesta=$this->caso_pacientes->get('caso_pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());

       
        return view('controls.edit',compact('controls','pacientes'));
    }

    public function update (Request $request, $id)
     {

        $this->client->put('controles/' . $id,[

        'json' => $request->all()
        ]);

        Flash::success('Control Actualizado correctamente.');

        return redirect(route('controls.index'));

    }
    public function destroy ($id){

       $this->client->delete('controles/' .$id);

       Flash::error('Control Eliminado correctamente.');

       return redirect(route('controls.index'));
    }
   
}

