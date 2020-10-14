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
                 
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
                    <p>{{ $detalles->nombre_apellido }}</p>
                </div>
                <!-- Genero Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('genero', 'Genero:') !!}
                    <p>{{ $detalles->genero }}</p>
                </div>
                <!-- Edad Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('edad', 'Edad:') !!}
                    <p>{{ $detalles->edad }}</p>
                </div>

                <!-- Ci Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('estado_paciente', 'Estado Paciente.:') !!}
                    <p><span class="badge badge-warning">{{ $detalles->estado_paciente }}</span></p>
                </div>

                <!-- Barrio Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('barrio', 'Barrio:') !!}
                    <p>{{ $detalles->barrio }}</p>
                </div>
                <!-- Email field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_alta', 'fecha_alta:') !!}
                    <p>{{ $detalles->fecha_alta }}</p>
                </div>

                <!-- Grupo Sanguineo Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_analisis', 'Fecha de Analisis:') !!}
                    <p>{{ $detalles->fecha_analisis }}</p>
                </div>

                <!-- Enfermedad Referencial Field -->
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
                    <p>{{ $detalles->enfermedad_referencial }}</p>
                </div>
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('latitud', 'Latitud:') !!}
                    <p>{{ $detalles->latitud }}</p>
                </div>
              <div class="form-group col-md-4 pull-left">
                    {!! Form::label('longitud', 'Longuitud:') !!}
                    <p>{{ $detalles->longitud }}</p>
                </div>
                <!-- Codigo Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo', 'Codigo:') !!}
                    <p>{{ $detalles->codigo }}</p>
                </div>

                <!-- Region Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('region', 'Region:') !!}
                    <p>{{ $detalles->region }}</p>
                </div>

                <!-- Codigo Distrito Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo_distrito', 'Codigo Distrito:') !!}
                    <p>{{ $detalles->codigo_distrito }}</p>
                </div>

                <!-- Distrito Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('distrito', 'Distrito:') !!}
                    <p>{{ $detalles->distrito }}</p>
                </div>

                <!-- Fecha Notificacion Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_notificacion', 'Fecha Notificacion:') !!}
                    <p>{{ $detalles->fecha_notificacion }}</p>
                </div>

                <!-- Medico Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('medico', 'Medico:') !!}
                    <p>{{ $detalles->medico }}</p>
                </div>

                <!-- Media Edad Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('media_edad', 'Media Edad:') !!}
                    <p>{{ $detalles->media_edad }}</p>
                </div>

                <!-- Residente Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('residente', 'Residente:') !!}
                    <p>{{ $detalles->residente }}</p>
                </div>

                <!-- Hospedaje Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('hospedaje', 'Hospedaje:') !!}
                    <p>{{ $detalles->hospedaje }}</p>
                </div>

                <!-- Telefono Verificado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('telefono_verificado', 'Telefono Verificado:') !!}
                    <p>{{ $detalles->telefono_verificado }}</p>
                </div>

                <!-- Codigo Departamento Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo_departamento', 'Codigo Departamento:') !!}
                    <p>{{ $detalles->codigo_departamento }}</p>
                </div>

                <!-- Departamento Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('departamento', 'Departamento:') !!}
                    <p>{{ $detalles->departamento }}</p>
                </div>

                <!-- Zona Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('zona', 'Zona:') !!}
                    <p>{{ $detalles->zona }}</p>
                </div>

                <!-- Personal De Blanco Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('personal_de_blanco', 'Personal De Blanco:') !!}
                    <p>{{ $detalles->personal_de_blanco }}</p>
                </div>

                <!-- Albergue Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('albergue', 'Albergue:') !!}
                    <p>{{ $detalles->albergue }}</p>
                </div>

                <!-- Lugar Albergue Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('lugar_albergue', 'Lugar Albergue:') !!}
                    <p>{{ $detalles->lugar_albergue }}</p>
                </div>

                <!-- Sintomas Fiebre Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('sintomas_fiebre', 'Sintomas Fiebre:') !!}
                    <p>{{ $detalles->sintomas_fiebre }}</p>
                </div>

                <!-- Hospitalizado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('hospitalizado', 'Hospitalizado:') !!}
                    <p>{{ $detalles->hospitalizado }}</p>
                </div>

                <!-- Signo Sintoma Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('signo_sintoma', 'Signo Sintoma:') !!}
                    <p>{{ $detalles->signo_sintoma }}</p>
                </div>

                <!-- Vacuna Para La Influenza Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('vacuna_para_la_influenza', 'Vacuna Para La Influenza:') !!}
                    <p>{{ $detalles->vacuna_para_la_influenza }}</p>
                </div>

                <!-- Fecha Vacunacion Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_vacunacion', 'Fecha Vacunacion:') !!}
                    <p>{{ $detalles->fecha_vacunacion }}</p>
                </div>

                <!-- Viajo Resiente Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('viajo_resiente', 'Viajo Resiente:') !!}
                    <p>{{ $detalles->viajo_resiente }}</p>
                </div>

                <!-- Centro Asistencia Covid Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_covid', 'Centro Asistencia Covid:') !!}
                    <p>{{ $detalles->centro_asistencia_covid }}</p>
                </div>

                <!-- Centro Asistencia Pais Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_pais', 'Centro Asistencia Pais:') !!}
                    <p>{{ $detalles->centro_asistencia_pais }}</p>
                </div>

                <!-- Centro Asistencia Ciudad Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_ciudad', 'Centro Asistencia Ciudad:') !!}
                    <p>{{ $detalles->centro_asistencia_ciudad }}</p>
                </div>

                <!-- Nombre Centro Asistencia Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nombre_centro_asistencia', 'Nombre Centro Asistencia:') !!}
                    <p>{{ $detalles->nombre_centro_asistencia }}</p>
                </div>

                <!-- Fecha Asistida Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_asistida', 'Fecha Asistida:') !!}
                    <p>{{ $detalles->fecha_asistida }}</p>
                </div>

                <!-- Contacto Con Animales Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_con_animales', 'Contacto Con Animales:') !!}
                    <p>{{ $detalles->contacto_con_animales }}</p>
                </div>

                <!-- Contacto Persona Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_persona', 'Contacto Persona:') !!}
                    <p>{{ $detalles->contacto_persona }}</p>
                </div>

                <!-- Tipo Contacto Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('tipo_contacto', 'Tipo Contacto:') !!}
                    <p>{{ $detalles->tipo_contacto }}</p>
                </div>

                <!-- Contacto Otro Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_otro', 'Contacto Otro:') !!}
                    <p>{{ $detalles->contacto_otro }}</p>
                </div>

                <!-- Contacto Con Infectado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_con_infectado', 'Contacto Con Infectado:') !!}
                    <p>{{ $detalles->contacto_con_infectado }}</p>
                </div>

                <!-- Dato De Contacto Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('dato_de_contacto', 'Dato De Contacto:') !!}
                    <p>{{ $detalles->dato_de_contacto }}</p>
                </div>

                <!-- Toma De Muestra Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('toma_de_muestra', 'Toma De Muestra:') !!}
                    <p>{{ $detalles->toma_de_muestra }}</p>
                </div>

                <!-- Laboratorio Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('laboratorio', 'Laboratorio:') !!}
                    <p>{{ $detalles->laboratorio }}</p>
                </div>

                <!-- Nro Planilla Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nro_planilla', 'Nro Planilla:') !!}
                    <p>{{ $detalles->nro_planilla }}</p>
                </div>

                <!-- Anho Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('anho', 'Anho:') !!}
                    <p>{{ $detalles->anho }}</p>
                </div>

                <!-- Responsable De Carga Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('responsable_de_carga', 'Responsable De Carga:') !!}
                    <p>{{ $detalles->responsable_de_carga }}</p>
                </div>

                <!-- Usuario Lugar Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('usuario_lugar', 'Usuario Lugar:') !!}
                    <p>{{ $detalles->usuario_lugar }}</p>
                </div>
                   <div class="form-group col-sm-13 pull-left">
                  <div class="card">
                             <div class="card-body">
                    <div id="mapid"></div>
                   
                </div>

            </div>
           

         </div>

    </li>
    </ul>
    <style type="text/css">
                   #mapid { height: 600px; width:1310px; }
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