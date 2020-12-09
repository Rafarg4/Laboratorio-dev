@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('controls.index') !!}">Control</a>
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
                              <i class="fas fa-align-justify"></i>
                              <strong>Editar Control</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($controls, ['route' => ['controls.update', $controls->id], 'method' => 'patch']) !!}

                              @include('controls.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection