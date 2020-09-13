<!-- Nombre Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<!-- Apellido Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('apellido', 'Apellidos:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
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
    {!! Form::number('latitud', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::number('longitud', null, ['class' => 'form-control']) !!}
</div>
 <div class="col-sm-12 pull-left">
            <div class="card border-primary mb-3">
                <div class="card-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?&libraries=places'></script>

    <script type="text/javascript" src="{{asset('js/locationpicker.jquery.js')}}"></script>
<script>
    $('#map').locationpicker({
        location: {
            latitude: -27.33056,
            longitude: -55.86667
        },
        radius: 3000,
        inputBinding: {
            latitudeInput: $('#latitud'),
            longitudeInput: $('#longitud'),
            locationNameInput: $('#location')
        },
        // Para cargar vista satelital
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>
<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
