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
                     <div class="text-value-lg"><i class="cil-eyedropper fa-2x"></i> 87</div><small class="text-muted text-uppercase font-weight-bold"> Recuperados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="cil-medical-cross fa-2x"></i> 385</div><small class="text-muted text-uppercase font-weight-bold"> Nuevos casos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="cil-bed fa-2x"></i> 123</div><small class="text-muted text-uppercase font-weight-bold"> Infectados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
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
                     <div class="text-value-lg"><i class="cil-heart fa-2x"></i> 28%</div><small class="text-muted text-uppercase font-weight-bold"> Recuperados totales</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="cil-user-unfollow fa-2x"></i> 5</div><small class="text-muted text-uppercase font-weight-bold"> Muertos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
