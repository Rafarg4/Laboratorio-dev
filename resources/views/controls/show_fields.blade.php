<ul class="list-group">
<li class="list-group-item">
<!-- Paciente Id Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('paciente_id', 'Nro de Caso:') !!}
    <p>{{ $control->paciente->paciente_id }}</p>
</div>

<!-- Fecha Analisis Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    <p>{{ $control->fecha_analisis }}</p>
</div>

<!-- Estado Paciente Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    <p>@switch(true)
            @case($control->estado_paciente == 'Inactivo')
            <span class="badge badge-primary"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Activo')
            <span class="badge badge-warning"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Fallecido' )
            <span class="badge badge-danger"> {{ $control->estado_paciente }} </span>
            @break
            @case($control->estado_paciente == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $control->estado_paciente }} </span>
            @break
            @endswitch</p>
</div>

<!-- Recomendacion Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    <p>{{ $control->recomendacion }}</p>
</div>

<!-- Fecha Alta Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    <p>{{ $control->fecha_alta }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $control->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $control->updated_at }}</p>
</div>
</ul>
</li>
