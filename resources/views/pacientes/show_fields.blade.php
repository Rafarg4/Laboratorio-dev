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
    <th><strong>Datos Personales: </strong>{{ $pacientes->nombre_apellido }}</th>
<!-- Genero Field -->

    <th><strong>Genero: </strong>{{ $pacientes->genero }}</th>

<!-- Fechanac Field -->

    <th><strong>Fecha de Nacimiento: </strong>{{ $pacientes->fechanac }}</th>

<!-- Edad Field -->

    <th><strong>Edad: </strong>{{ $pacientes->edad }}</th>
</tr>
<tr>
<!-- Ci Field -->

    <th><strong>Ci: </strong>{{ $pacientes->ci }}</th>

    <th><strong>Barrio: </strong>{{ $pacientes->barrio }}</th>

    <th><strong>Telefono: </strong>{{ $pacientes->telefono }}</p>
<!-- Email field -->

    <th><strong>Email: </strong>{{ $pacientes->email }}</th>
</tr>

<!-- Grupo Sanguineo Field -->
<tr>
    <th><strong>Grupo Sanguineo: </strong>{{ $pacientes->grupo_sanguineo }}</th>

<!-- Enfermedad Referencial Field -->

    <th><strong>Comorbilidad: </strong>{{ $pacientes->enfermedad_referencial }}</rh>

  
    <th><strong>Resultado: </strong> @switch(true)
           @case($pacientes->resultado == 'Negativo')
            <span class="badge badge-primary"> {{ $pacientes->resultado }} </span>
            @break
            @case($pacientes->resultado == 'Positivo')
            <span class="badge badge-danger"> {{ $pacientes->resultado }} </span>
            @break
            @case($pacientes->resultado == 'Otro' )
            <span class="badge badge-info"> {{ $pacientes->resultado }} </span>
            @break
            @case($pacientes->resultado == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $pacientes->resultado }} </span>
            @break
            @endswitch</th>
</tr>
<tr>

    <th><strong>Latitud: </strong>{{ $pacientes->latitud }}</th>

    <th><strong>Longitud: </strong> {{ $pacientes->longitud }}</th>

<!-- Created At Field -->

    <th><strong>Creado: </strong>{{ $pacientes->created_at }}</th>


<!-- Updated At Field -->

    <th><strong>Actualizado: </strong>{{ $pacientes->updated_at }}</th>
</tr>
<tr>
  
  <th><strong>Usuario: </strong>{{$pacientes->usuario}}</th>
  <th><strong> Tipo de Prueba:</strong>{{ $pacientes->nombre }} </th>
</tr>

   <table class="table table-bordered" id="data-table">
              <tr>
                <th><i class="cil-globe-alt fa-2x"></i> <strong>Geolocalizacion exacta de Pacientes.</strong></th>
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
            var map = L.map('mapid').setView([{{$pacientes->latitud}} , {{$pacientes->longitud}}], 15);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
            marker = new L.marker([{{$pacientes->latitud}} , {{$pacientes->longitud}}]);
            marker.bindPopup("Pacientes:{{$pacientes->nombre_apellido}}<br>Barrio:{{$pacientes->barrio}}<br>Resultado:{{$pacientes->resultado}}</br>");
            map.addLayer(marker);
            marker.openPopup();
            
     </script>