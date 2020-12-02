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
                                        Lista de Pacientes Recuperados
                                                 
                                        </div>
                                    <div class="card-body">
                                 <div class="table-responsive-sm">
                                <table class="table table-bordered" id="data-table">
                                    <thead>
                                        <tr>
                                    <th>Nro Caso</th>
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
                                    @foreach($historial as $historial)
                                        <tr>
                                       
                                        <td>{{ $historial->id }}</td> 
                                        <td>{{ $historial->nombre_apellido }}</td>
                                        <td>{{ $historial->barrio}}</td>
                                        <td>{{ $historial->telefono }}</td>  
                                        <td>{{ $historial->genero }}</td> 
                                        <td><span class="badge badge-primary">{{ $historial->estado_paciente }}</span></td>
                                         <td>{{ $historial->enfermedad_referencial }}</td>
                                         <td>{{ $historial->fecha_analisis }}</td>
                                        <td>{{ $historial->fecha_alta }}</td>  
                                        </div>
                                    </div>
                                    <td>
                                     {!! Form::open() !!}
                                     <div class='btn-group'>
                                      <a href="{{ route('detalle_inactivos', [$historial->id]) }}" class="btn-floating btn-sm "><center><i class="cil-clipboard fa-2x"></i></a>
                                        {!! Form::close() !!}
                                    </td></center>
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
