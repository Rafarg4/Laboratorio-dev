<div class="table-responsive-sm">
<ul class="list-group">
  <li class="list-group-item">
     <table class="table table-bordered" id="data-table">
                   <tr><th><i class="cil-people fa-2x"></i> <strong>Datos Detallados de Paciente.</strong></th>
                   </tr>

  <table class="table table-bordered" id="data-table">
<!-- Nombre Field -->
 
<tr>
    <th><strong>Datos Personales: </strong>{{ $casoPositivos->nombre_apellido }}</th>
<!-- Genero Field -->

    <th><strong>Genero: </strong>{{ $casoPositivos->genero }}</th>

<!-- Fechanac Field -->

    <th><strong>Fecha de Nacimiento: </strong>{{ $casoPositivos->fechanac }}</th>

<!-- Edad Field -->

    <th><strong>Edad: </strong>{{ $casoPositivos->edad }}</th>
</tr>
<tr>
<!-- Ci Field -->

    <th><strong>Ci: </strong>{{ $casoPositivos->ci }}</th>

    <th><strong>Barrio: </strong>{{ $casoPositivos->barrio }}</th>

    <th><strong>Telefono: </strong>{{ $casoPositivos->telefono }}</p>
<!-- Email field -->

    <th><strong>Email: </strong>{{ $casoPositivos->email }}</th>
</tr>

<!-- Grupo Sanguineo Field -->
<tr>
    <th><strong>Grupo Sanguineo: </strong>{{ $casoPositivos->grupo_sanguineo }}</th>

<!-- Enfermedad Referencial Field -->

    <th><strong>Comorbilidad: </strong>{{ $casoPositivos->enfermedad_referencial }}</th>

  
    <th><strong>Resultado: </strong> @switch(true)
           @case($casoPositivos->resultado == 'Negativo')
            <span class="badge badge-primary"> {{ $casoPositivos->resultado }} </span>
            @break
            @case($casoPositivos->resultado == 'Positivo')
            <span class="badge badge-danger"> {{ $casoPositivos->resultado }} </span>
            @break
            @case($casoPositivos->resultado == 'Otro' )
            <span class="badge badge-info"> {{ $casoPositivos->resultado }} </span>
            @break
            @case($casoPositivos->resultado == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $casoPositivos->resultado }} </span>
            @break
            @endswitch</th>
             <th><strong>Latitud: </strong>{{ $casoPositivos->latitud }}</th>
</tr>
<tr>

   

    <th><strong>Longitud: </strong> {{ $casoPositivos->longitud }}</th>

<!-- Created At Field -->
  
  <th><strong>Usuario: </strong>{{ $casoPositivos->usuario }}</th>
</tr>

   
     <table class="table table-bordered" id="data-table">
                   <tr><th><i class="cil-hospital fa-2x"></i> <strong>Datos Detallados de Casos Positivos</strong></th>
                   </tr>
               </table>
<table class="table table-bordered" id="data-table">
<!-- Nombre Field -->
<tr>

<!-- Paciente Id Field -->
<th><strong>Datos Personales: </strong>{{ $casoPositivos->nombre_apellido }}</th>

<!-- Codigo Field -->

<th><strong>Codigo: </strong>{{ $casoPositivos->codigo }}</th>

<!-- Region Field -->

<th><strong>Región: </strong>{{ $casoPositivos->region }}</th>

<!-- Codigo Distrito Field -->

<th><strong>Codigo: </strong>{{ $casoPositivos->codigo_distrito }}</th>
</tr>
<tr>

<!-- Distrito Field -->
<th><strong>Distrito: </strong>{{ $casoPositivos->distrito }}</th>

<!-- Fecha Notificacion Field -->
<th><strong>Fecha Notificación: </strong>{{ $casoPositivos->fecha_notificacion }}</th>

<!-- Medico Field -->
<th><strong>Médico: </strong>{{ $casoPositivos->medico }}</th>

<!-- Media Edad Field -->
<th><strong>Media Edad: </strong>{{ $casoPositivos->media_edad }}</th>

</tr>
<tr>
<!-- Residente Field -->
<th><strong>Residente: </strong>{{ $casoPositivos->residente }}</th>

<!-- Hospedaje Field -->
<th><strong>Hospedaje: </strong>{{ $casoPositivos->hospedaje }}</th>

<!-- Telefono Verificado Field -->
<th><strong>Telefono Verificado: </strong>{{ $casoPositivos->telefono_verificado }}</th>

<!-- Codigo Departamento Field -->
<th><strong>Codigo Departamento: </strong>{{ $casoPositivos->codigo_departamento }}</th>
</tr>
<tr>
<!-- Departamento Field -->
<th><strong>Departamento: </strong>{{ $casoPositivos->departamento }}</th>

<!-- Zona Field -->
<th><strong>Zona: </strong>{{ $casoPositivos->zona }}</th>

<!-- Personal De Blanco Field -->
<th><strong>Personal de Blanco: </strong>{{ $casoPositivos->personal_de_blanco }}</th>

<!-- Albergue Field -->
<th><strong>Albergue: </strong>{{ $casoPositivos->albergue }}</th>
</tr>
<tr>
<!-- Lugar Albergue Field -->
<th><strong>Lugar Albergue: </strong>{{ $casoPositivos->lugar_albergue }}</th>

<!-- Sintomas Fiebre Field -->
<th><strong>Sintomas Fiebre: </strong>{{ $casoPositivos->sintomas_fiebre }}</th>

<!-- Hospitalizado Field -->
<th><strong>Hospitalizado: </strong>{{ $casoPositivos->hospitalizado }}</th>

<!-- Signo Sintoma Field -->
<th><strong>Signo Sintoma: </strong>{{ $casoPositivos->signo_sintoma }}</th>
</tr>
<tr>
<!-- Vacuna Para La Influenza Field -->
<th><strong>Vacuna para la influenza: </strong>{{ $casoPositivos->vacuna_para_la_influenza }}</th>

<!-- Fecha Vacunacion Field -->
<th><strong>Fecha de Vacunación: </strong>{{ $casoPositivos->fecha_vacunacion }}</th>

<!-- Viajo Resiente Field -->
<th><strong>Viajo reciente: </strong>{{ $casoPositivos->viajo_reciente }}</th>

<!-- Centro Asistencia Covid Field -->
<th><strong>Centro de asistencia Covid: </strong>{{ $casoPositivos->centro_asistencia_covid }}</th>
</tr>
<tr>
<!-- Centro Asistencia Pais Field -->
<th><strong>Centro de asistena pais: </strong>{{ $casoPositivos->centro_asistencia_pais }}</th>

<!-- Centro Asistencia Ciudad Field -->
<th><strong>Centro de asistencia ciudad: </strong>{{ $casoPositivos->centro_asistencia_ciudad }}</th>

<!-- Nombre Centro Asistencia Field -->
<th><strong>Nombre centro de asistencia: </strong>{{ $casoPositivos->nombre_centro_asistencia }}</th>

<!-- Fecha Asistida Field -->
<th><strong>Fecha asistencia: </strong>{{ $casoPositivos->fecha_asistida }}</th>
</tr>
<tr>
<!-- Contacto Con Animales Field -->
<th><strong>Contacto con animales: </strong>{{ $casoPositivos->contacto_con_animales }}</th>

<!-- Contacto Persona Field -->
<th><strong>Contacto persona: </strong>{{ $casoPositivos->contacto_persona }}</th>

<!-- Tipo Contacto Field -->
<th><strong>Tipo contacto: </strong>{{ $casoPositivos->tipo_contacto }}</th>

<!-- Contacto Otro Field -->
<th><strong>Contacto otro: </strong>{{ $casoPositivos->contacto_otro }}</th>
</tr>
<tr>
<!-- Contacto Con Infectado Field -->
<th><strong>Contacto con infectado: </strong>{{ $casoPositivos->contacto_con_infectado }}</th>

<!-- Dato De Contacto Field -->
<th><strong>Dato de contacto: </strong>{{ $casoPositivos->dato_de_contacto }}</th>

<!-- Toma De Muestra Field -->
<th><strong>Toma de muestra: </strong>{{ $casoPositivos->toma_de_muestra }}</th>

<!-- Laboratorio Field -->
<th><strong>Laboratorio: </strong>{{ $casoPositivos->laboratorio }}</th>
</tr>
<tr>
<!-- Nro Planilla Field -->
<th><strong>Nro. planilla: </strong>{{ $casoPositivos->nro_planilla }}</th>

<!-- Anho Field -->
<th><strong>Año: </strong>{{ $casoPositivos->anho }}</th>

<!-- Responsable De Carga Field -->
<th><strong>Responsable de carga: </strong>{{ $casoPositivos->responsable_de_carga }}</th>

<!-- Usuario Lugar Field -->
<th><strong>Usuario lugar: </strong>{{ $casoPositivos->usuario_lugar }}</th>
</tr>
<tr>
</tr>
</ul>
</li>
</table>
<table class="table table-bordered" id="data-table">
              <tr>
                <th><i class="cil-globe-alt fa-2x"></i> <strong>Geolocalizacion exacta de Caso Positivo.</strong></th>
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
   </div>
    <style type="text/css">
                   #mapid { height: 350px; width:1310px; }
           </style>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" type="text/css">
            <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
          <script>
            var map = L.map('mapid').setView([{{$casoPositivos->latitud}} , {{$casoPositivos->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$casoPositivos->latitud}} , {{$casoPositivos->longitud}}]);
            marker.bindPopup("Caso:{{$casoPositivos->nombre_apellido}}<br>Barrio:{{$casoPositivos->barrio}}<br>Resultado:{{$casoPositivos->resultado}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>
