<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoPruebas as $tipoPrueba)
            <tr>
                <td>{{ $tipoPrueba->nombre }}</td>
            <td>{{ $tipoPrueba->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoPruebas.destroy', $tipoPrueba->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoPruebas.show', [$tipoPrueba->id]) }}"class='btn btn-ghost-info btn-sm'><i class="fa fa-eye"></i></a>
                    </div>
                    <div class='btn-group'>
                        <a href="{{ route('tipoPruebas.edit', [$tipoPrueba->id]) }}" class='btn btn-ghost-warning btn-sm'><i class="fa fa-edit"></i></a>
                    </div>
                        <div class='btn-group'>
                        {!! Form::button('<i class="fa fa-trash"></i>',['type' => 'submit', ' button type="button" class' => 'btn btn-danger btn-rounded btn-sm', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
