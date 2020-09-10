<!-- Nombre Laboratorio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_laboratorio', 'Nombre Laboratorio:') !!}
    {!! Form::text('nombre_laboratorio', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripci?n Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripción', 'Descripcion:') !!}
    {!! Form::text('descripción', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('representante', 'Representante:') !!}
    {!! Form::text('representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('laboratorios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
