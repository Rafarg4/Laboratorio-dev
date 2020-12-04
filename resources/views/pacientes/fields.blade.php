<div class="form-group col-md-6 pull-left">
<label for="usuario">Usuario:</label>
            <input type="text" name="usuario" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
<!-- Nombre Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>
<!-- Genero Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('genero', 'Genero:') !!}
   {!! Form::select('genero',array('Sin eleccion' => 'Sin eleccion','Masculino' => 'Masculino', 'Femenino' => 'Femenino','Otro' => 'Otro'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
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
   {!! Form::select('barrio',array('Sin eleccion' => 'Sin eleccion','Encarnacion' => 'Encarnacion', 'Mboi_Ka_e' => 'Mboi_Ka_e','San_Isidro' => 'San_Isidro','Sagrada_Familia' => 'Sagrada_Familia','Ciudad_Nueva' => 'Ciudad_Nueva','Chaipe' => 'Chaipe','Cambyreta' => 'Cambyreta','Santa_Maria' => 'Santa_Maria','Ita_Paso' => 'Ita_Paso','Buena_Vista' => 'Buena_Vista','Fatima' => 'Fatima','Santo_Domingo' =>'Santo_Domingo','Nueva_Alborada' =>'Nueva_Alborada','8de_diciembre' =>'8de_diciembre'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<!-- Grupo Sanguineo Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
   {!! Form::select('grupo_sanguineo',array('Sin eleccion' => 'Sin eleccion','A+' => 'A+', 'A-' => 'A-','B+' => 'B+','B-' => 'B-','AB+' => 'AB+','AB-' => 'AB-','O+' => 'O+','O-' => 'O-'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('resultado', 'Resultado:') !!}
    {!! Form::select('resultado',array('Sin eleccion' => 'Sin eleccion','Positivo' => 'Positivo', 'Negativo' => 'Negativo','Otro' => 'Otro'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Tipo Prueba Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('tipo_prueba_id', 'Tipo de prueba:') !!}
    {!! Form::select('tipo_prueba_id', $pruebas,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
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
<div class="form-group col-sm-13 pull-left">
  <div class="card">
             <div class="card-body">    
  <div id="mapid"></div>
</div>
</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
<style>
             #mapid { height: 600px; width:1355px; }
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
     <style type="text/css">
        .select2-container--default .select2-selection--single {
            height: calc(1.5em + .80rem + 2px) !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#select").select2();
        });
    </script>