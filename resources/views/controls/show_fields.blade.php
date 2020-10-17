<ul class="list-group">
<li class="list-group-item">
     <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-address-book fa-2x"></i> <strong>Datos del control hecho al Paciente.</strong></th>
                </tr>
              </table>
<!-- Paciente Id Field -->
<table class="table table-bordered" id="data-table">
                <tr>
    <th><strong>Nro de Caso: </strong>{{ $control->paciente->paciente_id }}</th>
<!-- Fecha Analisis Field -->

    <th><strong>Fecha de Analisis</strong>{{ $control->fecha_analisis }}</th>
   <th><strong>Control ID: </strong>{{ $control->paciente->paciente_id }}</th>
    <th><strong>Estado Paciente: </strong>@switch(true)
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
            @endswitch</th>
</tr>
<tr>

    <!-- Recomendacion Field -->
     <th><strong>Recomendacion: </strong>{{ $control->recomendacion }}</th>
     <!-- Fecha Alta Field -->
    <th><strong>Fecha de Alta: </strong>{{ $control->fecha_alta }}</th>
</div>
<!-- Created At Field -->
    <th><strong>Creado: </strong>{{ $control->created_at }}</th>
<!-- Updated At Field -->
    <th><strong>Actualizado: </strong>{{ $control->updated_at }}</th>
</tr>
</table>
</div>
</ul>
</li>
