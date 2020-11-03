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
       <h6 class="card-title"><a><i class="cil-map fa-2x"></i> <strong>Detalles de los barrios mas afectados.</strong> </h6>
       </div>
     </div>
     <div class="card">
   <!-- Card content -->
   <div class="card-body">
         <div class="container">
          <div id="container"></div>
            </div>
                <script type="text/javascript">
                  var encarnacion =  <?php echo json_encode($encarnacion) ?>;
                          var chaipe =  <?php echo json_encode($chaipe) ?>;
                          var cambyreta =  <?php echo json_encode($cambyreta) ?>;
                          var mboikae =  <?php echo json_encode($mboikae) ?>;
                          var sanisidro =  <?php echo json_encode($sanisidro) ?>;
                          var sagradafamilia =  <?php echo json_encode($sagradafamilia) ?>;
                          var ciudadnueva =  <?php echo json_encode($ciudadnueva) ?>;
                          var santamaria =  <?php echo json_encode($santamaria) ?>;
                          var itapaso =  <?php echo json_encode($itapaso) ?>;
                          var buenavista =  <?php echo json_encode($buenavista) ?>;
                          var santamaria =  <?php echo json_encode($santamaria) ?>;
                          var fatima =  <?php echo json_encode($fatima) ?>;

                        Highcharts.chart('container', {

                          

                  chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Barrios mas afectados.'
                  },
                  subtitle: {
                      text: 'Listado de casos por distrito.'
                  },
                  xAxis: {
                      categories: ['Nov', 'Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Oct'],
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
                  
                      credits: {
                          enabled: false
                      },
                      series: [{
                          name: 'Encarnacion',
                          data: encarnacion,
                      }, {
                          name: 'Chaipe',
                          data: chaipe,
                      }, {
                      name: 'Cambyreta',
                      data: cambyreta,
                      }, {
                      name: 'Mboi_kae',
                      data: mboikae,
                      }, {
                      name: 'Sagrada Familia',
                      data: sagradafamilia,
                      }, {
                      name: 'Ciudad nueva',
                      data: ciudadnueva,
                       }, {
                      name: 'Itapaso',
                      data: itapaso,
                      }, {
                      name: 'Buena vista',
                      data: buenavista,
                      }, {
                      name: 'Fatima',
                      data: fatima,
                      }, {
                      name: 'San Isidro',
                      data: sanisidro,
                  }]
              });
                            
      </script>
    </div>
       
      </div>   
        <div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-user-clock fa-2x"></i>  <strong>Grafico de estados de casos diarios.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="casos_diarios"></div>
                           </div>
                           <script type="text/javascript">
                            var muertos =  <?php echo json_encode($muertos) ?>;
                          var infectados =  <?php echo json_encode($infectados) ?>;
                          var recuperados =  <?php echo json_encode($recuperados) ?>;
                             Highcharts.chart('casos_diarios', {
                                chart: {
                                    type: 'area',
                                    inverted: true
                                },
                                title: {
                                    text: 'Detalles de los casos diarios'
                                },
                                accessibility: {
                                    keyboardNavigation: {
                                        seriesNavigation: {
                                            mode: 'serialize'
                                        }
                                    }
                                },
                                
                                xAxis: {
                                    categories: [
                                        'Sunday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thursday',
                                        'Friday',
                                        'Saturday',
                                        'Monday'
                                    ]
                                },
                                yAxis: {
                                    title: {
                                        text: 'Cantidades'
                                    },
                                    allowDecimals: false,
                                    min: 0
                                },
                                plotOptions: {
                                    area: {
                                        fillOpacity: 0.5
                                    }
                                },
                                series: [{
                                    name: 'Recuperados',
                                    data: recuperados,
                                }, {
                                    name: 'Infectados',
                                    data: infectados,
                                 }, {
                                    name: 'Muertos',
                                    data: muertos,
                                }]
                            });
              
                           </script>  
                         </div>
                       </div>
      <div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-procedures fa-2x"></i>  <strong>Cantidades de estados de casos.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="containerss"></div>
                           </div>
                             <script type="text/javascript">
                          var muertos =  <?php echo json_encode($muertos) ?>;
                          var infectados =  <?php echo json_encode($infectados) ?>;
                          var recuperados =  <?php echo json_encode($recuperados) ?>;
                          var eleccion =  <?php echo json_encode($eleccion) ?>;
                          var otro_estado =  <?php echo json_encode($otro_estado) ?>;

                         Highcharts.chart('containerss', {

                  chart: {
                      type: 'column'
                  },
                  title: {
                      text: 'Cantidades totales de Recuperados, Infectados, Fallecidos, Sin Eleccion, Otros.'
                  },
                  subtitle: {
                      text: 'Mas detalles'
                  },
                  xAxis: {
                     categories: ['Sunday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thursday',
                                        'Friday',
                                        'Saturday',
                                        'Monday'],
                      crosshair: true
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantidades'
                      }
                  },
                   
                  plotOptions: {
                      column: {
                          pointPadding: 0.2,
                          borderWidth: 0
                      }
                  },
                  series: [{
                      name: 'Recuperados',
                      data: recuperados,

                  }, {
                      name: 'Fallecidos',
                      data: muertos,

                  }, {
                      name: 'Infectados',
                      data: infectados,
                  }, {
                     name: 'Sin eleccion',
                     data: eleccion,
                  }, {
                     name: 'Otro',
                     data: otro_estado,

                  }]
              });
                            
      </script>
</div>
</div>
<div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="cil-wc fa-2x"></i>   <strong>Grafico de los casos segun el genero.</strong> </h6>
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
                          text: 'Cantidad total',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' total'
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
                      name: 'Otros',
                      data: otro,
              
                  }]
              });                                   
</script>
  </div>
    </div>    
</br>
@endsection
