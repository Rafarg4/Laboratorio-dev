 <link rel="icon" type="image/png" href="/laboratorio.png" />
 @extends('layouts.app')

@section('content')

<style type="text/css">
             #mapid { height: 550px; }
        </style>
         <br>
          <div class="container col-sm-11">
           <div class="col-sm-12 col-sm-2">   
            <div class="card">
             <div class="card-body">

          <h4 class="card-title"><a><i class="cil-location-pin fa-2x"></i> <strong>Ubicacion de todos los Pacientes.</strong> </h4>
          </div>
        </div>
        
        <div class="card">
        <!-- Card content -->
        
        <div class="card-body">
              <div id="mapid"></div>
              </div>
        </div>
        </div>
      </div>
    </div>
       <script>

             var map = L.map('mapid').setView([-27.33056,  -55.86667], 12);
             var grayscale = L.tileLayer( 'http://services.arcgisonline.com/arcgis/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}')
             var streets = L.tileLayer('http://services.arcgisonline.com/arcgis/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}')
             //Barrios este no tocar
          
             var baseMaps = {
                "grayscale": grayscale,
                "streets": streets
               
            };

          //  L.control.layers(baseMaps).addTo(map);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

          }).addTo(map);
          var positivo = L.layerGroup(null);
          var negativo = L.layerGroup(null);
          var todos = L.layerGroup(null);
            var redIcon = new L.Icon({
              iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
              shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
              iconSize: [25, 41],
              iconAnchor: [12, 41],
              popupAnchor: [1, -34],
              shadowSize: [41, 41]
            });
            var blueIcon = new L.Icon({
              iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
              shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
              iconSize: [25, 41],
              iconAnchor: [12, 41],
              popupAnchor: [1, -34],
              shadowSize: [41, 41]
            });
           @foreach($mapap as $mapap)
            @switch(true)
           @case($mapap->resultado == 'Positivo')
           marker = new L.marker([{{$mapap->latitud}} , {{$mapap->longitud}}],{icon:redIcon});
            marker.bindPopup("Paciente:{{$mapap->nombre_apellido}}.<br>Barrio:{{$mapap->barrio}}.<br>Genero: {{$mapap->genero}}.<br>Edad:{{$mapap->edad}}. <br>Resultado:{{$mapap->resultado}}.</br>");
           positivo.addLayer(marker);
           todos.addLayer(marker);
            @break
            @case($mapap->resultado == 'Negativo')
            marker = new L.marker([{{$mapap->latitud}} , {{$mapap->longitud}}],{icon:blueIcon});
            marker.bindPopup("Paciente:{{$mapap->nombre_apellido}}.<br>Barrio:{{$mapap->barrio}}.<br>Genero: {{$mapap->genero}}.<br>Edad:{{$mapap->edad}}. <br>Resultado:{{$mapap->resultado}}.</br>");
            negativo.addLayer(marker);
            todos.addLayer(marker);
            @break
            @endswitch
            @endforeach
            var overlayMaps = {
            "positivo": positivo,
            "negativo": negativo,
            "todos": todos
            };
            L.control.layers(baseMaps, overlayMaps).addTo(map);
            
     </script>

        </div>
  </div>
  </div>
  @endsection