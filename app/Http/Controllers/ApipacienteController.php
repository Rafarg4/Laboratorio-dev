<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApipacienteController extends Controller
{
  
    public function index (){

    $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://127.0.0.1:6060/api/pacientes',
    // You can set any number of default request options.
    'timeout'  => 2.0,
	]);
		$response = $client->request('GET', 'pacientes');
		$pacientes = json_decode($response->getBody()->getContents());
		return view('apipacientes',compact('pacientes'));

    }
    public function store (){
        $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://127.0.0.1:6060/api/pacientes',
    // You can set any number of default request options.
    'timeout'  => 2.0,
    ]);
        $pacientes = $client->request('POST', 'http://127.0.0.1:6060/api/pacientes', [
        'json' => ['id' => '4
        ','nombre_apellido' => 'Lucas','genero' => 'Masculino','fechanac' => '20 de Dicimbre','edad' => 21,'ci' => 4584854,'barrio' => 'San Miguel','telefono' => 34534,'grupo_sanguineo' => 'S','enfermedad_referencial' => 'ninguna','latitud' => '345345','longitud' => '345345','email' => 'rafa@gmail.com','resultado' => 'positivo','created_at' => '2020-10-31 00:31:10','updated_at' => '2020-10-31 00:31:10','deleted_at' => null]
        ]);
        return view('store');

    }
     public function update (){
        $client = new Client(['base_uri' => 'http://127.0.0.1:6060/api/pacientes']);
        $response = $client->request('PUT', 'http://127.0.0.1:6060/api/pacientes/32', ['form_params' => ['id' => '4
        ','nombre_apellido' => 'Jose','genero' => 'Masculino','fechanac' => '20 de novimbre','edad' => 21,'ci' => 4584854,'barrio' => 'San Isidro','telefono' => 34534,'grupo_sanguineo' => 'S','enfermedad_referencial' => 'ninguna','latitud' => '345345','longitud' => '345345','email' => 'rafa@gmail.com','resultado' => 'positivo','created_at' => '2020-10-31 00:31:10','updated_at' => '2020-10-31 00:31:10','deleted_at' => null]
    ]);
        return view('update');

    }
    public function delete (){
        $client = new Client(['base_uri' => 'http://127.0.0.1:6060/api/pacientes']);

        $response = $client->request('DELETE', 'http://127.0.0.1:6060/api/pacientes/32');
         return view('delete');
    }
   
}
