@extends('layouts.app')

@section('content')
<div class="font-up-bold text-uppercase">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('tipoPruebas.index') !!}"><strong>Tipo Prueba</strong></a>
      </li>
      <li class="breadcrumb-item active"><strong>Crear</strong></li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                               <i class="fas fa-align-justify"></i>
                                <strong>Crear Tipo Prueba</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'tipoPruebas.store']) !!}

                                   @include('tipo_pruebas.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
