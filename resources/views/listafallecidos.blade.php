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
                                        Lista de Pacientes Fallecidos
                                                 
                                        </div>
                                    <div class="card-body">
                                 <div class="table-responsive-sm">
                                <table class="table table-bordered" id="data-table">
                                    <thead>
                                        <tr>
                                    <th>Nro Caso</th>
                                    <th>Paciente</th>
                                    <th>Barrio</th>
                                     <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Estado</th>
                                    <th>Comorbilidad</th>
                                     <th>Fecha de Analisis</th>
                                    <th>Fecha de Alta</th>
                                     <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
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
                                    <td>
                                       {!! Form::open() !!}
                                     <div class='btn-group'>
                                      <a href="{{ route('detalle_fallecidos', [$fallecidos->id]) }}" class="btn-floating btn-sm "><i class="cil-clipboard fa-2x"></i></a>
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
          </br>
    </div>
</div>
</div>
</div>
</div>
@endsection
