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
                             Reporte de Control
        
                         </div>
                         <div class="card-body">
                            
  <div class="md-card-content" style="overflow-x: auto;">
<div class="table-responsive-sm">
    <table class="table table-bordered" id="data">
        <thead>
            <tr>
        <th>Nro de Caso</th>
        <th>Fecha Analisis</th>
        <th>Estado Paciente</th>
        <th>Recomendacion</th>
        <th>Fecha Alta</th>
        <th>Creado</th>
        <th>Actualizado</th>
        </tr>
        </thead>
        <tbody>
        @foreach($control as $control)
            <tr>
            <td>{{ $control->paciente->paciente_id }}</td>
            <td>{{ $control->fecha_analisis }}</td>
            <td>@switch(true)
            @case($control->estado_paciente == 'Inactivo')
            <span class="badge badge-primary"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Activo')
            <span class="badge badge-warning"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Fallecido' )
            <span class="badge badge-danger"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $control->estado_paciente }} </span>
            @break
            @endswitch</td>
            <td>{{ $control->recomendacion }}</td>
            <td>{{ $control->fecha_alta }}</td>
            <td>{{ $control->created_at }}</td>
            <td>{{ $control->updated_at }}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection