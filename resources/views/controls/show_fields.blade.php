<!-- Paciente Id Field -->
<div class="form-group">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    <p>{{ $control->paciente->nombre }}</p>
</div>

<!-- Fecha Analisis Field -->
<div class="form-group">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    <p>{{ $control->fecha_analisis }}</p>
</div>

<!-- Estado Paciente Field -->
<div class="form-group">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    <p>{{ $control->estado_paciente }}</p>
</div>

<!-- Recomendacion Field -->
<div class="form-group">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    <p>{{ $control->recomendacion }}</p>
</div>

<!-- Fecha Alta Field -->
<div class="form-group">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    <p>{{ $control->fecha_alta }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $control->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $control->updated_at }}</p>
</div>

