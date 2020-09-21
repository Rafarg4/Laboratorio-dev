@extends('layouts.app')
@section('content')
<br>
<link href="{{ asset('css/all.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/flag.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/brand.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/free.min.css') }}"  rel="stylesheet">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
        <!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
 <link rel="icon" type="image/png" href="/laboratorio.png" />
<div class="container">
 <div class="card">
   <!-- Card content -->
   <div class="card-body">
    <!-- Title -->
       <h4 class="card-title"><a><i class="cil-location-pin fa-2x"></i>  Grafico de los casos por año segun el distrito </h4>
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
       
      </div>    
        <div class="card">
         <div class="card-body">
            <h4 class="card-title"><a><i class="cil-wc fa-2x"></i>   Grafico de los casos segun el genero </h4>
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
</br>
@endsection
