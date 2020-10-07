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
                        <a href="{{ route('tipoPruebas.show', [$tipoPrueba->id]) }}"class='btn-floating btn-sm'><i class="cil-low-vision"></i></a>
                        <a href="{{ route('tipoPruebas.edit', [$tipoPrueba->id]) }}" class='btn-floating btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>',['type' => 'submit', ' button type="button" class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
