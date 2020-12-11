<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
        <th>Nro de Control</th>
        <th>Fecha Analisis</th>
        <th>Estado Paciente</th>
        <th>Recomendacion</th>
        <th>Fecha Alta</th>
                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($controls as $control)
            <tr>
            <td>{{ $control->paciente_id }}</td>
            <td>{{ $control->fecha_analisis }}</td>
            <td>@switch(true)
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
            @endswitch</td>
            <td>{{ $control->recomendacion }}</td>
            <td>{{ $control->fecha_alta }}</td>
                <td>
                    {!! Form::open(['route' => ['controls.destroy', $control->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('controls.show', [$control->id]) }}" class='btn-floating btn-sm'><i class="cil-clipboard"></i></a>
                        <a href="{{ route('controls.edit', [$control->id]) }}" class='btn-floating btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>', ['type' => 'submit', 'class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
