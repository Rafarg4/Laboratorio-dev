@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Generar reportes graficos customs
        
                         </div>
                         <div class="card-body">
    <div id="contenedor" style="min-width: 20px; height: 450px; margin: 0 auto"></div>                       
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="example">
        <thead>
            <tr>
        <th>Nro Caso</th>
        <th>Paciente</th>
        <th>Codigo</th>
        <th>Region</th>
        <th>Codigo Distrito</th>
        <th>Distrito</th>
        <th>Fecha Notificacion</th>
        <th>Medico</th>
        <th>Media Edad</th>
        <th>Residente</th>
        <th>Hospedaje</th>
        <th>Telefono Verificado</th>
        <th>Codigo Departamento</th>
        <th>Departamento</th>
        <td>Zona</td>
        <td>Personal de blanco</td>
        <td>Albergue</td>
        <td>Lugar albergue</td>
        <td>Sintomas de fiebre</td>
        <td>Hospitalizado</td>
        <td>Signo y sintoma</td>
        <td>Vacuna para la influenza</td>
        <td>Fecha vacunacion</td>
        <td>Viaje residente</td>
        <td>Centro asistencia: covid</td>
        <td>Centro asistencia: pais</td>
        <td>Centro asistencia: ciudad</td>
        <td>Nombre centro de asistencia</td>
        <td>Fecha asistida</td>
        <td>Contacto con animales</td>
        <td>Contacto persona</td>
        <td>Tipo contacto</td>
        <td>Contacto con infectado</td>
        <td>Dato de contacto</td>
        <td>Toma de muestra</td>
        <td>Laboratorio</td>
        <td>Nro planilla</td>
        <td>Año</td>
        <td>Responsable de carga</td>
        <td>Usuario lugar</td>
                
            </tr>
        </thead>
        <tbody>
        @foreach($reporte as $casoPositivo)
            <tr>
            <td>{{ $casoPositivo->id }}</td>
            <td>{{ $casoPositivo->nombre_apellido }}</td>
            <td>{{ $casoPositivo->codigo }}</td>
            <td>{{ $casoPositivo->region }}</td>
            <td>{{ $casoPositivo->codigo_distrito }}</td>
            <td>{{ $casoPositivo->distrito }}</td>
            <td>{{ $casoPositivo->fecha_notificacion }}</td>
            <td>{{ $casoPositivo->medico }}</td>
            <td>{{ $casoPositivo->media_edad }}</td>
            <td>{{ $casoPositivo->residente }}</td>
            <td>{{ $casoPositivo->hospedaje }}</td>
            <td>{{ $casoPositivo->telefono_verificado }}</td>
            <td>{{ $casoPositivo->codigo_departamento }}</td>
            <td>{{ $casoPositivo->departamento }}</td>
            <td>{{ $casoPositivo->zona }}</td>
            <td>{{ $casoPositivo->personal_de_blanco }}</td>
            <td>{{ $casoPositivo->albergue }}</td>
            <td>{{ $casoPositivo->lugar_albergue }}</td>
            <td>{{ $casoPositivo->sintomas_fiebre }}</td>
            <td>{{ $casoPositivo->hospitalizado }}</td>
            <td>{{ $casoPositivo->signo_sintoma }}</td>
            <td>{{ $casoPositivo->vacuna_para_la_influenza }}</td>
            <td>{{ $casoPositivo->fecha_vacunacion }}</td>
            <td>{{ $casoPositivo->viajo_reciente }}</td>
            <td>{{ $casoPositivo->centro_asistencia_covid }}</td>
            <td>{{ $casoPositivo->centro_asistencia_pais }}</td>
            <td>{{ $casoPositivo->centro_asistencia_ciudad }}</td>
            <td>{{ $casoPositivo->nombre_centro_asistencia }}</td>
            <td>{{ $casoPositivo->fecha_asistida}}</td>
            <td>{{ $casoPositivo->contacto_con_animales }}</td>
            <td>{{ $casoPositivo->contacto_persona }}</td>
            <td>{{ $casoPositivo->tipo_contacto }}</td>
            <td>{{ $casoPositivo->contacto_con_infectado }}</td>
            <td>{{ $casoPositivo->dato_de_contacto }}</td>
            <td>{{ $casoPositivo->toma_de_muestra }}</td>
            <td>{{ $casoPositivo->laboratorio }}</td>
            <td>{{ $casoPositivo->nro_planilla }}</td>
            <td>{{ $casoPositivo->anho }}</td>
            <td>{{ $casoPositivo->responsable_de_carga }}</td>
            <td>{{ $casoPositivo->usuario_lugar }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
                    </br>
             </div>
         </div>
    </div>
<script type="text/javascript">
  $(document).ready(function () {
    // Create DataTable
    var table = $('#example').DataTable({
        dom: 'Pfrtip',   
     });
    // Create the chart with initial data
    var container = $('#contenedor').insertBefore(table.table().container());
 
    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Custom graphics',
        },
         tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        series: [
            {
                name: 'Detalles',
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(1, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="//code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
<!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
@endsection
