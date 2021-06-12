@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
  <br>
<!--script para imprimir fichas de pacientes-->
<script type="text/javascript">
  function printDiv(nombreDiv) {
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;

     window.print();

     document.body.innerHTML = contenidoOriginal;
}
</script>
<div id="areaImprimir">
                 <div class="container-fluid">
                     <div class="animated fadeIn">
                                 @include('flash::message')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-header">
                                         <i class="fa fa-align-justify"></i>
                                       Detalle de paciente Fallecido <a href="{{ url('listafallecidos') }}" class="btn btn-primary"><i class="cil-chevron-left"></i></a>
                                         <button type="button" onclick="printDiv('areaImprimir') "class="btn btn-danger"><i class="cil-clipboard"></i></button>
                                                 
                                        </div>
                                    <div class="card-body">
                                       
                <ul class="list-group">


                <!-- Nombre Field -->
                  <li class="list-group-item">
                 
              <table class="table table-bordered" id="data-table">
                   <tr><th><i class="cil-people fa-2x"></i> <strong>Datos Detallados de Paciente.</strong></th>
                   </tr>
                    <table class="table table-bordered" id="data-table">
                      <tr>
                    <th><strong>Nombre y Apellidos:</strong> {{ $fallecidos->nombre_apellido }}</th>
                    <th><strong>Genero:</strong> {{ $fallecidos->genero }}</th>
                    <th><strong>Edad:</strong> {{ $fallecidos->edad }}</th>
                     <th><strong>Paciente ID:</strong> {{ $fallecidos->id }}</th>
                  
            
            </tr>
             <tr>
                  <th><strong>Ci:</strong> {{ $fallecidos->ci }}</th>
                   <th><strong>Fecha de Nacimiento:</strong> {{ $fallecidos->fechanac }}</th>
                  <th><strong>Resultado:</strong> <span class="badge badge-danger">{{ $fallecidos->resultado }}</span></th>
                  <th><strong>Barrio:</strong> {{ $fallecidos->barrio }}</th>
                </tr>
               <tr>
                <th><strong>Email:</strong> {{ $fallecidos->email }}</th>
                  <th><strong>Tipo de Prueba: </strong>{{ $fallecidos->tipo_prueba_id }}</th>
                   <th><strong>Telefono: </strong>{{ $fallecidos->telefono }}</th>
                   <th><strong>Grupo Sanguineo:</strong> {{ $fallecidos->grupo_sanguineo }}</th>
                 </tr>
                    <tr>
    
                   <th><strong>Comorbilidad:</strong> {{ $fallecidos->enfermedad_referencial }}</th>
                   <th><strong>Latitud:</strong> {{ $fallecidos->latitud }}</th>
                    <th><strong>Longitud:</strong> {{ $fallecidos->longitud }}</th>
                    <th><strong>Usuario:</strong> {{ $fallecidos->usuario }}</th>
                    
                </tr>
              </table>
              
               <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-address-book fa-2x"></i> <strong>Datos del control hecho al Paciente.</strong></th>
                </tr>
              </table>
               <table class="table table-bordered" id="data-table">
               <tr>

                     <th><strong>Estado: <span class="badge badge-danger">{{ $fallecidos->estado_paciente }}</span>
                    <th><strong>Recomendaciones:</strong> {{ $fallecidos->recomendacion }}</th>
                    <th><strong>Fecha de Alta: </strong>{{ $fallecidos->fecha_alta }}</th>
                       <th><strong>Fecha de Analisis: </strong>{{ $fallecidos->fecha_analisis }}</th>
                    </tr>
               </tr>
             </table>
                <table class="table table-bordered" id="data-table">
                  <th><i class="cil-hospital fa-2x"></i> <strong>Datos del Informe detallado de caso.</strong></th>
               <tr>
               </table>
               <table class="table table-bordered" id="data-table">
                <tr>
                    <th><strong>Codigo Region:</strong> {{ $fallecidos->codigo }}</th>

                    <th><strong>Region: </strong>{{ $fallecidos->region }}</th>
                    
                    <th><strong>Codigo Region:</strong> {{ $fallecidos->codigo_distrito }}</th>
               
                    <th><strong>Distrito:</strong> {{ $fallecidos->distrito }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Fecha de Notificacion:</strong> {{ $fallecidos->fecha_notificacion }}</th>
                
                    <th><strong>Medico:</strong> {{ $fallecidos->medico }}</th>
            
                    <th><strong>Edad Media:</strong> {{ $fallecidos->media_edad }}</th>
               
                    <th><strong>Residente:</strong> {{ $fallecidos->residente }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Hospedaje:</strong> {{ $fallecidos->hospedaje }}</th>
                   
                    <th><strong>Telefono Verificado:</strong> {{ $fallecidos->telefono_verificado }}</th>
    
                    <th><strong>Codigo Departamento:</strong> {{ $fallecidos->codigo_departamento }}</th>
            
                    <th><strong>Departamento:</strong> {{ $fallecidos->departamento }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Zona:</strong> {{ $fallecidos->zona }}</th>
               
                    <th><strong>Personal de Blanco:</strong> {{ $fallecidos->personal_de_blanco }}</th>

                    <th><strong>Albergue:</strong> {{ $fallecidos->albergue }}</th>
              
                    <th><strong>Lugar de Albergue:</strong> {{ $fallecidos->lugar_albergue }}</th>
                     </tr>
                <tr>
                      
               
                    <th><strong>Detalles de sintomas de Fiebre:</strong> {{ $fallecidos->sintomas_fiebre }}</th>
                 
                    <th><strong>Detalles de Hospitalizacion: </strong>{{ $fallecidos->hospitalizado }}</th>
                
                    <th><strong>Detalles de Comorbilidad:</strong> {{ $fallecidos->signo_sintoma }}</th>
              
                    <th><strong>Vacuna para la Influenza:</strong> {{ $fallecidos->vacuna_para_la_influenza }}</th>
                     </tr>
                <tr>
                      
    
                    <th><strong>Fecha de Vacunacion:</strong> {{ $fallecidos->fecha_vacunacion }}</th>
        
                    <th><strong>Viajo Resientemente:</strong> {{ $fallecidos->viajo_reciente }}</th>
                
                    <th><strong>Centro de Asistencia de Covid:</strong> {{ $fallecidos->centro_asistencia_covid }}</th>
                
                    <th><strong>Centro de Asistencia del Pais:</strong> {{ $fallecidos->centro_asistencia_pais }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Centro de Asistencia de la Ciudad:</strong> {{ $fallecidos->centro_asistencia_ciudad }}</th>
               
                    <th><strong>Nombre de Centro de Asistencia:</strong> {{ $fallecidos->nombre_centro_asistencia }}</th>
                
                    <th><strong>Fecha de Asistencia:</strong> {{ $fallecidos->fecha_asistida }}</th>
                
                    <th><strong>Contacto con Animales:</strong> {{ $fallecidos->contacto_con_animales }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Contacto con Personas:</strong> {{ $fallecidos->contacto_persona }}</th>
               
                    <th><strong>Tipo de Contacto:</strong> {{ $fallecidos->tipo_contacto }}</th>
               
                    <th><strong>Otro tipo de Contacto:</strong> {{ $fallecidos->contacto_otro }}</th>
                
                    <th><strong>Contacto con Infectado:</strong> {{ $fallecidos->contacto_con_infectado }}</th>
                     </tr>
                <tr>
                      

                    <th><strong>Datos del Contacto: </strong>{{ $fallecidos->dato_de_contacto }}</th>
                
                    <th><strong>Toma de Muestra: </strong>{{ $fallecidos->toma_de_muestra }}</th>
                
                    <th><strong>Laboratorio: {{ $fallecidos->laboratorio }}</th>
                
                    <th><strong>Numero de Pnatilla: </strong>{{ $fallecidos->nro_planilla }}</th>
                     </tr>
                <tr>
                    
                
                    <th><strong>Año:</strong> {{ $fallecidos->anho }}</th>
                
                    <th><strong>Responsable de Carga:</strong> {{ $fallecidos->responsable_de_carga }}</th>
                
                    <th><strong>Usuario de Laboratorio: </strong>{{ $fallecidos->usuario_lugar }}</th>
                </tr>
            </table>
             <table class="table table-bordered" id="data-table">
              <tr>
                <th><i class="cil-globe-alt fa-2x"></i> <strong>Geolocalizacion exacta de Paciente.</strong></th>
              </tr>
                   
                   <tr>
                    <th>
                     <div id="mapid"></div>
                     </th>
                   </tr> 
                   
                </div>
              </table>
            </div>
           

         </div>

    </li>
    </ul>
    <style type="text/css">
                   #mapid { height: 350px; width:1310px; }
           </style>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" type="text/css">
            <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
          <script>
            var map = L.map('mapid').setView([{{$fallecidos->latitud}} , {{$fallecidos->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$fallecidos->latitud}} , {{$fallecidos->longitud}}]);
            marker.bindPopup("Paciente:{{$fallecidos->nombre_apellido}}<br>Barrio:{{$fallecidos->barrio}}<br>Estado:{{$fallecidos->estado_paciente}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>
     @endsection  