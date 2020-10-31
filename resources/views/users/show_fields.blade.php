<ul class="list-group">

<!-- Nombre Field -->
<li class="list-group-item">
	<table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-contact fa-2x"></i> <strong>Detalles de Ususrio.</strong></th>
                </tr>
              </table>
<table class="table table-bordered" id="data-table">
	<tr>

    <th><strong>Nombre y Apellido: </strong>{{ $user->name }}</th>

<!-- Email Field -->
    <th><strong>Email: </strong>{{ $user->email }}</th>
<!-- Created At Field -->
    <th><strong>Laboratorio</strong>{{ $user->laboratorio->nombre_laboratorio }} </th>

    <th><strong>Creado: </strong>{{ $user->created_at }}</th>
   
</tr>
<tr>
   <th><strong>Actualizado: </strong>{{ $user->updated_at }}</th>
</tr>
</table>
</div>
</li>
</ul>
