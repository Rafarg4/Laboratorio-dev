<div class="table-responsive-sm">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <th>Nombre y Apellido </th>
                <th>Email</th>
       
                <th><center> <i class="fas fa-user-edit fa-2x"></i></center></th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-ghost-info'><i class="fa fa-eye"></i></a>
                    </div>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-ghost-warning'><i class="fa fa-edit"></i></a>
                    </div>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', ' button type="button" class' => 'btn btn-danger btn-rounded', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>