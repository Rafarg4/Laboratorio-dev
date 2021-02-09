@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
 <script type="text/javascript">
      $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#data thead tr').clone(true).appendTo( '#data  thead' );
    $('#data thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#data').DataTable( {
       "pageLength":7,
       "language": {
       "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
       },
        orderCellsTop: true,
        fixedHeader: true,
        autoFill: true,
        scrollX: true,
        dom: 'Bfrtip',
            buttons: [
             {extend:'csv',
            className: 'btn aqua-gradient'},
             {extend:'excel',
            className: 'btn aqua-gradient'} 
            ]
    } );



} )
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
         <th>Paciente</th>
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
            <td>{{ $control->paciente_id }}</td>
            <td>{{ $control->nombre_apellido }}</td>
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