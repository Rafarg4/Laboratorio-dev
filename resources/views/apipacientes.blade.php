@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<div class="container-fluid">
<div class="container">
  <br>
  <h3>Prueba de Api
  </h3>
        <div class="animated fadeIn">

        <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <th>Nombre </th>
                <th>Genero</th>
                 <th>Fecha de nacimiento</th>
                  <th>Edad</th>
                   <th>Ci</th>
                    <th>Barrio</th>
                     <th>Telefono</th>
                      <th>Grupo Sanguineo</th>
                       <th>Enfermedad Referencial</th>
                        <th>Latitud</th>
                         <th>Longitud</th>
                          <th>Email</th>
                           <th>Resultado</th>

       
                
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $pacientes)
            <tr>
                  <td>{{ $pacientes->nombre_apellido}}</td>
                  <td>{{ $pacientes->genero}}</td>
                  <td>{{ $pacientes->fechanac}}</td>
                  <td>{{ $pacientes->edad}}</td>
                  <td>{{ $pacientes->ci}}</td>
                  <td>{{ $pacientes->barrio}}</td>
                  <td>{{ $pacientes->telefono}}</td>
                  <td>{{ $pacientes->grupo_sanguineo}}</td>
                  <td>{{ $pacientes->enfermedad_referencial}}</td>
                  <td>{{ $pacientes->latitud}}</td>
                  <td>{{ $pacientes->longitud}}</td>
                  <td>{{ $pacientes->email}}</td>
                  <td>{{ $pacientes->resultado}}</td>
            
            
            </tr>
        @endforeach
        </tbody>
    </table>    <!-- Widgets -->
        </div>
      </div>
@endsection