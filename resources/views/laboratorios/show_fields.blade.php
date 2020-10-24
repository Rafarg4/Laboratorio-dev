<ul class="list-group">
<li class="list-group-item">
     <table class="table table-bordered" id="data-table">
                <tr>
                  <th><i class="cil-beaker fa-2x"></i> <strong>Datos de Laboratorio.</strong></th>
                </tr>
              </table>
<!-- Paciente Id Field -->
<table class="table table-bordered" id="data-table">
                <tr>
    <th><strong>Nombre de Laboratorio: </strong>{{ $laboratorio->nombre_laboratorio }}</th>

    <th><strong>Descripcion: </strong> {{ $laboratorio->descripcion }}</th>

    <th><strong>Direccion: </strong> {{ $laboratorio->direccion }}</th>

    <th><strong>Telefono: </strong> {{ $laboratorio->telefono }}</th>
</tr>
<tr>
    <th><strong>Representante: </strong> {{ $laboratorio->representante }}</th>

    <th><strong>Creado: </strong> {{ $laboratorio->created_at }}</th>

    <th><strong>Actualizado: </strong> {{ $laboratorio->updated_at }}</th>
</tr>
</table>
</li>
</ul>

