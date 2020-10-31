<!-- Laboratorio Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('laboratorio_id', 'Laboratorio:') !!}
    {!! Form::select('laboratorio_id', $laboratorio,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('name', 'Nombre y Apellido:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control','minlength' => 5]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
