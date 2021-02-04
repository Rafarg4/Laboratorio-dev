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
    <th><strong>Paciente: </strong>{{ $controls->nombre_apellido }}</th>
<!-- Fecha Analisis Field -->

    <th><strong>Fecha de Analisis</strong>{{ $controls->fecha_analisis }}</th>
   <th><strong>Nro de Caso: </strong>{{ $controls->paciente_id }}</th>
    <th><strong>Estado Paciente: </strong>@switch(true)
            @case($controls->estado_paciente == 'Inactivo')
            <span class="badge badge-primary"> {{ $controls->estado_paciente }} </span>
            @break
            @case($controls->estado_paciente == 'Activo')
            <span class="badge badge-warning"> {{ $controls->estado_paciente }} </span>
            @break
            @case($controls->estado_paciente == 'Fallecido' )
            <span class="badge badge-danger"> {{ $controls->estado_paciente }} </span>
            @break
            @case($controls->estado_paciente == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $controls->estado_paciente }} </span>
            @break
            @endswitch</th>
</tr>
<tr>

    <!-- Recomendacion Field -->
     <th><strong>Recomendacion: </strong>{{ $controls->recomendacion }}</th>
     <!-- Fecha Alta Field -->
    <th><strong>Fecha de Alta: </strong>{{ $controls->fecha_alta }}</th>
     <th><strong>Creado: </strong>{{ $controls->created_at }}</th>
      <th><strong>Actualizado: </strong>{{ $controls->updated_at }}</th>
    
</div>
</tr>
</table>
</div>
</ul>
</li>
