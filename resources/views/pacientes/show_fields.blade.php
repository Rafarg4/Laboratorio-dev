<ul class="list-group">

<!-- Nombre Field -->
  <li class="list-group-item">
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $paciente->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $paciente->apellido }}</p>
</div>

<!-- Genero Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{{ $paciente->genero }}</p>
</div>

<!-- Fechanac Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fechanac', 'Fecha de nacimiento:') !!}
    <p>{{ $paciente->fechanac }}</p>
</div>

<!-- Edad Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{{ $paciente->edad }}</p>
</div>

<!-- Ci Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{{ $paciente->ci }}</p>
</div>

<!-- Barrio Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('barrio', 'Barrio:') !!}
    <p>{{ $paciente->barrio }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $paciente->telefono }}</p>
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
    <p>{{ $paciente->grupo_sanguineo }}</p>
</div>

<!-- Enfermedad Referencial Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('enfermedad_referencial', 'Enfermedad Referencial:') !!}
    <p>{{ $paciente->enfermedad_referencial }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $paciente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $paciente->updated_at }}</p>
</div>
</li>
</ul>
