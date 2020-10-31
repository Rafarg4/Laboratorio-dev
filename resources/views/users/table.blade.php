<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                 <th>Laboratorio </th>
                <th>Nombre y Apellido </th>
                <th>Email</th>
                <th>Creado</th>
                <th>Actualizado</th>
       
                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->laboratorio->nombre_laboratorio}}</td>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
               <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
            
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn-floating btn-sm'><i class="cil-clipboard"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn-floating btn-sm'><i class="cil-color-border"></i></a>
                        {!! Form::button('<i class="cil-trash"></i>', ['type' => 'submit', ' button type="button" class' => 'btn-floating btn-sm btn-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>