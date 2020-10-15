<!-- Paciente Id Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('paciente_id', 'Nro de Caso:') !!}
    {!! Form::select('paciente_id', $pacientes,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Estado Paciente Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    {!! Form::select('estado_paciente',array('Sin eleccion' => 'Sin eleccion','Activo' => 'Activo', 'Inactivo' => 'Inactivo','Fallecido' => 'Fallecido'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Fecha Analisis Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    {!! Form::date('fecha_analisis', null, ['class' => 'form-control','id'=>'fecha_analisis']) !!}
</div>

<!-- Fecha Alta Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    {!! Form::date('fecha_alta', null, ['class' => 'form-control','id'=>'fecha_alta']) !!}
</div>

<!-- Recomendacion Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    {!! Form::textarea('recomendacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('controls.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
