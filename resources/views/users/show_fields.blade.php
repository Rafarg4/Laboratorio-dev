<ul class="list-group">

<!-- Nombre Field -->
<li class="list-group-item">
<div class="form-group col-md-4 pull-left">
    {!! Form::label('name', 'Nombre y Apellido:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $user->updated_at }}</p>
</div>
</li>
</ul>
