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

          <h4 class="card-title"><a><i class="cil-location-pin fa-2x"></i> <strong>Ubicacion de pacientes activos</strong> </h4>
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
             var fallecidos = L.tileLayer('http://services.arcgisonline.com/arcgis/rest/services/Canvas/World_Light_Gray_Reference/MapServer/tile/{z}/{y}/{x}')
             var baseMaps = {
                "Activos": grayscale,
                "Inactivos": streets,
                "Fallecidos":fallecidos
            };
            L.control.layers(baseMaps).addTo(map);
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

          }).addTo(map);
           @foreach($mapap as $mapap)
            marker = new L.marker([{{$mapap->latitud}} , {{$mapap->longitud}}]);
            marker.bindPopup("Paciente:{{$mapap->nombre_apellido}}.<br>Barrio:{{$mapap->barrio}}.<br>Genero: {{$mapap->genero}}.<br>Edad:{{$mapap->edad}}. <br>Resultado:{{$mapap->resultado}}.</br>");
            map.addLayer(marker);
            @endforeach
            
     </script>

        </div>
  </div>
  </div>
  @endsection