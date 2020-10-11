<ul class="list-group">
<li class="list-group-item">
<!-- Paciente Id Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    <p>{{ $casoPositivo->paciente->nombre_apellido }}</p>
</div>

<!-- Codigo Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{{ $casoPositivo->codigo }}</p>
</div>

<!-- Region Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('region', 'Region:') !!}
    <p>{{ $casoPositivo->region }}</p>
</div>

<!-- Codigo Distrito Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('codigo_distrito', 'Codigo Distrito:') !!}
    <p>{{ $casoPositivo->codigo_distrito }}</p>
</div>

<!-- Distrito Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('distrito', 'Distrito:') !!}
    <p>{{ $casoPositivo->distrito }}</p>
</div>

<!-- Fecha Notificacion Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('fecha_notificacion', 'Fecha Notificacion:') !!}
    <p>{{ $casoPositivo->fecha_notificacion }}</p>
</div>

<!-- Medico Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('medico', 'Medico:') !!}
    <p>{{ $casoPositivo->medico }}</p>
</div>

<!-- Media Edad Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('media_edad', 'Media Edad:') !!}
    <p>{{ $casoPositivo->media_edad }}</p>
</div>

<!-- Residente Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('residente', 'Residente:') !!}
    <p>{{ $casoPositivo->residente }}</p>
</div>

<!-- Hospedaje Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('hospedaje', 'Hospedaje:') !!}
    <p>{{ $casoPositivo->hospedaje }}</p>
</div>

<!-- Telefono Verificado Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('telefono_verificado', 'Telefono Verificado:') !!}
    <p>{{ $casoPositivo->telefono_verificado }}</p>
</div>

<!-- Codigo Departamento Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('codigo_departamento', 'Codigo Departamento:') !!}
    <p>{{ $casoPositivo->codigo_departamento }}</p>
</div>

<!-- Departamento Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{{ $casoPositivo->departamento }}</p>
</div>

<!-- Zona Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('zona', 'Zona:') !!}
    <p>{{ $casoPositivo->zona }}</p>
</div>

<!-- Personal De Blanco Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('personal_de_blanco', 'Personal De Blanco:') !!}
    <p>{{ $casoPositivo->personal_de_blanco }}</p>
</div>

<!-- Albergue Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('albergue', 'Albergue:') !!}
    <p>{{ $casoPositivo->albergue }}</p>
</div>

<!-- Lugar Albergue Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('lugar_albergue', 'Lugar Albergue:') !!}
    <p>{{ $casoPositivo->lugar_albergue }}</p>
</div>

<!-- Sintomas Fiebre Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('sintomas_fiebre', 'Sintomas Fiebre:') !!}
    <p>{{ $casoPositivo->sintomas_fiebre }}</p>
</div>

<!-- Hospitalizado Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('hospitalizado', 'Hospitalizado:') !!}
    <p>{{ $casoPositivo->hospitalizado }}</p>
</div>

<!-- Signo Sintoma Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('signo_sintoma', 'Signo Sintoma:') !!}
    <p>{{ $casoPositivo->signo_sintoma }}</p>
</div>

<!-- Vacuna Para La Influenza Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('vacuna_para_la_influenza', 'Vacuna Para La Influenza:') !!}
    <p>{{ $casoPositivo->vacuna_para_la_influenza }}</p>
</div>

<!-- Fecha Vacunacion Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('fecha_vacunacion', 'Fecha Vacunacion:') !!}
    <p>{{ $casoPositivo->fecha_vacunacion }}</p>
</div>

<!-- Viajo Resiente Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('viajo_resiente', 'Viajo Resiente:') !!}
    <p>{{ $casoPositivo->viajo_resiente }}</p>
</div>

<!-- Centro Asistencia Covid Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('centro_asistencia_covid', 'Centro Asistencia Covid:') !!}
    <p>{{ $casoPositivo->centro_asistencia_covid }}</p>
</div>

<!-- Centro Asistencia Pais Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('centro_asistencia_pais', 'Centro Asistencia Pais:') !!}
    <p>{{ $casoPositivo->centro_asistencia_pais }}</p>
</div>

<!-- Centro Asistencia Ciudad Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('centro_asistencia_ciudad', 'Centro Asistencia Ciudad:') !!}
    <p>{{ $casoPositivo->centro_asistencia_ciudad }}</p>
</div>

<!-- Nombre Centro Asistencia Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('nombre_centro_asistencia', 'Nombre Centro Asistencia:') !!}
    <p>{{ $casoPositivo->nombre_centro_asistencia }}</p>
</div>

<!-- Fecha Asistida Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('fecha_asistida', 'Fecha Asistida:') !!}
    <p>{{ $casoPositivo->fecha_asistida }}</p>
</div>

<!-- Contacto Con Animales Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('contacto_con_animales', 'Contacto Con Animales:') !!}
    <p>{{ $casoPositivo->contacto_con_animales }}</p>
</div>

<!-- Contacto Persona Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('contacto_persona', 'Contacto Persona:') !!}
    <p>{{ $casoPositivo->contacto_persona }}</p>
</div>

<!-- Tipo Contacto Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('tipo_contacto', 'Tipo Contacto:') !!}
    <p>{{ $casoPositivo->tipo_contacto }}</p>
</div>

<!-- Contacto Otro Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('contacto_otro', 'Contacto Otro:') !!}
    <p>{{ $casoPositivo->contacto_otro }}</p>
</div>

<!-- Contacto Con Infectado Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('contacto_con_infectado', 'Contacto Con Infectado:') !!}
    <p>{{ $casoPositivo->contacto_con_infectado }}</p>
</div>

<!-- Dato De Contacto Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('dato_de_contacto', 'Dato De Contacto:') !!}
    <p>{{ $casoPositivo->dato_de_contacto }}</p>
</div>

<!-- Toma De Muestra Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('toma_de_muestra', 'Toma De Muestra:') !!}
    <p>{{ $casoPositivo->toma_de_muestra }}</p>
</div>

<!-- Laboratorio Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('laboratorio', 'Laboratorio:') !!}
    <p>{{ $casoPositivo->laboratorio }}</p>
</div>

<!-- Nro Planilla Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('nro_planilla', 'Nro Planilla:') !!}
    <p>{{ $casoPositivo->nro_planilla }}</p>
</div>

<!-- Anho Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('anho', 'Anho:') !!}
    <p>{{ $casoPositivo->anho }}</p>
</div>

<!-- Responsable De Carga Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('responsable_de_carga', 'Responsable De Carga:') !!}
    <p>{{ $casoPositivo->responsable_de_carga }}</p>
</div>

<!-- Usuario Lugar Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('usuario_lugar', 'Usuario Lugar:') !!}
    <p>{{ $casoPositivo->usuario_lugar }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $casoPositivo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-3 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $casoPositivo->updated_at }}</p>
</div>
</ul>
</li>
