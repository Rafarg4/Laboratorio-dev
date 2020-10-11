@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('controls.index') }}">Control</a>
            </li>
            <li class="breadcrumb-item active">Detalles</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                <i class="fa fa-align-justify"></i>
                                 Detalles de control
                                  <a href="{{ route('controls.index') }}" class="btn btn-primary">Volver</a>
                             </div>
                             <div class="card-body">
                                 @include('controls.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
