
<!-- Nombre Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>
<!-- Genero Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('genero', 'Genero:') !!}
   {!! Form::select('genero',array('Sin eleccion' => 'Sin eleccion','Masculino' => 'Masculino', 'Femenino' => 'Femenino','Otro' => 'Otro'),null, ['class' => 'form-control' ])!!}
</div>
<!-- Fechanac Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('fechanac', 'Fecha de nacimiento:') !!}
    {!! Form::date('fechanac', null, ['class' => 'form-control','id'=>'fechanac']) !!}
</div>
<!-- Scrpit de calcular edad  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
            $('#fechanac').on('change', calcularEdad);
        });
        
        function calcularEdad() {
            
            fecha = $(this).val();
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $('#edad').val(edad);
        }
</script>
<!-- Edad Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('ci', 'C.I.:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
   {!! Form::select('grupo_sanguineo',array('Sin eleccion' => 'Sin eleccion','A+' => 'A+', 'A-' => 'A-','B+' => 'B+','B-' => 'B-','AB+' => 'AB+','AB-' => 'AB-','O+' => 'O+','O-' => 'O-'),null, ['class' => 'form-control' ])!!}
</div>
<!-- Enfermedad Referencial Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
    {!! Form::textarea('enfermedad_referencial', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 pull-left">
  <div id="mapid"></div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
<style>
             #mapid { height: 600px; width:1300px; }
           </style>
           
          <script>
            var map = L.map('mapid').setView([-27.33056,  -55.86667], 13);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
           marker = new L.marker([-27.33056,  -55.86667], {draggable:'true'});
            map.addLayer(marker);
            function onMapClick(e) {
            marker.on('dragend', function(event){
            var marker = event.target;
            var position = marker.getLatLng();
            marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
            map.panTo(new L.LatLng(position.lat, position.lng));
            console.log(marker.getLatLng());
            document.getElementById('latitud').value = marker.getLatLng().lat;
            document.getElementById('longitud').value = marker.getLatLng().lng;
          });
          
          map.addLayer(marker);
        };
    
        map.on('mouseover', onMapClick);
    </script>