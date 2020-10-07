<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('tipoPruebas', 'Tipo_pruebaController')->middleware('auth');

Route::resource('pacientes', 'PacienteController')->middleware('auth');

Route::get('perfiles', 'HomeController@usuario')->middleware('auth');

Route::get('graficos', 'GraficoController@grafico')->middleware('auth');

Route::get('mapas', 'MapaController@mapa')->middleware('auth');

Route::resource('laboratorios', 'LaboratorioController')->middleware('auth');

Route::resource('controls', 'ControlController')->middleware('auth');

Route::get('historial_recuperados', 'HistorialRecuperadoController@lista')->middleware('auth');

Route::get('listafallecidos', 'HistorialFallecidoController@listaFallecidos')->middleware('auth');

Route::get('historial_activos', 'HistorialActivoController@activo')->middleware('auth');

Route::get('home', 'HistorialFallecidoController@dashmuerto')->middleware('auth');

Route::resource('casoPositivos', 'Caso_positivoController')->middleware('auth');

Route::get('mapa_pacientes', 'MapaPacienteController@index')->middleware('auth');