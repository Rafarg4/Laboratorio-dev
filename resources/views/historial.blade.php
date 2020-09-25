@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')

            <ol class="breadcrumb">
            <li class="breadcrumb-item"><strong>Historial de Pacientes</strong></li>
            </ol>
                 <div class="container-fluid">
                     <div class="animated fadeIn">
                                 @include('flash::message')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-header">
                                         <i class="fa fa-align-justify"></i>
                                        Lista de Pacientes
                                                 
                                        </div>
                                    <div class="card-body">
                                 <div class="table-responsive-sm">
                                <table class="table table-bordered" id="data-table">
                                    <thead>
                                        <tr>
                                    <th>Id Paciente</th>
                                    <th>Paciente</th>
                                    <th>Barrio</th>
                                     <th>Telefono</th>
                                    <th>Genero</th>
                                    <th>Estado</th>
                                    <th>Comorbilidad</th>
                                     <th>Fecha de Analisis</th>
                                    <th>Fecha de Alta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($historial as $historial)
                                        <tr>
                                       
                                        <td>{{ $historial->id }}</td> 
                                        <td>{{ $historial->nombre_apellido }}</td>
                                        <td>{{ $historial->barrio}}</td>
                                        <td>{{ $historial->telefono }}</td>  
                                        <td>{{ $historial->genero }}</td> 
                                        <td>{{ $historial->estado_paciente }}</td>
                                         <td>{{ $historial->enfermedad_referencial }}</td>
                                         <td>{{ $historial->fecha_analisis }}</td>
                                        <td>{{ $historial->fecha_alta }}</td>  
                                        </div>
                                    </div>
                                        {!! Form::close() !!}
                                    </td>
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
</div>
</div>
</div>
@endsection
