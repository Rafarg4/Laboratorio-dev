@extends('layouts.app')

<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<script>
     $(document).ready(function() {
        $('#data').DataTable( {
            "pageLength":5,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
         
         dom: 'Bfrtip',
            buttons: [
             {extend:'csv',
            className: 'btn aqua-gradient'},
             {extend:'excel',
            className: 'btn aqua-gradient'} 
            ]
        } );
} );
    </script>

   <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Reporte de Casos Positivos
                             
                         </div>
                         <div class="card-body">
                             <div class="table-responsive-sm">
     <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="data">
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
        @foreach($casos as $casoPositivo)
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
             </div>
         </div>
    </div>
@endsection
