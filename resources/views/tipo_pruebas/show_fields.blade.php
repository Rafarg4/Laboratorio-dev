<ul class="list-group">
<!-- Nombre Field -->
  <li class="list-group-item">
  	 <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-eyedropper fa-2x"></i> <strong>Detalles de Prueba.</strong></th>
                </tr>
              </table>
<table class="table table-bordered" id="data-table">
	<tr>
	<th><strong>Prueba ID: </strong>{{ $tipoPrueba->id }}</th>


    <th><strong>Nombre de Prueba: </strong>{{ $tipoPrueba->nombre }}</th>

<!-- Descripcion Field -->

    <th><strong>Descripcion: </strong>{{ $tipoPrueba->descripcion }}</th>

<!-- Created At Field -->

    <th><strong>Creado: </strong>{{ $tipoPrueba->created_at }}</th>

<!-- Updated At Field -->

    <th>Actualizado: {{ $tipoPrueba->updated_at }}</th>
</tr>
</table>
</div>
</li>
</ul>

