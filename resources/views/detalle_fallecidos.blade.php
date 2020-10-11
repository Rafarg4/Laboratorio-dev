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
                                       Detalle de paciente Fallecido <a href="{{ url('historial_activos') }}" class="btn btn-primary">Volver</a>
                                                 
                                        </div>
                                    <div class="card-body">
                                       
                <ul class="list-group">


                <!-- Nombre Field -->
                  <li class="list-group-item">
                 
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
                    <p>{{ $fallecidos->nombre_apellido }}</p>
                </div>
                <!-- Genero Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('genero', 'Genero:') !!}
                    <p>{{ $fallecidos->genero }}</p>
                </div>

                <!-- Fechanac Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('id', 'Paciente id:') !!}
                    <p>{{ $fallecidos->id }}</p>
                </div>

                <!-- Edad Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('edad', 'Edad:') !!}
                    <p>{{ $fallecidos->edad }}</p>
                </div>

                <!-- Ci Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
                    <p><span class="badge badge-danger">{{ $fallecidos->estado_paciente }}</span></p>
                </div>

                <!-- Barrio Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('barrio', 'Barrio:') !!}
                    <p>{{ $fallecidos->barrio }}</p>
                </div>
                <!-- Email field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_alta', 'fecha_alta:') !!}
                    <p>{{ $fallecidos->fecha_alta }}</p>
                </div>

                <!-- Grupo Sanguineo Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('fecha_analisis', 'Fecha de Analisis:') !!}
                    <p>{{ $fallecidos->fecha_analisis }}</p>
                </div>

                <!-- Enfermedad Referencial Field -->
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
                    <p>{{ $fallecidos->enfermedad_referencial }}</p>
                </div>
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('latitud', 'Latitud:') !!}
                    <p>{{ $fallecidos->latitud }}</p>
                </div>
               <div class="form-group col-md-4 pull-left">
                    {!! Form::label('longitud', 'Longuitud:') !!}
                    <p>{{ $fallecidos->longitud }}</p>
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