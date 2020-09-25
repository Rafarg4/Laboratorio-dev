@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')

            <ol class="breadcrumb">
            <li class="breadcrumb-item"><strong>Historial de Pacientes Fallecidos</strong></li>
            </ol>
                 <div class="container-fluid">
                     <div class="animated fadeIn">
                                 @include('flash::message')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-header">
                                         <i class="fa fa-align-justify"></i>
                                        Lista de Pacientes Fallecidos
                                                 
                                        </div>
                                    <div class="card-body">
                                 <div class="table-responsive-sm">
                                <table class="table table-bordered" id="data-table">
                                    <thead>
                                        <tr>
                                    <th>Id Paciente</th>
                                    <th>Paciente</th>
                                    <th>Barrio</th>
                                     <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Estado</th>
                                    <th>Comorbilidad</th>
                                     <th>Fecha de Analisis</th>
                                    <th>Fecha de Alta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fallecidos as $fallecidos)
                                        <tr>
                                        <td>{{ $fallecidos->id }}</td> 
                                        <td>{{ $fallecidos->nombre_apellido }}</td>
                                        <td>{{ $fallecidos->barrio}}</td>
                                        <td>{{ $fallecidos->edad }}</td>  
                                        <td>{{ $fallecidos->genero }}</td> 
                                        <td><span class="badge badge-danger">{{ $fallecidos->estado_paciente }}</span></td>
                                         <td>{{ $fallecidos->enfermedad_referencial }}</td>
                                         <td>{{ $fallecidos->fecha_analisis }}</td>
                                        <td>{{ $fallecidos->fecha_alta }}</td>  
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
