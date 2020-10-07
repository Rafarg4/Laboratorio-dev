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
                        <a href="{{ route('laboratorios.show', [$laboratorio->id]) }}" class='btn-floating btn-sm'><i class="cil-low-vision"></i></a>
                        <a href="{{ route('laboratorios.edit', [$laboratorio->id]) }}" class='btn-floating btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>', ['type' => 'submit', 'class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>