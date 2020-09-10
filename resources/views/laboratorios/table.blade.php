<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
         <th>Nombre Laboratorio</th>
        <th>Descripcion</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Representante</th>
                  <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($laboratorios as $laboratorio)
            <tr>
                <td>{{ $laboratorio->nombre_laboratorio }}</td>
            <td>{{ $laboratorio->descripcion }}</td>
            <td>{{ $laboratorio->direccion }}</td>
            <td>{{ $laboratorio->telefono }}</td>
            <td>{{ $laboratorio->representante }}</td>
                <td>
                    {!! Form::open(['route' => ['laboratorios.destroy', $laboratorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('laboratorios.show', [$laboratorio->id]) }}" class='btn btn-ghost-info btn-sm'><i class="fa fa-eye"></i></a>
                    </div>
                        <div class='btn-group'>
                        <a href="{{ route('laboratorios.edit', [$laboratorio->id]) }}" class='btn btn-ghost-warning btn-sm'><i class="fa fa-edit"></i></a>
                    </div>
                        <div class='btn-group'>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger btn-sm', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>