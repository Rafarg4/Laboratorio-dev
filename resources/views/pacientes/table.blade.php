<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
        <th>Datos Personales</th>
        <th>Genero</th>
        <th>Fecha de Nacimiento</th>
        <th>Edad</th>
        <th>Ci</th>
        <th>Barrio</th>
        <th>Telefono</th>
        <th>Grupo Sanguineo</th>
        <th>Prueba</th>
        <th>Resutado</th>
        <th>Usuario</th>
        
        

                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre_apellido }}</td>
            <td>{{ $paciente->genero }}</td>
            <td>{{ $paciente->fechanac }}</td>
            <td>{{ $paciente->edad }}</td>
            <td>{{ $paciente->ci }}</td>
            <td>{{ $paciente->barrio }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->grupo_sanguineo }}</td>
              <td>{{ $paciente->nombre }}</td>
            <td>@switch(true)
            @case($paciente->resultado == 'Negativo')
            <span class="badge badge-primary"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Positivo')
            <span class="badge badge-danger"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Otro' )
            <span class="badge badge-info"> {{ $paciente->resultado }} </span>
            @break
            @case($paciente->resultado == 'Sin eleccion' )
            <span class="badge badge-dark"> {{ $paciente->resultado }} </span>
            @break
            @endswitch</td>
            <td>{{ $paciente->usuario }}</td>
                <td>
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->id]) }}" class="btn-floating btn-sm "><i class="cil-clipboard"></i></a>
                        <a href="{{ route('pacientes.edit', [$paciente->id]) }}" class='btn- btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>', ['type' => 'submit', 'button type="button" class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>