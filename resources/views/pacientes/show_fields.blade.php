<ul class="list-group">

<!-- Nombre Field -->
  <li class="list-group-item">
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    <p>{{ $paciente->nombre_apellido }}</p>
</div>
<!-- Genero Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{{ $paciente->genero }}</p>
</div>

<!-- Fechanac Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fechanac', 'Fecha de nacimiento:') !!}
    <p>{{ $paciente->fechanac }}</p>
</div>

<!-- Edad Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{{ $paciente->edad }}</p>
</div>

<!-- Ci Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('ci', 'C.I.:') !!}
    <p>{{ $paciente->ci }}</p>
</div>

<!-- Barrio Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('barrio', 'Barrio:') !!}
    <p>{{ $paciente->barrio }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $paciente->telefono }}</p>
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
    <p>{{ $paciente->grupo_sanguineo }}</p>
</div>

<!-- Enfermedad Referencial Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
    <p>{{ $paciente->enfermedad_referencial }}</p>
</div>
<div class="form-group col-md-6 pull-left">
    {!! Form::label('latitud', 'Latitud:') !!}
    <p>{{ $paciente->latitud }}</p>
</div>
<div class="form-group col-md-6 pull-left">
    {!! Form::label('longitud', 'Longuitud:') !!}
    <p>{{ $paciente->longitud }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $paciente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $paciente->updated_at }}</p>
</div>
   <div class="form-group col-sm-12 pull-left">
    <div id="mapid"></div>
</div>
</li>
</ul>
    <style type="text/css">
                   #mapid { height: 600px; width:1300px; }
           </style>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" type="text/css">
            <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
          <script>
            var map = L.map('mapid').setView([{{$paciente->latitud}} , {{$paciente->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$paciente->latitud}} , {{$paciente->longitud}}]);
            marker.bindPopup("Paciente:{{$paciente->nombre_apellido}}<br>Barrio:{{$paciente->barrio}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>