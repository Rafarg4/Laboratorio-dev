@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('tipoPruebas.index') !!}">Tipo Prueba</a>
          </li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Tipo Prueba</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($tipoPrueba, ['route' => ['tipoPruebas.update', $tipoPrueba->id], 'method' => 'patch']) !!}

                              @include('tipo_pruebas.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection