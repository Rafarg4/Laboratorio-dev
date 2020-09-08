<ul class="list-group">

<!-- Nombre Field -->
  <li class="list-group-item">
<div class="form-group col-md-6 pull-left">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tipoPrueba->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $tipoPrueba->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $tipoPrueba->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $tipoPrueba->updated_at }}</p>
</div>
</li>
</ul>

