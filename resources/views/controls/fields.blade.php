<!-- Paciente Id Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('paciente_id', 'Nombre Paciente:') !!}
    {!! Form::select('paciente_id',$pacientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Analisis Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    {!! Form::date('fecha_analisis', null, ['class' => 'form-control','id'=>'fecha_analisis']) !!}
</div>


<!-- Estado Paciente Field -->
<div class="form-group col-md-6 pull-left">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    {!! Form::text('estado_paciente', null, ['class' => 'form-control']) !!}
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
