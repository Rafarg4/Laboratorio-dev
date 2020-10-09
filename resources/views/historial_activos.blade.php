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
                                        Lista de Pacientes Activos
                                                 
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

                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($activos as $activos)
                                        <tr>
                                       
                                        <td>{{ $activos->id }}</td> 
                                        <td>{{ $activos->nombre_apellido }}</td>
                                        <td>{{ $activos->barrio}}</td>
                                        <td>{{ $activos->telefono }}</td>  
                                        <td>{{ $activos->genero }}</td> 
                                        <td><span class="badge badge-warning">{{ $activos->estado_paciente }}</span></td>
                                         <td>{{ $activos->enfermedad_referencial }}</td>
                                         <td>{{ $activos->fecha_analisis }}</td>
                                        <td>{{ $activos->fecha_alta }}</td>  
                                        </div>
                                    </div>
                                    <td>
                                       {!! Form::open() !!}
                                     <div class='btn-group'>
                                      <a href="{{ route('detalle_activos', [$activos->id]) }}" class="btn-floating btn-sm "><i class="cil-clipboard fa-2x"></i></a>
                                        {!! Form::close() !!}
                                      </div>
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
