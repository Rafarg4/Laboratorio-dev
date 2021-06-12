<!-- Paciente Id Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    {!! Form::select('paciente_id', $pacientes, null, ['required', 'required','class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Codigo Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::number('codigo', null, ['required','required','class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('region', 'Region:') !!}
    {!! Form::text('region', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Codigo Distrito Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('codigo_distrito', 'Codigo Distrito:') !!}
    {!! Form::number('codigo_distrito', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Distrito Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('distrito', 'Distrito:') !!}
    {!! Form::text('distrito', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Fecha Notificacion Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('fecha_notificacion', 'Fecha Notificacion:') !!}
    {!! Form::date('fecha_notificacion', null, ['required','class' => 'form-control','id'=>'fecha_notificacion']) !!}
</div>
<!-- Medico Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('medico', 'Medico:') !!}
    {!! Form::text('medico', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Media Edad Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('media_edad', 'Media Edad:') !!}
    {!! Form::number('media_edad', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Residente Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('residente', 'Residente:') !!}
    {!! Form::text('residente', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Hospedaje Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('hospedaje', 'Hospedaje:') !!}
    {!! Form::text('hospedaje', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Telefono Verificado Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('telefono_verificado', 'Telefono Verificado:') !!}
    {!! Form::number('telefono_verificado', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Codigo Departamento Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('codigo_departamento', 'Codigo Departamento:') !!}
    {!! Form::number('codigo_departamento', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Zona Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('zona', 'Zona:') !!}
    {!! Form::text('zona', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Personal De Blanco Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('personal_de_blanco', 'Personal De Blanco:') !!}
    {!! Form::text('personal_de_blanco', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Albergue Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('albergue', 'Albergue:') !!}
    {!! Form::text('albergue', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Lugar Albergue Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('lugar_albergue', 'Lugar Albergue:') !!}
    {!! Form::text('lugar_albergue', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Sintomas Fiebre Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('sintomas_fiebre', 'Sintomas Fiebre:') !!}
    {!! Form::textarea('sintomas_fiebre', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Hospitalizado Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('hospitalizado', 'Hospitalizado:') !!}
    {!! Form::textarea('hospitalizado', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Signo Sintoma Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('signo_sintoma', 'Signo Sintoma:') !!}
    {!! Form::textarea('signo_sintoma', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Vacuna Para La Influenza Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('vacuna_para_la_influenza', 'Vacuna Para La Influenza:') !!}
    {!! Form::select('vacuna_para_la_influenza',array('Sin eleccion' => 'Sin eleccion','SI' => 'SI', 'NO' => 'NO'),null, ['required', 'required','class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<script type="text/javascript">
    $( function() {
    $("#vacuna_para_la_influenza").change( function() {
        if ($(this).val() === "SI") {
            $("#fecha_vacunacion").prop("disabled", false);
        } else {
            $("#fecha_vacunacion").prop("disabled", true);
        }
    });
});
</script>
<!-- Fecha Vacunacion Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('fecha_vacunacion', 'Fecha Vacunacion:') !!}
    {!! Form::date('fecha_vacunacion', null, ['required','class' => 'form-control','id'=>'fecha_vacunacion']) !!}
</div>
<!-- Viajo Resiente Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('viajo_reciente', 'Viajo Reciente:') !!}
    {!! Form::text('viajo_reciente', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Centro Asistencia Covid Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('centro_asistencia_covid', 'Centro Asistencia Covid:') !!}
    {!! Form::select('centro_asistencia_covid', array('Sin eleccion' => 'Sin eleccion','SI' => 'SI', 'NO' => 'NO'),null, ['required', 'required','class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>

<script type="text/javascript">
    $( function() {
    $("#centro_asistencia_covid").change( function() {
        if ($(this).val() === "SI") {
            $("#centro_asistencia_pais").prop("disabled", false);
            $("#centro_asistencia_ciudad").prop("disabled", false);
            $("#nombre_centro_asistencia").prop("disabled", false);
            $("#fecha_asistida").prop("disabled", false);
        } else {
            $("#centro_asistencia_pais").prop("disabled", true);
            $("#centro_asistencia_ciudad").prop("disabled", true);
            $("#nombre_centro_asistencia").prop("disabled", true);
            $("#fecha_asistida").prop("disabled", true);
        }
    });
});
</script>
<!-- Centro Asistencia Pais Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('centro_asistencia_pais', 'Centro Asistencia Pais:') !!}
    {!! Form::text('centro_asistencia_pais', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Centro Asistencia Ciudad Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('centro_asistencia_ciudad', 'Centro Asistencia Ciudad:') !!}
    {!! Form::text('centro_asistencia_ciudad', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Nombre Centro Asistencia Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('nombre_centro_asistencia', 'Nombre Centro Asistencia:') !!}
    {!! Form::text('nombre_centro_asistencia', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Fecha Asistida Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('fecha_asistida', 'Fecha Asistida:') !!}
    {!! Form::date('fecha_asistida', null, ['required','class' => 'form-control','id'=>'fecha_asistida']) !!}
</div>
<!-- Contacto Con Animales Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('contacto_con_animales', 'Contacto Con Animales:') !!}
    {!! Form::text('contacto_con_animales', null, ['required','class' => 'form-control']) !!}
</div>
<!-- Dato De Contacto Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('dato_de_contacto', 'Dato De Contacto:') !!}
    {!! Form::textarea('dato_de_contacto', null, ['required','class' => 'form-control']) !!}
</div>


<!-- Tipo Contacto Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('tipo_contacto', 'Tipo Contacto:') !!}
    {!! Form::textarea('tipo_contacto', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Contacto Otro Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('contacto_otro', 'Contacto Otro:') !!}
    {!! Form::text('contacto_otro', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Contacto Con Infectado Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('contacto_con_infectado', 'Contacto Con Infectado:') !!}
    {!! Form::text('contacto_con_infectado', null, ['required','class' => 'form-control']) !!}
</div>
<!-- Contacto Persona Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('contacto_persona', 'Contacto Persona:') !!}
    {!! Form::text('contacto_persona', null, ['required','class' => 'form-control']) !!}
</div>


<!-- Toma De Muestra Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('toma_de_muestra', 'Toma De Muestra:') !!}
    {!! Form::text('toma_de_muestra', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Laboratorio Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('laboratorio', 'Laboratorio:') !!}
    {!! Form::text('laboratorio', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Nro Planilla Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('nro_planilla', 'Nro Planilla:') !!}
    {!! Form::text('nro_planilla', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Anho Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('anho', 'Año:') !!}
    {!! Form::number('anho', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Responsable De Carga Field -->
<div class="form-group col-md-4 pull-left">
    {!! Form::label('responsable_de_carga', 'Responsable De Carga:') !!}
    {!! Form::text('responsable_de_carga', null, ['required','class' => 'form-control']) !!}
</div>

<!-- Usuario Lugar Field -->
<div class="form-group col-md-4 pull-left">
<label for="usuario_lugar">Usuario del Lugar:</label>
            <input type="text" name="usuario_lugar" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('casoPositivos.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
