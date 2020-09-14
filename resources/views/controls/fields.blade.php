<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    {!! Form::select('paciente_id',$pacientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Analisis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_analisis', 'Fecha Analisis:') !!}
    {!! Form::date('fecha_analisis', null, ['class' => 'form-control','id'=>'fecha_analisis']) !!}
</div>


<!-- Estado Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_paciente', 'Estado Paciente:') !!}
    {!! Form::text('estado_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Recomendacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    {!! Form::text('recomendacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Alta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    {!! Form::date('fecha_alta', null, ['class' => 'form-control','id'=>'fecha_alta']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('controls.index') }}" class="btn btn-secondary">Cancel</a>
</div>
