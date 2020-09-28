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
       <h4 class="card-title"><a><i class="cil-location-pin fa-2x"></i> <strong>Grafico de los casos por año segun el Barrio.</strong> </h4>
       </div>
     </div>
     <div class="card">
   <!-- Card content -->
   <div class="card-body">
         <div class="container">
          <div id="container"></div>
            </div>
                <script type="text/javascript">
                        Highcharts.chart('container', {
                  chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Barrios mas afectados.'
                  },
                  subtitle: {
                      text: 'Listado de casos por barrios por año.'
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
                          text: 'Cantiadad total.',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' Casos totales.'
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
                      name: 'Recuperados',
                      data: [17, 31, 65, 9, 2]
                  }, {
                      name: 'Fallecidos',
                      data: [13, 16, 97, 40, 6]
                  }, {
                      name: 'Nuevos Casos',
                      data: [4, 8, 34, 72, 31]
                  }, {
                      name: 'Infectados',
                      data: [12, 10, 46, 78, 40]
                  }]
              });
                            
      </script>
    </div>
       
      </div>   
        <div class="card">
         <div class="card-body">
            <h4 class="card-title"><a><i class="cil-wc fa-2x"></i>   <strong>Grafico de los casos segun el genero.</strong> </h4>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="containers"></div>
                           </div>
                             <script type="text/javascript">
                               var masculino =  <?php echo json_encode($masculino) ?>;
                                var femenino =  <?php echo json_encode($femenino) ?>; 
                                var otro =  <?php echo json_encode($otro) ?>;  
                              Highcharts.chart('containers', {
                              chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Generos mas afectados'
                  },
                  subtitle: {
                      text: 'Listado de Generos'
                  },
                  xAxis: {
                      categories: ['Generos'],
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
                      valueSuffix: 'total'
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
                      y: 40,
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
                      name: 'Femenino',
                      data: femenino,
                  }, {
                      name: 'Masculino',
                      data: masculino,
                  }, {
                      name: 'Otro',
                      data: otro,
              
                  }]
              });
             
                                             
</script>
  </div>
    </div>    
      <div class="card">
         <div class="card-body">
            <h4 class="card-title"><a><i class="cil-calendar fa-2x"></i>  <strong>Grafico de casos Anuales,</strong> </h4>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="containerss"></div>
                           </div>
                             <script type="text/javascript">
                              Highcharts.chart('containerss', {

    chart: {
        type: 'column'
    },
    title: {
        text: 'Casos totales, Recuperados, Infectados'
    },
    subtitle: {
        text: 'Porcentaje de los casos'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Totales'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Detalles",
            colorByPoint: true,
            data: [
                {
                    name: "Recuperados",
                    y: 62.74,
                    drilldown: "Recuperados"
                },
                {
                    name: "Fallecidos",
                    y: 10.57,
                    drilldown: "Fallecidos"
                },
                {
                    name: "Casos Nuevo",
                    y: 7.23,
                    drilldown: "Casos Nuevo"
                },
                {
                    name: "Otros",
                    y: 5.58,
                    drilldown: "Otros"
                },
                
                {
                     name: "Infectados",
                    y: 7.62,
                    drilldown: null
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                name: "Internet Explorer",
                id: "Internet Explorer",
                data: [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                name: "Edge",
                id: "Edge",
                data: [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                name: "Opera",
                id: "Opera",
                data: [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});
              
      </script>
</div>
</br>
@endsection
