<!-- Nombre Laboratorio Field -->
<div class="form-group">
    {!! Form::label('nombre_laboratorio', 'Nombre Laboratorio:') !!}
    <p>{{ $laboratorio->nombre_laboratorio }}</p>
</div>

<!-- Descripci?n Field -->
<div class="form-group">
    {!! Form::label('descripción', 'Descripcion:') !!}
    <p>{{ $laboratorio->descripción }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $laboratorio->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $laboratorio->telefono }}</p>
</div>

<!-- Representante Field -->
<div class="form-group">
    {!! Form::label('representante', 'Representante:') !!}
    <p>{{ $laboratorio->representante }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $laboratorio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $laboratorio->updated_at }}</p>
</div>

