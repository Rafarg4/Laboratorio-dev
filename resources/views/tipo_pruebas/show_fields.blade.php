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
	<th><strong>Prueba ID: </strong>{{ $tipoPruebas->id }}</th>


    <th><strong>Nombre de Prueba: </strong>{{ $tipoPruebas->nombre }}</th>

<!-- Descripcion Field -->

    <th><strong>Descripcion: </strong>{{ $tipoPruebas->descripcion }}</th>

<!-- Created At Field -->

    <th><strong>Creado: </strong>{{ $tipoPruebas->created_at }}</th>

<!-- Updated At Field -->

    <th>Actualizado: {{ $tipoPruebas->updated_at }}</th>
</tr>
</table>
</div>
</li>
</ul>

