@extends('layouts.app')

@section('content')
 
<div class="container-fluid">

        <div class="animated fadeIn">

                    <!-- Widgets -->
        </div>
             <h4 class="card-title"><a><i class="fas fa-medkit fa-2x"></i>  Estatus de casos </h4>
              <div class="row">
                <div class="col-sm-6 col-md-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="fa fa-prescription-bottle-alt"></i> 87</div><small class="text-muted text-uppercase font-weight-bold"> Recuperados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-primay" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="fa fa-briefcase-medical"></i> 385</div><small class="text-muted text-uppercase font-weight-bold"> Nuevos casos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="fa fa-bed"></i> 123</div><small class="text-muted text-uppercase font-weight-bold"> Infectados</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="fa fa-band-aid"></i> 28%</div><small class="text-muted text-uppercase font-weight-bold"> Recuperados totales</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="fa fa-tired"></i> 5</div><small class="text-muted text-uppercase font-weight-bold"> Muertos</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
          <div class="card-body">

    <!-- Title -->
    
        <!-- Card -->
        <!-- Grafico de casos por barrio  -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>  
        <!-- optional -->  
        <script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <div class="card">
  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a><i class="fa fa-chart-bar fa-2x"></i>  Grafico de los casos por año segun el distrito </h4>
         <div class="container">
         <div id="container"></div>
         </div>
                <script type="text/javascript">
                        Highcharts.chart('container', {
                  chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Barrios mas afectados'
                  },
                  subtitle: {
                      text: 'Listado de casos por barrios por año'
                  },
                  xAxis: {
                      categories: ['Santa Maria', 'San Isidro', 'San Miguel', 'Quiteria', 'San Antonio '],
                      title: {
                          text: null
                      }
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantiadad total',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' Casos totales'
                  },
                  plotOptions: {
                      bar: {
                          dataLabels: {
                              enabled: true
                          }
                      }
                  },
                  legend: {
                      layout: 'vertical', 
                      align: 'right',
                      verticalAlign: 'top',
                      x: -40,
                      y: 80,
                      floating: true,
                      borderWidth: 1,
                      backgroundColor:
                          Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                      shadow: true
                  },
                  credits: {
                      enabled: false
                  },
                  series: [{
                      name: 'Año 2017',
                      data: [17, 31, 65, 9, 2]
                  }, {
                      name: 'Año 2018',
                      data: [13, 16, 97, 40, 6]
                  }, {
                      name: 'Año 2019',
                      data: [4, 8, 34, 72, 31]
                  }, {
                      name: 'Año 2020',
                      data: [12, 10, 46, 78, 40]
                  }]
              });
                            
            </script>
            </div>
            <div class="card-body">
            <h4 class="card-title"><a><i class="fa fa-chart-pie fa-2x"></i>   Grafico de los casos segun el genero </h4>
                            <div class="container">
                               <div id="containers"></div>
                               </div>
                                    <script type="text/javascript">
                              Highcharts.chart('containers', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Grafico por genero'
                },
                tooltip: {
                    pointFormat: 'Porcentaje por genero'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Femenino',
                        y: 62,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Masculino',
                        y: 84
                    }, {
                        name: 'Otros',
                        y: 4
                    }]
                }]
            });
                                            
          </script>
        </div>
         </div>
          <style type="text/css">
             #mapid { height: 680px; }
           </style>
             <div id="mapid"></div>
          <script type="text/javascript">
            var map = L.map('mapid').setView([-27.33056,  -55.86667], 15);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          L.marker([-27.33545, -55.864037]).addTo(map)
              .bindPopup('Casos Totales en Encarnacion 90.')
              .openPopup();
          </script>

                </div>
 
             </div>

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection

@endsection
