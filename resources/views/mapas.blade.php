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

          <h6 class="card-title"><a><i class="cil-map fa-2x"></i> <strong>Ubicacion de pacientes por Barrio.</strong> </h6>
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
      <style type="text/css">
                .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info h4 {
            margin: 0 0 5px;
            color: #777;

        }
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
     <!--Script y css de pantalla completa -->
      <script type="text/javascript" src="{{ asset('js/Leaflet.fullscreen.min.js') }}"></script>
       <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
       <!--Script de imprimir -->
       <script type="text/javascript" src="{{ asset('js/printleaflet.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/ leaflet.browser.print.min.js') }}"></script>
     
      <script type="text/javascript">
          
       var info = L.control();
        var map = L.map('mapid', {
        fullscreenControl: {
            pseudoFullscreen: false
        }
      }).setView([-27.33056,  -55.86667], 12);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

          }).addTo(map);
       L.control.browserPrint().addTo(map)   
                    info.onAdd = function (map) {
              this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
              this.update();
              return this._div;
          };
          // method that we will use to update the control based on feature properties passed
          info.update = function (props) {
              this._div.innerHTML = '<h6>Barrios mas afecatdos</h6>' +  (props ?
                  '<b>' + props.name + '</b><br />' + props.density + ' people / mi<sup>2</sup>'
                  : ' Santa Maria{{$santamaria}}<br>Fatima{{$fatima}}<br>San Isidro{{$sanisidro}} .');
          };

          info.addTo(map); 
           @foreach($encarnacion as $encarnacion)
          var circle = L.circle([-27.337004949626625, -55.8664512669202],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius:{{$encarnacion}}90
            }).addTo(map)
              .bindPopup('Encarnacion:{{$encarnacion}} pacientes.')
           @endforeach

           @foreach($mboikae as $mboikae) 
         var circle = L.circle([-27.319619683648703, -55.88392256875523],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$mboikae}}90
            }).addTo(map)
              .bindPopup('Mboi ka e:{{$mboikae}} pacientes.')
              @endforeach
           @foreach($sanisidro as $sanisidro)
         var circle = L.circle([-27.384266881102295, -55.823650377569734],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$sanisidro}}90
            }).addTo(map)
              .bindPopup('San Isidro:{{$sanisidro}} pacientes.')
              @endforeach
           @foreach($sagradafamilia as $sagradafamilia) 
         var circle = L.circle([-27.37017510957327, -55.844497689977295],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$sagradafamilia}}90
            }).addTo(map)
              .bindPopup('Sagrada Familia:{{$sagradafamilia}} pacientes.')
              @endforeach
          @foreach($ciudadnueva as $ciudadnueva)
         var circle = L.circle([-27.352422344233265, -55.8535003673751],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$ciudadnueva}}90
            }).addTo(map)
              .bindPopup('Ciudad Nueva:{{$ciudadnueva}} pacientes.')
              @endforeach
         @foreach($chaipe as $chaipe)
         var circle = L.circle([-27.30929907159278, -55.84188461070881],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$chaipe}}90
            }).addTo(map)
              .bindPopup('Chaipe:{{$chaipe}} pacientes.')
               @endforeach 
          @foreach($cambyreta as $cambyreta)
         var circle = L.circle([-27.359401831819117, -55.76108931913041],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$cambyreta}}90
            }).addTo(map)
              .bindPopup('Cambyreta:{{$cambyreta}} pacientes.')
                @endforeach
          @foreach($santamaria as $santamaria)   
         var circle = L.circle([-27.286366591508596, -55.8185577322729],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$santamaria}}90
            }).addTo(map)
              .bindPopup('Santa Maria:{{$santamaria}} pacientes.')
              @endforeach
          @foreach($itapaso as $itapaso)
         var circle = L.circle([-27.272838774583402, -55.928955076960854],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$itapaso}}90
            }).addTo(map)
              .bindPopup('Ita Paso:{{$itapaso}} pacientes.')
              @endforeach
            @foreach($buenavista as $buenavista)
         var circle = L.circle([-27.35787721652415, -55.853843690129004],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$buenavista}}90
            }).addTo(map)
              .bindPopup('Buena Vista:{{$buenavista}} pacientes.')
              @endforeach
            @foreach($fatima as $fatima)
          var circle = L.circle([-27.367464949196265, -55.83219529828057],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$fatima}}90
            }).addTo(map)
              .bindPopup('Fatima:{{$fatima}} pacientes.')
              @endforeach
          </script>

        </div>
  </div>
  </div>
  @endsection