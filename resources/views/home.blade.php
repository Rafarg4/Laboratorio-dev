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
        <style type="text/css">
             #mapid { height: 680px; }
        </style>
        <br>
      <div class="col-sm-12 col-sm-2">     
        <div class="card">
         <div class="card-body">
          <h4 class="card-title"><a><i class="cil-map fa-2x"></i> <strong>Ubicacion de pacientes activos</strong> </h4>
              <div id="mapid"></div>
              </div>
        </div>
        </div>
      </div>
      <script type="text/javascript">
            var map = L.map('mapid').setView([-27.33056,  -55.86667], 12);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          L.marker([-27.337004949626625, -55.8664512669202]).addTo(map)
              .bindPopup('Encarnacion.')
          L.marker([-27.319619683648703, -55.88392256875523]).addTo(map)
              .bindPopup('Mboi ka e.')
          L.marker([-27.384266881102295, -55.823650377569734]).addTo(map)
              .bindPopup('San Isidro.')
          L.marker([-27.37017510957327, -55.844497689977295]).addTo(map)
              .bindPopup('Sagrada Familia')
          L.marker([-27.352422344233265, -55.8535003673751]).addTo(map)
              .bindPopup('Ciudad Nueva')
          L.marker([-27.30929907159278, -55.84188461070881]).addTo(map)
              .bindPopup('Chaipe')
          L.marker([-27.359401831819117, -55.76108931913041]).addTo(map)
              .bindPopup('Cambyreta')
          L.marker([-27.286366591508596, -55.8185577322729]).addTo(map)
              .bindPopup('Santa Maria')
          L.marker([-27.272838774583402, -55.928955076960854]).addTo(map)
              .bindPopup('Ita Paso')
          L.marker([-27.35787721652415, -55.853843690129004]).addTo(map)
              .bindPopup('Buena Vista')
          </script>

                </div>
             </div>
           </br>

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection

@endsection
