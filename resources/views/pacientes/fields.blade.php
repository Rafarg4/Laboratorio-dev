<!-- Nombre Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
   {!! Form::select('genero',array('Sin eleccion' => 'Sin eleccion','Masculino' => 'Masculino', 'Femenino' => 'Femenino','Otro' => 'Otro'),null, ['class' => 'form-control' ])!!}

</div>

<!-- Fechanac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechanac', 'Fecha de nacimiento:') !!}
    {!! Form::date('fechanac', null, ['class' => 'form-control','id'=>'fechanac']) !!}
</div>
<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
    {!! Form::text('grupo_sanguineo', null, ['class' => 'form-control']) !!}
</div>

<!-- Enfermedad Referencial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfermedad_referencial', 'Enfermedad Referencial:') !!}
    {!! Form::textarea('enfermedad_referencial', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
