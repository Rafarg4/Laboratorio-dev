 <link rel="icon" type="image/png" href="/laboratorio.png" />
 @extends('layouts.app')

@section('content')

<style type="text/css">
             #mapid { height: 680px; }
        </style>
         <br>
         
           <div class="container">
           <div class="col-sm-12 col-sm-2">     
            <div class="card">
             <div class="card-body">
          <h4 class="card-title"><a><i class="cil-map fa-2x"></i> <strong>Ubicacion de pacientes activos</strong> </h4>
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
      <script type="text/javascript">
            var map = L.map('mapid').setView([-27.33056,  -55.86667], 12);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          L.marker([-27.337004949626625, -55.8664512669202]).addTo(map)
              .bindPopup('Encarnacion.')
          L.marker([-27.319619683648703, -55.88392256875523]).addTo(map)
              .bindPopup('Mboi ka e.')
          L.marker([-27.384266881102295, -55.823650377569734]).addTo(map)
              .bindPopup('San Isidro.')
          L.marker([-27.37017510957327, -55.844497689977295]).addTo(map)
              .bindPopup('Sagrada Familia')
          L.marker([-27.352422344233265, -55.8535003673751]).addTo(map)
              .bindPopup('Ciudad Nueva')
          L.marker([-27.30929907159278, -55.84188461070881]).addTo(map)
              .bindPopup('Chaipe')
          L.marker([-27.359401831819117, -55.76108931913041]).addTo(map)
              .bindPopup('Cambyreta')
          L.marker([-27.286366591508596, -55.8185577322729]).addTo(map)
              .bindPopup('Santa Maria')
          L.marker([-27.272838774583402, -55.928955076960854]).addTo(map)
              .bindPopup('Ita Paso')
          L.marker([-27.35787721652415, -55.853843690129004]).addTo(map)
              .bindPopup('Buena Vista')
          </script>

        </div>
  </div>
  </div>
  @endsection