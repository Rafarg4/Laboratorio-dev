<ul class="list-group">
<li class="list-group-item">
<!-- Paciente Id Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('paciente_id', 'Nombre Paciente:') !!}
    <p>{{ $control->paciente->nombre }}</p>
</div>

<!-- Fecha Analisis Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    <p>{{ $control->fecha_analisis }}</p>
</div>

<!-- Estado Paciente Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    <p>{{ $control->estado_paciente }}</p>
</div>

<!-- Recomendacion Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    <p>{{ $control->recomendacion }}</p>
</div>

<!-- Fecha Alta Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    <p>{{ $control->fecha_alta }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $control->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $control->updated_at }}</p>
</div>
</ul>
</li>
