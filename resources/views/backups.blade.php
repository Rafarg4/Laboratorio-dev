@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png"/>
@section('content')
<br>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
   <!-- Card content -->
		<div class="jumbotron">
  			<h2 class="display-4"><i class="cil-shield-alt"></i>  BACKUP</h2>
  				<p class="lead">Para escargar una copia de seguridad de la base de datos debe precionar el boton de descargar backup.</p>
  				<hr class="my-4">
 				 <p>Eliga el forma en cual quiera exportar la base de datos.</p>
  					<a class="btn btn-success btn-lg" href="#" role="button"><i class="fas fa-file-csv"></i> Excel</a>
  					<a class="btn btn-primary btn-lg" href="#" role="button"><i class="fas fa-database"></i> SQL</a>
  					<a class="btn btn-danger btn-lg" href="#" role="button"><i class="fas fa-file-alt"></i> JSON</a>
			</br>
	</div>




















@endsection