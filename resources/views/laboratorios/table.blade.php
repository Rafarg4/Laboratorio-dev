<div class="table-responsive-sm">
    <table class="table table-striped" id="laboratorios-table">
        <thead>
            <tr>
                <th>Nombre Laboratorio</th>
        <th>Descripcion</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Representante</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laboratorios as $laboratorio)
            <tr>
                <td>{{ $laboratorio->nombre_laboratorio }}</td>
            <td>{{ $laboratorio->descripción }}</td>
            <td>{{ $laboratorio->direccion }}</td>
            <td>{{ $laboratorio->telefono }}</td>
            <td>{{ $laboratorio->representante }}</td>
                <td>
                    {!! Form::open(['route' => ['laboratorios.destroy', $laboratorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('laboratorios.show', [$laboratorio->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('laboratorios.edit', [$laboratorio->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>