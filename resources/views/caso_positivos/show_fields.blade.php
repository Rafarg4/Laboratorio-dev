<ul class="list-group">
  <li class="list-group-item">
     <table class="table table-bordered" id="data-table">
                   <tr><th><i class="cil-hospital fa-2x"></i> <strong>Datos Detallados de Casos Positivos</strong></th>
                   </tr>
               </table>
<table class="table table-bordered" id="data-table">
<!-- Nombre Field -->
<tr>

<!-- Paciente Id Field -->
<th><strong>Datos Personales: </strong>{{ $casoPositivo->paciente->nombre_apellido }}</th>

<!-- Codigo Field -->

<th><strong>Codigo: </strong>{{ $casoPositivo->codigo }}</th>

<!-- Region Field -->

<th><strong>Región: </strong>{{ $casoPositivo->region }}</th>

<!-- Codigo Distrito Field -->

<th><strong>Codigo: </strong>{{ $casoPositivo->codigo_distrito }}</th>
</tr>
<tr>

<!-- Distrito Field -->
<th><strong>Distrito: </strong>{{ $casoPositivo->distrito }}</th>

<!-- Fecha Notificacion Field -->
<th><strong>Fecha Notificación: </strong>{{ $casoPositivo->fecha_notificacion }}</th>

<!-- Medico Field -->
<th><strong>Médico: </strong>{{ $casoPositivo->medico }}</th>

<!-- Media Edad Field -->
<th><strong>Media Edad: </strong>{{ $casoPositivo->media_edad }}</th>

</tr>
<tr>
<!-- Residente Field -->
<th><strong>Residente: </strong>{{ $casoPositivo->residente }}</th>

<!-- Hospedaje Field -->
<th><strong>Hospedaje: </strong>{{ $casoPositivo->hospedaje }}</th>

<!-- Telefono Verificado Field -->
<th><strong>Telefono Verificado: </strong>{{ $casoPositivo->telefono_verificado }}</th>

<!-- Codigo Departamento Field -->
<th><strong>Codigo Departamento: </strong>{{ $casoPositivo->codigo_departamento }}</th>
</tr>
<tr>
<!-- Departamento Field -->
<th><strong>Departamento: </strong>{{ $casoPositivo->departamento }}</th>

<!-- Zona Field -->
<th><strong>Zona: </strong>{{ $casoPositivo->zona }}</th>

<!-- Personal De Blanco Field -->
<th><strong>Personal de Blanco: </strong>{{ $casoPositivo->personal_de_blanco }}</th>

<!-- Albergue Field -->
<th><strong>Albergue: </strong>{{ $casoPositivo->albergue }}</th>
</tr>
<tr>
<!-- Lugar Albergue Field -->
<th><strong>Lugar Albergue: </strong>{{ $casoPositivo->lugar_albergue }}</th>

<!-- Sintomas Fiebre Field -->
<th><strong>Sintomas Fiebre: </strong>{{ $casoPositivo->sintomas_fiebre }}</th>

<!-- Hospitalizado Field -->
<th><strong>Hospitalizado: </strong>{{ $casoPositivo->hospitalizado }}</th>

<!-- Signo Sintoma Field -->
<th><strong>Signo Sintoma: </strong>{{ $casoPositivo->signo_sintoma }}</th>
</tr>
<tr>
<!-- Vacuna Para La Influenza Field -->
<th><strong>Vacuna para la influenza: </strong>{{ $casoPositivo->vacuna_para_la_influenza }}</th>

<!-- Fecha Vacunacion Field -->
<th><strong>Fecha de Vacunación: </strong>{{ $casoPositivo->fecha_vacunacion }}</th>

<!-- Viajo Resiente Field -->
<th><strong>Viajo reciente: </strong>{{ $casoPositivo->viajo_resiente }}</th>

<!-- Centro Asistencia Covid Field -->
<th><strong>Centro de asistencia Covid: </strong>{{ $casoPositivo->centro_asistencia_covid }}</th>
</tr>
<tr>
<!-- Centro Asistencia Pais Field -->
<th><strong>Centro de asistena pais: </strong>{{ $casoPositivo->centro_asistencia_pais }}</th>

<!-- Centro Asistencia Ciudad Field -->
<th><strong>Centro de asistencia ciudad: </strong>{{ $casoPositivo->centro_asistencia_ciudad }}</th>

<!-- Nombre Centro Asistencia Field -->
<th><strong>Nombre centro de asistencia: </strong>{{ $casoPositivo->nombre_centro_asistencia }}</th>

<!-- Fecha Asistida Field -->
<th><strong>Fecha asistencia: </strong>{{ $casoPositivo->fecha_asistida }}</th>
</tr>
<tr>
<!-- Contacto Con Animales Field -->
<th><strong>Contacto con animales: </strong>{{ $casoPositivo->contacto_con_animales }}</th>

<!-- Contacto Persona Field -->
<th><strong>Contacto persona: </strong>{{ $casoPositivo->contacto_persona }}</th>

<!-- Tipo Contacto Field -->
<th><strong>Tipo contacto: </strong>{{ $casoPositivo->tipo_contacto }}</th>

<!-- Contacto Otro Field -->
<th><strong>Contacto otro: </strong>{{ $casoPositivo->contacto_otro }}</th>
</tr>
<tr>
<!-- Contacto Con Infectado Field -->
<th><strong>Contacto con infectado: </strong>{{ $casoPositivo->contacto_con_infectado }}</th>

<!-- Dato De Contacto Field -->
<th><strong>Dato de contacto: </strong>{{ $casoPositivo->dato_de_contacto }}</th>

<!-- Toma De Muestra Field -->
<th><strong>Toma de muestra: </strong>{{ $casoPositivo->toma_de_muestra }}</th>

<!-- Laboratorio Field -->
<th><strong>Laboratorio: </strong>{{ $casoPositivo->laboratorio }}</th>
</tr>
<tr>
<!-- Nro Planilla Field -->
<th><strong>Nro. planilla: </strong>{{ $casoPositivo->nro_planilla }}</th>

<!-- Anho Field -->
<th><strong>Año: </strong>{{ $casoPositivo->anho }}</th>

<!-- Responsable De Carga Field -->
<th><strong>Responsable de carga: </strong>{{ $casoPositivo->responsable_de_carga }}</th>

<!-- Usuario Lugar Field -->
<th><strong>Usuario lugar: </strong>{{ $casoPositivo->usuario_lugar }}</th>
</tr>
<tr>
<!-- Created At Field -->
<th><strong>Creado: </strong>{{ $casoPositivo->created_at }}</th>

<!-- Updated At Field -->
<th><strong>Actualizado: </strong>{{ $casoPositivo->updated_at }}</th>
</tr>
</ul>
</li>
</table>
