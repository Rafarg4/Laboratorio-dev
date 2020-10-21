@extends('layouts.app')


<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')

<script type="text/javascript">$(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});</script>

     <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Reporte Pacientes
        
                         </div>
                         <div class="card-body">
                            <div class="table-responsive-sm">
   <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
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
        <th>Prueba</th>
        <th>Resutado</th>
        <th>Email</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Usuario</th>

            </tr>
        </thead>
        <tbody>
        @foreach($reporte as $paciente)
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
              <td>{{ $paciente->tipo_prueba->nombre }}</td>
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
            <td>{{ $paciente->email }}</td>
            <td>{{ $paciente->latitud }}</td>
            <td>{{ $paciente->longitud }}</td>
            <td>{{ $paciente->usuario }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
                    </br>
             </div>
         </div>
    </div>
@endsection
