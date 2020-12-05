@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<br>
  <div class="container-fluid">
                     <div class="animated fadeIn">
                                 @include('flash::message')
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
  <div class="card-header">
       <i class="fa fa-align-justify"></i>
        Test Api
                                                 
          </div>
       <div class="card-body">
        <div class="table-responsive-sm">
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
    </div>
  </div>
</div>
</div>
</div>
    
@endsection