<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
        <th>Paciente</th>
        <th>Codigo</th>
        <th>Region</th>
        <th>Codigo Distrito</th>
        <th>Distrito</th>
        <th>Fecha Notificacion</th>
        <th>Medico</th>
        <th>Media Edad</th>
        <th>Residente</th>
        <th>Hospedaje</th>
        <th>Telefono Verificado</th>
        <th>Codigo Departamento</th>
        <th>Departamento</th>
                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($casoPositivos as $casoPositivo)
            <tr>
                <td>{{ $casoPositivo->paciente->nombre_apellido }}</td>
            <td>{{ $casoPositivo->codigo }}</td>
            <td>{{ $casoPositivo->region }}</td>
            <td>{{ $casoPositivo->codigo_distrito }}</td>
            <td>{{ $casoPositivo->distrito }}</td>
            <td>{{ $casoPositivo->fecha_notificacion }}</td>
            <td>{{ $casoPositivo->medico }}</td>
            <td>{{ $casoPositivo->media_edad }}</td>
            <td>{{ $casoPositivo->residente }}</td>
            <td>{{ $casoPositivo->hospedaje }}</td>
            <td>{{ $casoPositivo->telefono_verificado }}</td>
            <td>{{ $casoPositivo->codigo_departamento }}</td>
            <td>{{ $casoPositivo->departamento }}</td>
            
            
                <td>
                    {!! Form::open(['route' => ['casoPositivos.destroy', $casoPositivo->id], 'method' => 'delete']) !!}
                   <div class='btn-group'>
                        <a href="{{ route('casoPositivos.show', [$casoPositivo->id]) }}" class='btn-floating btn-sm'><i class="cil-clipboard"></i></a>
                        <a href="{{ route('casoPositivos.edit', [$casoPositivo->id]) }}" class='btn-floating btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>', ['type' => 'submit', 'class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>