<!--<script type="text/javascript">
  function printDiv(nombreDiv) {
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;

     window.print();

     document.body.innerHTML = contenidoOriginal;
}
</script>
<input type="button" onclick="printDiv('areaImprimir')" value="Imprimir" />
<div id="areaImprimir">-->
<div class="table-responsive-sm">
<ul class="list-group">
  <li class="list-group-item">
     <table class="table table-bordered" id="data-table">
                   <tr><th><i class="cil-people fa-2x"></i> <strong>Datos Detallados de Paciente.</strong></th>
                   </tr>

  <table class="table table-bordered" id="data-table">
<!-- Nombre Field -->
 
<tr>
    <th><strong>Datos Personales: </strong>{{ $paciente->nombre_apellido }}</th>
<!-- Genero Field -->

    <th><strong>Genero: </strong>{{ $paciente->genero }}</th>

<!-- Fechanac Field -->

    <th><strong>Fecha de Nacimiento: </strong>{{ $paciente->fechanac }}</th>

<!-- Edad Field -->

    <th><strong>Edad: </strong>{{ $paciente->edad }}</th>
</tr>
<tr>
<!-- Ci Field -->

    <th><strong>Ci: </strong>{{ $paciente->ci }}</th>

    <th><strong>Barrio: </strong>{{ $paciente->barrio }}</th>

    <th><strong>Telefono: </strong>{{ $paciente->telefono }}</p>
<!-- Email field -->

    <th><strong>Email: </strong>{{ $paciente->email }}</th>
</tr>

<!-- Grupo Sanguineo Field -->
<tr>
    <th><strong>Grupo Sanguineo: </strong>{{ $paciente->grupo_sanguineo }}</th>

<!-- Enfermedad Referencial Field -->

    <th><strong>Comorbilidad: </strong>{{ $paciente->enfermedad_referencial }}</rh>

    <th><strong>Tipo de Prueba: </strong>{{ $paciente->tipo_prueba->nombre }}</th>

  
    <th><strong>Resultado: </strong> @switch(true)
           @case($paciente->resultado == 'Negativo')
            <span class="badge badge-primary"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Positivo')
            <span class="badge badge-danger"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Otro' )
            <span class="badge badge-info"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $paciente->resultado }} </span>
            @break
            @endswitch</th>
</tr>
<tr>

    <th><strong>Latitud: </strong>{{ $paciente->latitud }}</th>

    <th><strong>Longitud: </strong> {{ $paciente->longitud }}</th>

<!-- Created At Field -->

    <th><strong>Creado: </strong>{{ $paciente->created_at }}</th>


<!-- Updated At Field -->

    <th><strong>Actualizado: </strong>{{ $paciente->updated_at }}</th>
</tr>
<tr>
  
  <th><strong>Usuario: </strong>{{ $paciente->usuario }}</th>
</tr>

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
            var map = L.map('mapid').setView([{{$paciente->latitud}} , {{$paciente->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$paciente->latitud}} , {{$paciente->longitud}}]);
            marker.bindPopup("Paciente:{{$paciente->nombre_apellido}}<br>Barrio:{{$paciente->barrio}}<br>Resultado:{{$paciente->resultado}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>