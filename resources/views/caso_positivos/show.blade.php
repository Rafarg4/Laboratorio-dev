@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('casoPositivos.index') }}">Caso Positivo</a>
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
                                 Detalles de Caso
                                  <a href="{{ route('casoPositivos.index') }}" class="btn btn-primary">Volver</a>
                                  <button type="button" onclick="printDiv('areaImprimir') "class="btn btn-info"><i class="cil-clipboard"></i> Ficha </button>
                             </div>
                             <div class="card-body">
                                 @include('caso_positivos.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
