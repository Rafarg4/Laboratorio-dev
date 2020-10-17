@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
  <br>
                 <div class="container-fluid">
                     <div class="animated fadeIn">
                                 @include('flash::message')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-header">
                                        <i class="fa fa-align-justify"></i>
                                       Detalles de paciente activo 
                                         <a href="{{ url('historial_activos') }}" class="btn btn-primary">Volver</a>
                                                 
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
                    <th><strong>Nombre y Apellidos:</strong> {{ $detalles->nombre_apellido }}</th>
                    <th><strong>Genero:</strong> {{ $detalles->genero }}</th>
                    <th><strong>Edad:</strong> {{ $detalles->edad }}</th>
                     <th><strong>Paciente ID:</strong> {{ $detalles->id }}</th>
                  
            
            </tr>
             <tr>
                  <th><strong>Ci:</strong> {{ $detalles->ci }}</th>
                   <th><strong>Fecha de Nacimiento:</strong> {{ $detalles->fechanac }}</th>
                  <th><strong>Resultado:</strong> <span class="badge badge-danger">{{ $detalles->resultado }}</span></th>
                  <th><strong>Barrio:</strong> {{ $detalles->barrio }}</th>
                </tr>
               <tr>
                <th><strong>Email:</strong> {{ $detalles->email }}</th>
                  <th><strong>Tipo de Prueba: </strong>{{ $detalles->tipo_prueba_id }}</th>
                   <th><strong>Telefono: </strong>{{ $detalles->telefono }}</th>
                   <th><strong>Grupo Sanguineo:</strong> {{ $detalles->grupo_sanguineo }}</th>
                 </tr>
                    <tr>
    
                   <th><strong>Comorbilidad:</strong> {{ $detalles->enfermedad_referencial }}</th>
                   <th><strong>Latitud:</strong> {{ $detalles->latitud }}</th>
                    <th><strong>Longitud:</strong> {{ $detalles->longitud }}</th>
                    
                </tr>
              </table>
              
               <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-address-book fa-2x"></i> <strong>Datos del control hecho al Paciente.</strong></th>
                </tr>
              </table>
               <table class="table table-bordered" id="data-table">
               <tr>

                     <th><strong>Estado: <span class="badge badge-warning">{{ $detalles->estado_paciente }}</span>
                    <th><strong>Recomendaciones:</strong> {{ $detalles->recomendacion }}</th>
                    <th><strong>Fecha de Alta: </strong>{{ $detalles->fecha_alta }}</th>
                       <th><strong>Fecha de Analisis: </strong>{{ $detalles->fecha_analisis }}</th>
                    </tr>
               </tr>
             </table>
                <table class="table table-bordered" id="data-table">
                  <th><i class="cil-hospital fa-2x"></i> <strong>Datos del Informe detallado de caso.</strong></th>
               <tr>
               </table>
               <table class="table table-bordered" id="data-table">
                <tr>
                    <th><strong>Codigo Region:</strong> {{ $detalles->codigo }}</th>

                    <th><strong>Region: </strong>{{ $detalles->region }}</th>
                    
                    <th><strong>Codigo Region:</strong> {{ $detalles->codigo_distrito }}</th>
               
                    <th><strong>Distrito:</strong> {{ $detalles->distrito }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Fecha de Notificacion:</strong> {{ $detalles->fecha_notificacion }}</th>
                
                    <th><strong>Medico:</strong> {{ $detalles->medico }}</th>
            
                    <th><strong>Edad Media:</strong> {{ $detalles->media_edad }}</th>
               
                    <th><strong>Residente:</strong> {{ $detalles->residente }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Hospedaje:</strong> {{ $detalles->hospedaje }}</th>
                   
                    <th><strong>Telefono Verificado:</strong> {{ $detalles->telefono_verificado }}</th>
    
                    <th><strong>Codigo Departamento:</strong> {{ $detalles->codigo_departamento }}</th>
            
                    <th><strong>Departamento:</strong> {{ $detalles->departamento }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Zona:</strong> {{ $detalles->zona }}</th>
               
                    <th><strong>Personal de Blanco:</strong> {{ $detalles->personal_de_blanco }}</th>

                    <th><strong>Albergue:</strong> {{ $detalles->albergue }}</th>
              
                    <th><strong>Lugar de Albergue:</strong> {{ $detalles->lugar_albergue }}</th>
                     </tr>
                <tr>
                      
               
                    <th><strong>Detalles de sintomas de Fiebre:</strong> {{ $detalles->sintomas_fiebre }}</th>
                 
                    <th><strong>Detalles de Hospitalizacion: </strong>{{ $detalles->hospitalizado }}</th>
                
                    <th><strong>Detalles de Comorbilidad:</strong> {{ $detalles->signo_sintoma }}</th>
              
                    <th><strong>Vacuna para la Influenza:</strong> {{ $detalles->vacuna_para_la_influenza }}</th>
                     </tr>
                <tr>
                      
    
                    <th><strong>Fecha de Vacunacion:</strong> {{ $detalles->fecha_vacunacion }}</th>
        
                    <th><strong>Viajo Resientemente:</strong> {{ $detalles->viajo_resiente }}</th>
                
                    <th><strong>Centro de Asistencia de Covid:</strong> {{ $detalles->centro_asistencia_covid }}</th>
                
                    <th><strong>Centro de Asistencia del Pais:</strong> {{ $detalles->centro_asistencia_pais }}</th>
                     </tr>
                <tr>
                      
              
                    <th><strong>Centro de Asistencia de la Ciudad:</strong> {{ $detalles->centro_asistencia_ciudad }}</th>
               
                    <th><strong>Nombre de Centro de Asistencia:</strong> {{ $detalles->nombre_centro_asistencia }}</th>
                
                    <th><strong>Fecha de Asistencia:</strong> {{ $detalles->fecha_asistida }}</th>
                
                    <th><strong>Contacto con Animales:</strong> {{ $detalles->contacto_con_animales }}</th>
                     </tr>
                <tr>
                      
                
                    <th><strong>Contacto con Personas:</strong> {{ $detalles->contacto_persona }}</th>
               
                    <th><strong>Tipo de Contacto:</strong> {{ $detalles->tipo_contacto }}</th>
               
                    <th><strong>Otro tipo de Contacto:</strong> {{ $detalles->contacto_otro }}</th>
                
                    <th><strong>Contacto con Infectado:</strong> {{ $detalles->contacto_con_infectado }}</th>
                     </tr>
                <tr>
                      

                    <th><strong>Datos del Contacto: </strong>{{ $detalles->dato_de_contacto }}</th>
                
                    <th><strong>Toma de Muestra: </strong>{{ $detalles->toma_de_muestra }}</th>
                
                    <th><strong>Laboratorio:</strong> {{ $detalles->laboratorio }}</th>
                
                    <th><strong>Numero de Pnatilla: </strong>{{ $detalles->nro_planilla }}</th>
                     </tr>
                <tr>
                    
                
                    <th><strong>Año:</strong> {{ $detalles->anho }}</th>
                
                    <th><strong>Responsable de Carga:</strong> {{ $detalles->responsable_de_carga }}</th>
                
                    <th><strong>Usuario de Laboratorio: </strong>{{ $detalles->usuario_lugar }}</th>
                </tr>
            </table>
             <table class="table table-bordered" id="data-table">
              <tr>
                <th><i class="cil-globe-alt fa-2x"></i> <strong>Geolocalizacion exsacta de Paciente.</strong></th>
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
            var map = L.map('mapid').setView([{{$detalles->latitud}} , {{$detalles->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$detalles->latitud}} , {{$detalles->longitud}}]);
            marker.bindPopup("Paciente:{{$detalles->nombre_apellido}}<br>Barrio:{{$detalles->barrio}}<br>Estado:{{$detalles->estado_paciente}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>
     @endsection  