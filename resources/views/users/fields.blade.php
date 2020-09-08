<!-- Name Field -->
<div class="form-group 	">
    {!! Form::label('name', 'Nombre y Apellido:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group ">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group ">
    {!! Form::label('password', 'Contraeña:') !!}
    {!! Form::password('password', ['class' => 'form-control','minlength' => 5]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
