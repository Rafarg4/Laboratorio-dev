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
}
