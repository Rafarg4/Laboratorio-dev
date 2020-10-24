@extends('layouts.app')


<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<script>
     $(document).ready(function() {
        $('#data').DataTable( {
            "pageLength":6,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
         
         dom: 'Bfrtip',
            buttons: [
             {extend:'csv',
            className: 'btn aqua-gradient'},
             {extend:'excel',
            className: 'btn aqua-gradient'} 
            ]
        } );
} );

    </script>


     <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Reporte de Pacientes
        
                         </div>
                         <div class="card-body">
                            
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="data">
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