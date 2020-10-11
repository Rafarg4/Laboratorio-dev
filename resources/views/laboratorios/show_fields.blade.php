<ul class="list-group">

<!-- Nombre Field -->
  <li class="list-group-item">
<!-- Nombre Laboratorio Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('nombre_laboratorio', 'Nombre Laboratorio:') !!}
    <p>{{ $laboratorio->nombre_laboratorio }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $laboratorio->descripcion }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $laboratorio->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $laboratorio->telefono }}</p>
</div>

<!-- Representante Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('representante', 'Representante:') !!}
    <p>{{ $laboratorio->representante }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $laboratorio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $laboratorio->updated_at }}</p>
</div>
</li>
</ul>

