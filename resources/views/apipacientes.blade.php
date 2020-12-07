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
    <a href="{{url('paciente/create')}}">Nuevo</a>
       <i class="fa fa-align-justify"></i>
        Test Api
                                                 
          </div>
           <div class="card-body">
         <div class="md-card-content" style="overflow-x: auto;">
<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
        <th>Datos Personales</th>
        <th>Genero</th>
        <th>Fecha de Nacimiento</th>
        <th>Edad</th>
        <th>Ci</th>
        <th>Barrio</th>
        <th>Telefono</th>
        <th>Grupo Sanguineo</th>
        <th>Comorbilidad</th>
        
        <th>Resutado</th>
        
        

                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre_apellido }}</td>
            <td>{{ $paciente->genero }}</td>
            <td>{{ $paciente->fechanac }}</td>
            <td>{{ $paciente->edad }}</td>
            <td>{{ $paciente->ci }}</td>
            <td>{{ $paciente->barrio }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->grupo_sanguineo }}</td>
            <td>{{ $paciente->enfermedad_referencial }}</td>
            <td>@switch(true)
            @case($paciente->resultado == 'Negativo')
            <span class="badge badge-primary"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Positivo')
            <span class="badge badge-danger"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Otro' )
            <span class="badge badge-info"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $paciente->resultado }} </span>
            @break
            @endswitch</td>
          
                <td>
                <a href="{{url('ver', $paciente->id)}}" class="btn-floating btn-sm "><i class="cil-clipboard"></i></a>
                <a href="{{url('paciente/' . $paciente->id. '/edit')}}" class='btn- btn-sm'><i class="cil-color-border"></i></a>

          <form method="post" action="{{url('paciente', $paciente->id)}}">
            @csrf()
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Eliminar" />
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection