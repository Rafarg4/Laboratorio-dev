@extends('layouts.app')

@section('content')
<link href="{{ asset('css/all.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/flag.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/brand.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/free.min.css') }}"  rel="stylesheet">
<br>
<div class="container-fluid">
        <div class="animated fadeIn">
                    <!-- Widgets -->
        </div> 
             <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                    @foreach($recuperados as $recuperados)
                     <div class="text-value-lg"><i class="cil-eyedropper fa-2x"></i><td><span class="badge badge-info">{{$recuperados}}</span></td> </div><small class="text-muted text-uppercase font-weight-bold"> Recuperados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- /.col-->
                 @foreach($nuevo_casos as $nuevo_casos)
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="cil-medical-cross fa-2x"></i> <span class="badge badge-success">{{$nuevo_casos}}</span></div><small class="text-muted text-uppercase font-weight-bold"> Nuevos casos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- /.col-->
                   @foreach($infectados as $infectados)
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-bed fa-2x"></i> <span class="badge badge-warning">{{$infectados}}</span></div><small class="text-muted text-uppercase font-weight-bold"> Infectados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
    
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-heart fa-2x"></i> <span class="badge badge-primary">48%</span></div><small class="text-muted text-uppercase font-weight-bold"> Recuperados totales</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                   @foreach($muertos as $muertos)
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="cil-user-unfollow fa-2x"></i> <span class="badge badge-danger">{{$muertos}}</span></div><small class="text-muted text-uppercase font-weight-bold"> Fallecidos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                   @foreach($pacientes as $pacientes)
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-people fa-2x"></i>  <span class="badge badge-secondary">{{$pacientes}}</span></div><small class="text-muted text-uppercase font-weight-bold"> Pacientes</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar badge-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                 @foreach($caso_positivos as $caso_positivos)
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-hospital fa-2x"></i> <span class="badge badge-light">{{$caso_positivos}}</span></div><small class="text-muted text-uppercase font-weight-bold"> Casos Positivos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar badge-light" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-sort-ascending fa-2x"></i> <span class="badge badge-dark">+52%</span></div><small class="text-muted text-uppercase font-weight-bold"> Porcentaje de Infectados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar badge-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>  
      </div>
    </br>
           </br>

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection

@endsection
