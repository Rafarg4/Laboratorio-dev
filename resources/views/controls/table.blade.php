<div class="table-responsive-sm">
    <table class="table table-striped" id="controls-table">
        <thead>
            <tr>
                <th>Paciente Id</th>
        <th>Fecha Analisis</th>
        <th>Estado Paciente</th>
        <th>Recomendacion</th>
        <th>Fecha Alta</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($controls as $control)
            <tr>
                <td>{{ $control->paciente->nombre }}</td>
            <td>{{ $control->fecha_analisis }}</td>
            <td>{{ $control->estado_paciente }}</td>
            <td>{{ $control->recomendacion }}</td>
            <td>{{ $control->fecha_alta }}</td>
                <td>
                    {!! Form::open(['route' => ['controls.destroy', $control->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('controls.show', [$control->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('controls.edit', [$control->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>