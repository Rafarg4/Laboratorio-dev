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
                   <tr><th><i class="cil-people fa-2x"></i> Datos Detallados de Paciente.</th>
                   </tr>
                    <table class="table table-bordered" id="data-table">
                      <tr>
                    <th>Nombre y Apellidos: {{ $detalles->nombre_apellido }}</th>
                    <th>Genero: {{ $detalles->genero }}</th>
                    <th>Edad: {{ $detalles->edad }}</th>
                     <th>Paciente ID: {{ $detalles->id }}</th>
                  
            
            </tr>
             <tr>
                  <th>Ci: {{ $detalles->ci }}</th>
                   <th>Fecha de Nacimiento: {{ $detalles->fechanac }}</th>
                  <th>Resultado: <span class="badge badge-danger">{{ $detalles->resultado }}</span></th>
                  <th>Barrio: {{ $detalles->barrio }}</th>
                </tr>
               <tr>
                <th>Email: {{ $detalles->ci }}</th>
                  <th>Tipo de Prueba: {{ $detalles->grupo_sanguineo }}</th>
                   <th>Telefono: {{ $detalles->fechanac }}</th>
                   <th>Grupo Sanguineo: {{ $detalles->grupo_sanguineo }}</th>
                 </tr>
                    <tr>
    
                   <th>Comorbilidad: {{ $detalles->enfermedad_referencial }}</th>
                   <th>Latitud: {{ $detalles->latitud }}</th>
                    <th>Longitud: {{ $detalles->longitud }}</th>
                    
                </tr>
              </table>
              
               <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-address-book fa-2x"></i> Datos del control hecho al Paciente.</th>
                </tr>
              </table>
               <table class="table table-bordered" id="data-table">
               <tr>

                     <th>Estado: <span class="badge badge-warning">{{ $detalles->estado_paciente }}</span>
                    <th>Recomendaciones: {{ $detalles->recomendacion }}</th>
                    <th>Fecha de Alta: {{ $detalles->fecha_alta }}</th>
                       <th>Fecha de Analisis: {{ $detalles->fecha_analisis }}</th>
                    </tr>
               </tr>
             </table>
                <table class="table table-bordered" id="data-table">
                  <th><i class="cil-hospital fa-2x"></i> Datos del Informe detallado de caso.</th>
               <tr>
               </table>
               <table class="table table-bordered" id="data-table">
                <tr>
                    <th>Codigo Region: {{ $detalles->codigo }}</th>

                    <th>Region: {{ $detalles->region }}</th>
                    
                    <th>Codigo Region: {{ $detalles->codigo_distrito }}</th>
               
                    <th>Distrito: {{ $detalles->distrito }}</th>
                     </tr>
                <tr>
                      
              
                    <th>Fecha de Notificacion: {{ $detalles->fecha_notificacion }}</th>
                
                    <th>Medico: {{ $detalles->medico }}</th>
            
                    <th>Edad Media: {{ $detalles->media_edad }}</th>
               
                    <th>Residente: {{ $detalles->residente }}</th>
                     </tr>
                <tr>
                      
                
                    <th>Hospedaje: {{ $detalles->hospedaje }}</th>
                   
                    <th>Telefono Verificado: {{ $detalles->telefono_verificado }}</th>
    
                    <th>Codigo Departamento: {{ $detalles->codigo_departamento }}</th>
            
                    <th>Departamento: {{ $detalles->departamento }}</th>
                     </tr>
                <tr>
                      
                
                    <th>Zona: {{ $detalles->zona }}</th>
               
                    <th>Personal de Blanco: {{ $detalles->personal_de_blanco }}</th>

                    <th>Albergue: {{ $detalles->albergue }}</th>
              
                    <th>Lugar de Albergue: {{ $detalles->lugar_albergue }}</th>
                     </tr>
                <tr>
                      
               
                    <th>Detalles de sintomas de Fiebre: {{ $detalles->sintomas_fiebre }}</th>
                 
                    <th>Detalles de Hospitalizacion: {{ $detalles->hospitalizado }}</th>
                
                    <th>Detalles de Comorbilidad: {{ $detalles->signo_sintoma }}</th>
              
                    <th>Vacuna para la Influenza: {{ $detalles->vacuna_para_la_influenza }}</th>
                     </tr>
                <tr>
                      
    
                    <th>Fecha de Vacunacion: {{ $detalles->fecha_vacunacion }}</th>
        
                    <th>Viajo Resientemente: {{ $detalles->viajo_resiente }}</th>
                
                    <th>Centro de Asistencia de Covid: {{ $detalles->centro_asistencia_covid }}</th>
                
                    <th>Centro de Asistencia del Pais: {{ $detalles->centro_asistencia_pais }}</th>
                     </tr>
                <tr>
                      
              
                    <th>Centro de Asistencia de la Ciudad: {{ $detalles->centro_asistencia_ciudad }}</th>
               
                    <th>Nombre de Centro de Asistencia: {{ $detalles->nombre_centro_asistencia }}</th>
                
                    <th>Fecha de Asistencia: {{ $detalles->fecha_asistida }}</th>
                
                    <th>Contacto con Animales: {{ $detalles->contacto_con_animales }}</th>
                     </tr>
                <tr>
                      
                
                    <th>Contacto con Personas: {{ $detalles->contacto_persona }}</th>
               
                    <th>Tipo de Contacto: {{ $detalles->tipo_contacto }}</th>
               
                    <th>Otro tipo de Contacto: {{ $detalles->contacto_otro }}</th>
                
                    <th>Contacto con Infectado: {{ $detalles->contacto_con_infectado }}</th>
                     </tr>
                <tr>
                      

                    <th>Datos del Contacto{{ $detalles->dato_de_contacto }}</th>
                
                    <th>Toma de Muestra: {{ $detalles->toma_de_muestra }}</th>
                
                    <th>Laboratorio: {{ $detalles->laboratorio }}</th>
                
                    <th>Numero de Pnatilla:{{ $detalles->nro_planilla }}</th>
                     </tr>
                <tr>
                    
                
                    <th>Año{{ $detalles->anho }}</th>
                
                    <th>Responsable de Carga: {{ $detalles->responsable_de_carga }}</th>
                
                    <th>Usuario de Laboratorio: {{ $detalles->usuario_lugar }}</th>
                </tr>
            </table>
             <table class="table table-bordered" id="data-table">
              <tr>
                <th><i class="cil-globe-alt fa-2x"></i> Geolocalizacion exsacta de Paciente.</th>
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