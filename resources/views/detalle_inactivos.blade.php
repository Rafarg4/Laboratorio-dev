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
                                       Detalle de paciente Inactivo 
                                        <a href="{{ url('historial_recuperados') }}" class="btn btn-primary"><i class="cil-chevron-left"></i></a>
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
                    <th><strong>Nombre y Apellidos:</strong> {{ $inactivos->nombre_apellido }}</th>
                    <th><strong>Genero:</strong> {{ $inactivos->genero }}</th>
                    <th><strong>Edad:</strong> {{ $inactivos->edad }}</th>
                     <th><strong>Paciente ID:</strong> {{ $inactivos->id }}</th>
                  
            
            </tr>
             <tr>
                  <th><strong>Ci:</strong> {{ $inactivos->ci }}</th>
                   <th><strong>Fecha de Nacimiento:</strong> {{ $inactivos->fechanac }}</th>
                  <th><strong>Resultado:</strong> <span class="badge badge-danger">{{ $inactivos->resultado }}</span></th>
                  <th><strong>Barrio:</strong> {{ $inactivos->barrio }}</th>
                </tr>
               <tr>
                <th><strong>Email:</strong> {{ $inactivos->email }}</th>
                  <th><strong>Tipo de Prueba: </strong>{{ $inactivos->tipo_prueba_id }}</th>
                   <th><strong>Telefono: </strong>{{ $inactivos->telefono }}</th>
                   <th><strong>Grupo Sanguineo:</strong> {{ $inactivos->grupo_sanguineo }}</th>
                 </tr>
                    <tr>
    
                   <th><strong>Comorbilidad:</strong> {{ $inactivos->enfermedad_referencial }}</th>
                   <th><strong>Latitud:</strong> {{ $inactivos->latitud }}</th>
                    <th><strong>Longitud:</strong> {{ $inactivos->longitud }}</th>
                    <th><strong>Usuario:</strong> {{ $inactivos->usuario }}</th>
                    
                </tr>
              </table>
              
               <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-address-book fa-2x"></i> <strong>Datos del control hecho al Paciente.</strong></th>
                </tr>
              </table>
               <table class="table table-bordered" id="data-table">
               <tr>

                     <th><strong>Estado: <span class="badge badge-primary">{{ $inactivos->estado_paciente }}</span>
                    <th><strong>Recomendaciones:</strong> {{ $inactivos->recomendacion }}</th>
                    <th><strong>Fecha de Alta: </strong>{{ $inactivos->fecha_alta }}</th>
                       <th><strong>Fecha de Analisis: </strong>{{ $inactivos->fecha_analisis }}</th>
                    </tr>
               </tr>
             </table>
                <table class="table table-bordered" id="data-table">
                  <th><i class="cil-hospital fa-2x"></i> <strong>Datos del Informe detallado de caso.</strong></th>
               <tr>
               </table>
               <table class="table table-bordered" id="data-table">
                <tr>
                    <th><strong>Codigo Region:</strong> {{ $inactivos->codigo }}</th>

                    <th><strong>Region: </strong>{{ $inactivos->region }}</th>
                    
                    <th><strong>Codigo Region:</strong> {{ $inactivos->codigo_distrito }}</th>
               
                    <th><strong>Distrito:</strong> {{ $inactivos->distrito }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Fecha de Notificacion:</strong> {{ $inactivos->fecha_notificacion }}</th>
                
                    <th><strong>Medico:</strong> {{ $inactivos->medico }}</th>
            
                    <th><strong>Edad Media:</strong> {{ $inactivos->media_edad }}</th>
               
                    <th><strong>Residente:</strong> {{ $inactivos->residente }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Hospedaje:</strong> {{ $inactivos->hospedaje }}</th>
                   
                    <th><strong>Telefono Verificado:</strong> {{ $inactivos->telefono_verificado }}</th>
    
                    <th><strong>Codigo Departamento:</strong> {{ $inactivos->codigo_departamento }}</th>
            
                    <th><strong>Departamento:</strong> {{ $inactivos->departamento }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Zona:</strong> {{ $inactivos->zona }}</th>
               
                    <th><strong>Personal de Blanco:</strong> {{ $inactivos->personal_de_blanco }}</th>

                    <th><strong>Albergue:</strong> {{ $inactivos->albergue }}</th>
              
                    <th><strong>Lugar de Albergue:</strong> {{ $inactivos->lugar_albergue }}</th>
                     </tr>
                <tr>
                      
               
                    <th><strong>Inactivos de sintomas de Fiebre:</strong> {{ $inactivos->sintomas_fiebre }}</th>
                 
                    <th><strong>Inactivos de Hospitalizacion: </strong>{{ $inactivos->hospitalizado }}</th>
                
                    <th><strong>Inactivos de Comorbilidad:</strong> {{ $inactivos->signo_sintoma }}</th>
              
                    <th><strong>Vacuna para la Influenza:</strong> {{ $inactivos->vacuna_para_la_influenza }}</th>
                     </tr>
                <tr>
                      
    
                    <th><strong>Fecha de Vacunacion:</strong> {{ $inactivos->fecha_vacunacion }}</th>
        
                    <th><strong>Viajo Resientemente:</strong> {{ $inactivos->viajo_reciente }}</th>
                
                    <th><strong>Centro de Asistencia de Covid:</strong> {{ $inactivos->centro_asistencia_covid }}</th>
                
                    <th><strong>Centro de Asistencia del Pais:</strong> {{ $inactivos->centro_asistencia_pais }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Centro de Asistencia de la Ciudad:</strong> {{ $inactivos->centro_asistencia_ciudad }}</th>
               
                    <th><strong>Nombre de Centro de Asistencia:</strong> {{ $inactivos->nombre_centro_asistencia }}</th>
                
                    <th><strong>Fecha de Asistencia:</strong> {{ $inactivos->fecha_asistida }}</th>
                
                    <th><strong>Contacto con Animales:</strong> {{ $inactivos->contacto_con_animales }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Contacto con Personas:</strong> {{ $inactivos->contacto_persona }}</th>
               
                    <th><strong>Tipo de Contacto:</strong> {{ $inactivos->tipo_contacto }}</th>
               
                    <th><strong>Otro tipo de Contacto:</strong> {{ $inactivos->contacto_otro }}</th>
                
                    <th><strong>Contacto con Infectado:</strong> {{ $inactivos->contacto_con_infectado }}</th>
                     </tr>
                <tr>
                      

                    <th><strong>Datos del Contacto: </strong>{{ $inactivos->dato_de_contacto }}</th>
                
                    <th><strong>Toma de Muestra: </strong>{{ $inactivos->toma_de_muestra }}</th>
                
                    <th><strong>Laboratorio:</strong> {{ $inactivos->laboratorio }}</th>
                
                    <th><strong>Numero de Pnatilla: </strong>{{ $inactivos->nro_planilla }}</th>
                     </tr>
                <tr>
                    
                
                    <th><strong>Año:</strong> {{ $inactivos->anho }}</th>
                
                    <th><strong>Responsable de Carga:</strong> {{ $inactivos->responsable_de_carga }}</th>
                
                    <th><strong>Usuario de Laboratorio: </strong>{{ $inactivos->usuario_lugar }}</th>
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
            var map = L.map('mapid').setView([{{$inactivos->latitud}} , {{$inactivos->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$inactivos->latitud}} , {{$inactivos->longitud}}]);
            marker.bindPopup("Paciente:{{$inactivos->nombre_apellido}}<br>Barrio:{{$inactivos->barrio}}<br>Estado:{{$inactivos->estado_paciente}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>
     @endsection  