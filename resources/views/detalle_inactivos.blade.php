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
                                       Detalle de paciente Inactivo  <a href="{{ url('historial_recuperados') }}" class="btn btn-primary">Volver</a>
                                                 
                                        </div>
                                    <div class="card-body">
                                       
                <ul class="list-group">

                <!-- Nombre Field -->
                  <li class="list-group-item">
                 
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
                    <p>{{ $inactivos->nombre_apellido }}</p>
                </div>
                <!-- Genero Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('genero', 'Genero:') !!}
                    <p>{{ $inactivos->genero }}</p>
                </div>

                <!-- Fechanac Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('id', 'Paciente id:') !!}
                    <p>{{ $inactivos->id }}</p>
                </div>

                <!-- Edad Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('edad', 'Edad:') !!}
                    <p>{{ $inactivos->edad }}</p>
                </div>

                <!-- Ci Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
                    <p><span class="badge badge-primary">{{ $inactivos->estado_paciente }}</span></p>
                </div>

                <!-- Barrio Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('barrio', 'Barrio:') !!}
                    <p>{{ $inactivos->barrio }}</p>
                </div>
                <!-- Email field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_alta', 'fecha_alta:') !!}
                    <p>{{ $inactivos->fecha_alta }}</p>
                </div>

                <!-- Grupo Sanguineo Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_analisis', 'Fecha de Analisis:') !!}
                    <p>{{ $inactivos->fecha_analisis }}</p>
                </div>

                <!-- Enfermedad Referencial Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
                    <p>{{ $inactivos->enfermedad_referencial }}</p>
                </div>
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('latitud', 'Latitud:') !!}
                    <p>{{ $inactivos->latitud }}</p>
                </div>
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('longitud', 'Longuitud:') !!}
                    <p>{{ $inactivos->longitud }}</p>
                </div>
                 <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo', 'Codigo:') !!}
                    <p>{{ $inactivos->codigo }}</p>
                </div>

                <!-- Region Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('region', 'Region:') !!}
                    <p>{{ $inactivos->region }}</p>
                </div>

                <!-- Codigo Distrito Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo_distrito', 'Codigo Distrito:') !!}
                    <p>{{ $inactivos->codigo_distrito }}</p>
                </div>

                <!-- Distrito Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('distrito', 'Distrito:') !!}
                    <p>{{ $inactivos->distrito }}</p>
                </div>

                <!-- Fecha Notificacion Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_notificacion', 'Fecha Notificacion:') !!}
                    <p>{{ $inactivos->fecha_notificacion }}</p>
                </div>

                <!-- Medico Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('medico', 'Medico:') !!}
                    <p>{{ $inactivos->medico }}</p>
                </div>

                <!-- Media Edad Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('media_edad', 'Media Edad:') !!}
                    <p>{{ $inactivos->media_edad }}</p>
                </div>

                <!-- Residente Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('residente', 'Residente:') !!}
                    <p>{{ $inactivos->residente }}</p>
                </div>

                <!-- Hospedaje Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('hospedaje', 'Hospedaje:') !!}
                    <p>{{ $inactivos->hospedaje }}</p>
                </div>

                <!-- Telefono Verificado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('telefono_verificado', 'Telefono Verificado:') !!}
                    <p>{{ $inactivos->telefono_verificado }}</p>
                </div>

                <!-- Codigo Departamento Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('codigo_departamento', 'Codigo Departamento:') !!}
                    <p>{{ $inactivos->codigo_departamento }}</p>
                </div>

                <!-- Departamento Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('departamento', 'Departamento:') !!}
                    <p>{{ $inactivos->departamento }}</p>
                </div>

                <!-- Zona Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('zona', 'Zona:') !!}
                    <p>{{ $inactivos->zona }}</p>
                </div>

                <!-- Personal De Blanco Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('personal_de_blanco', 'Personal De Blanco:') !!}
                    <p>{{ $inactivos->personal_de_blanco }}</p>
                </div>

                <!-- Albergue Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('albergue', 'Albergue:') !!}
                    <p>{{ $inactivos->albergue }}</p>
                </div>

                <!-- Lugar Albergue Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('lugar_albergue', 'Lugar Albergue:') !!}
                    <p>{{ $inactivos->lugar_albergue }}</p>
                </div>

                <!-- Sintomas Fiebre Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('sintomas_fiebre', 'Sintomas Fiebre:') !!}
                    <p>{{ $inactivos->sintomas_fiebre }}</p>
                </div>

                <!-- Hospitalizado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('hospitalizado', 'Hospitalizado:') !!}
                    <p>{{ $inactivos->hospitalizado }}</p>
                </div>

                <!-- Signo Sintoma Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('signo_sintoma', 'Signo Sintoma:') !!}
                    <p>{{ $inactivos->signo_sintoma }}</p>
                </div>

                <!-- Vacuna Para La Influenza Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('vacuna_para_la_influenza', 'Vacuna Para La Influenza:') !!}
                    <p>{{ $inactivos->vacuna_para_la_influenza }}</p>
                </div>

                <!-- Fecha Vacunacion Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_vacunacion', 'Fecha Vacunacion:') !!}
                    <p>{{ $inactivos->fecha_vacunacion }}</p>
                </div>

                <!-- Viajo Resiente Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('viajo_resiente', 'Viajo Resiente:') !!}
                    <p>{{ $inactivos->viajo_resiente }}</p>
                </div>

                <!-- Centro Asistencia Covid Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_covid', 'Centro Asistencia Covid:') !!}
                    <p>{{ $inactivos->centro_asistencia_covid }}</p>
                </div>

                <!-- Centro Asistencia Pais Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_pais', 'Centro Asistencia Pais:') !!}
                    <p>{{ $inactivos->centro_asistencia_pais }}</p>
                </div>

                <!-- Centro Asistencia Ciudad Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('centro_asistencia_ciudad', 'Centro Asistencia Ciudad:') !!}
                    <p>{{ $inactivos->centro_asistencia_ciudad }}</p>
                </div>

                <!-- Nombre Centro Asistencia Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nombre_centro_asistencia', 'Nombre Centro Asistencia:') !!}
                    <p>{{ $inactivos->nombre_centro_asistencia }}</p>
                </div>

                <!-- Fecha Asistida Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_asistida', 'Fecha Asistida:') !!}
                    <p>{{ $inactivos->fecha_asistida }}</p>
                </div>

                <!-- Contacto Con Animales Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_con_animales', 'Contacto Con Animales:') !!}
                    <p>{{ $inactivos->contacto_con_animales }}</p>
                </div>

                <!-- Contacto Persona Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_persona', 'Contacto Persona:') !!}
                    <p>{{ $inactivos->contacto_persona }}</p>
                </div>

                <!-- Tipo Contacto Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('tipo_contacto', 'Tipo Contacto:') !!}
                    <p>{{ $inactivos->tipo_contacto }}</p>
                </div>

                <!-- Contacto Otro Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_otro', 'Contacto Otro:') !!}
                    <p>{{ $inactivos->contacto_otro }}</p>
                </div>

                <!-- Contacto Con Infectado Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('contacto_con_infectado', 'Contacto Con Infectado:') !!}
                    <p>{{ $inactivos->contacto_con_infectado }}</p>
                </div>

                <!-- Dato De Contacto Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('dato_de_contacto', 'Dato De Contacto:') !!}
                    <p>{{ $inactivos->dato_de_contacto }}</p>
                </div>

                <!-- Toma De Muestra Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('toma_de_muestra', 'Toma De Muestra:') !!}
                    <p>{{ $inactivos->toma_de_muestra }}</p>
                </div>

                <!-- Laboratorio Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('laboratorio', 'Laboratorio:') !!}
                    <p>{{ $inactivos->laboratorio }}</p>
                </div>

                <!-- Nro Planilla Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nro_planilla', 'Nro Planilla:') !!}
                    <p>{{ $inactivos->nro_planilla }}</p>
                </div>

                <!-- Anho Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('anho', 'Anho:') !!}
                    <p>{{ $inactivos->anho }}</p>
                </div>

                <!-- Responsable De Carga Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('responsable_de_carga', 'Responsable De Carga:') !!}
                    <p>{{ $inactivos->responsable_de_carga }}</p>
                </div>

                <!-- Usuario Lugar Field -->
                <div class="form-group col-md-4 pull-left">
                    {!! Form::label('usuario_lugar', 'Usuario Lugar:') !!}
                    <p>{{ $inactivos->usuario_lugar }}</p>
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