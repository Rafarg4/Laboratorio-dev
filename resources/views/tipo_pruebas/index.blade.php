@extends('layouts.app')

@section('content')
    <!--<ol class="breadcrumb">
        <li class="breadcrumb-item"><strong>Tipo Pruebas</strong></li>
    </ol>-->
      <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Tipo de Prueba
                             <a class="pull-right" href="{{ route('tipoPruebas.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('tipo_pruebas.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
                    </br>
             </div>
         </div>
    </div>
@endsection

