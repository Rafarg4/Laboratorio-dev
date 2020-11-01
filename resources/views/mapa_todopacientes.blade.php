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

          <h6 class="card-title"><a><i class="cil-location-pin fa-2x"></i> <strong>Ubicacion de todos los Pacientes.</strong> </h6>
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
             
             //Barrios este no tocar
             var baseMaps = {
              //Filtrado de otro tipo de mapas
               // "grayscale": grayscale,
                //"streets": streets
               
            };
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
          var Positivo = L.layerGroup(null);
          var Negativo = L.layerGroup(null);
          var Todos = L.layerGroup(null);
            var redIcon = new L.Icon({
              iconUrl: 'red.png',
              shadowUrl: 'shadow.png',
              iconSize: [25, 41],
              iconAnchor: [12, 41],
              popupAnchor: [1, -34],
              shadowSize: [41, 41]
            });
            var blueIcon = new L.Icon({
              iconUrl: 'blue.png',
              shadowUrl: 'shadow.png',
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
           Positivo.addLayer(marker);
           Todos.addLayer(marker);
            @break
            @case($mapap->resultado == 'Negativo')
            marker = new L.marker([{{$mapap->latitud}} , {{$mapap->longitud}}],{icon:blueIcon});
            marker.bindPopup("Paciente:{{$mapap->nombre_apellido}}.<br>Barrio:{{$mapap->barrio}}.<br>Genero: {{$mapap->genero}}.<br>Edad:{{$mapap->edad}}. <br>Resultado:{{$mapap->resultado}}.</br>");
            Negativo.addLayer(marker);
            Todos.addLayer(marker);
            @break
            @endswitch
            @endforeach
            var overlayMaps = {
            "Positivo": Positivo,
            "Negativo": Negativo,
            "Todos": Todos
            };
            L.control.layers(baseMaps, overlayMaps).addTo(map);
            
     </script>

        </div>
  </div>
  </div>
  @endsection