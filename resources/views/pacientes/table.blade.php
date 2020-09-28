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
        <th>Comorbilidad</th>
        

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
            <td>{{ $paciente->enfermedad_referencial }}</td>
            
                <td>
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->id]) }}" class='btn btn-ghost-info btn-sm'><i class="fa fa-eye"></i></a>
                    </div>
                     <div class='btn-group'>
                        <a href="{{ route('pacientes.edit', [$paciente->id]) }}" class='btn btn-ghost-warning btn-sm'><i class="fa fa-edit"></i></a>
                    </div>
                     <div class='btn-group'>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'button type="button" class' => 'btn btn-danger btn-rounded btn-sm', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>