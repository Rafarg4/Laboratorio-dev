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
          var circle = L.circle([-27.337004949626625, -55.8664512669202],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 900
            }).addTo(map)
              .bindPopup('Encarnacion:{{$encarnacion}} pacientes.')
           @endforeach

           @foreach($mboikae as $mboikae) 
         var circle = L.circle([-27.319619683648703, -55.88392256875523],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Mboi ka e:{{$mboikae}} pacientes.')
              @endforeach
           @foreach($sanisidro as $sanisidro)
         var circle = L.circle([-27.384266881102295, -55.823650377569734],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('San Isidro:{{$sanisidro}} pacientes.')
              @endforeach
           @foreach($sagradafamilia as $sagradafamilia) 
         var circle = L.circle([-27.37017510957327, -55.844497689977295],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Sagrada Familia:{{$sagradafamilia}} pacientes.')
              @endforeach
          @foreach($ciudadnueva as $ciudadnueva)
         var circle = L.circle([-27.352422344233265, -55.8535003673751],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Ciudad Nueva:{{$ciudadnueva}} pacientes.')
              @endforeach
         @foreach($chaipe as $chaipe)
         var circle = L.circle([-27.30929907159278, -55.84188461070881],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Chaipe:{{$chaipe}} pacientes.')
               @endforeach 
          @foreach($cambyreta as $cambyreta)
         var circle = L.circle([-27.359401831819117, -55.76108931913041],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Cambyreta:{{$cambyreta}} pacientes.')
                @endforeach
          @foreach($santamaria as $santamaria)   
         var circle = L.circle([-27.286366591508596, -55.8185577322729],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Santa Maria:{{$santamaria}} pacientes.')
              @endforeach
          @foreach($itapaso as $itapaso)
         var circle = L.circle([-27.272838774583402, -55.928955076960854],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Ita Paso:{{$itapaso}} pacientes.')
              @endforeach
            @foreach($buenavista as $buenavista)
         var circle = L.circle([-27.35787721652415, -55.853843690129004],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Buena Vista:{{$buenavista}} pacientes.')
              @endforeach
            @foreach($fatima as $fatima)
          var circle = L.circle([-27.367464949196265, -55.83219529828057],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Fatima:{{$fatima}} pacientes.')
              @endforeach
             /* sin uuso */
              var circle = L.circle([-27.26853258399277, -55.68042755126953],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('Alborada:1 pacientes.')
              var circle = L.circle([-27.300197834139063, -55.95901488675736],
                    {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1000
            }).addTo(map)
              .bindPopup('San Juan:5 pacientes.') 
          </script>

        </div>
  </div>
  </div>
  @endsection