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

          <h4 class="card-title"><a><i class="cil-map fa-2x"></i> <strong>Ubicacion de pacientes por Barrio</strong> </h4>
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
           @foreach($encarnacion as $encarnacion)
          L.marker([-27.337004949626625, -55.8664512669202]).addTo(map)
              .bindPopup('Encarnacion:{{$encarnacion}} pacientes.')
           @endforeach
           @foreach($mboikae as $mboikae) 
          L.marker([-27.319619683648703, -55.88392256875523]).addTo(map)
              .bindPopup('Mboi ka e:{{$mboikae}} pacientes.')
              @endforeach
           @foreach($sanisidro as $sanisidro)
          L.marker([-27.384266881102295, -55.823650377569734]).addTo(map)
              .bindPopup('San Isidro:{{$sanisidro}} pacientes.')
              @endforeach
           @foreach($sagradafamilia as $sagradafamilia) 
          L.marker([-27.37017510957327, -55.844497689977295]).addTo(map)
              .bindPopup('Sagrada Familia:{{$sagradafamilia}} pacientes.')
              @endforeach
          @foreach($ciudadnueva as $ciudadnueva)
          L.marker([-27.352422344233265, -55.8535003673751]).addTo(map)
              .bindPopup('Ciudad Nueva:{{$ciudadnueva}} pacientes.')
              @endforeach
         @foreach($chaipe as $chaipe)
          L.marker([-27.30929907159278, -55.84188461070881]).addTo(map)
              .bindPopup('Chaipe:{{$chaipe}} pacientes.')
               @endforeach 
          @foreach($cambyreta as $cambyreta)
          L.marker([-27.359401831819117, -55.76108931913041]).addTo(map)
              .bindPopup('Cambyreta:{{$cambyreta}} pacientes.')
                @endforeach
          @foreach($santamaria as $santamaria)   
          L.marker([-27.286366591508596, -55.8185577322729]).addTo(map)
              .bindPopup('Santa Maria:{{$santamaria}} pacientes.')
              @endforeach
          @foreach($itapaso as $itapaso)
          L.marker([-27.272838774583402, -55.928955076960854]).addTo(map)
              .bindPopup('Ita Paso:{{$itapaso}} pacientes.')
              @endforeach
            @foreach($buenavista as $buenavista)
          L.marker([-27.35787721652415, -55.853843690129004]).addTo(map)
              .bindPopup('Buena Vista:{{$buenavista}} pacientes.')
              @endforeach
            @foreach($fatima as $fatima)
           L.marker([-27.367464949196265, -55.83219529828057]).addTo(map)
              .bindPopup('Fatima:{{$fatima}} pacientes.')
              @endforeach
          </script>

        </div>
  </div>
  </div>
  @endsection