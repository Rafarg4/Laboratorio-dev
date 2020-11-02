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
    <style>
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

  <style>
    #map {
      width: 800px;
      height: 500px;
    }
    .info {
      padding: 6px 8px;
      font: 14px/16px Arial, Helvetica, sans-serif;
      background: white;
      background: rgba(255, 255, 255, 0.8);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
    }
    .info h4 {
      margin: 0 0 5px;
      color: #777;
    }
    .legend {
      text-align: left;
      line-height: 18px;
      color: #555;
    }
    .legend i {
      width: 18px;
      height: 18px;
      float: left;
      margin-right: 8px;
      opacity: 0.7;
    }
  </style>
  <!--Scsipt y css para full screm -->
     <script type="text/javascript" src="{{ asset('js/Leaflet.fullscreen.min.js') }}"></script>
      <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
      <!--Script de imprimir -->
       <script type="text/javascript" src="{{ asset('js/printleaflet.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/ leaflet.browser.print.min.js') }}"></script>
       <script>

              var map = L.map('mapid', {
                fullscreenControl: {
                    pseudoFullscreen: false
                }
              }).setView([-27.33056,  -55.86667], 12);
             
             //Barrios este no tocar
             var baseMaps = {
              //Filtrado de otro tipo de mapas
               // "grayscale": grayscale,
                //"streets": streets
               
            };
           L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
              L.control.browserPrint().addTo(map)   
                  var info = L.control();

          info.onAdd = function(map) {
            this._div = L.DomUtil.create("div", "info");
            this.update();
            return this._div;
          };

          info.update = function(props) {
            this._div.innerHTML =
              "<h6>Filtrado de Casos</h6>" 
          };

          info.addTo(map)

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