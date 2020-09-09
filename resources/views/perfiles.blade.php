@extends('layouts.app')

@section('content')
<!-- CDN de MDB -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
 <div class="container">
              
<!-- Card -->
<div class="card promoting-card">

  <!-- Card content -->
  <div class="card-body d-flex flex-row">

    <!-- Avatar -->
    <img src="logo.png" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

    <!-- Content -->
    <div>
      <!-- Title -->
      <h4 class="card-title font-weight-bold mb-2">Detalles de Usuario</h4>
      <p class="card-text"><i class="fa fa-id-card-alt pr-2"></i>Identificador: {{Auth::user()->id}}</p>
        <p class="card-text"><i class="far fa-user pr-2"></i>Usuario: {{Auth::user()->name}}</p>
          <p class="card-text"><i class="fa fa-at pr-2"></i>Correo: {{Auth::user()->email}}</p>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock pr-2"></i> Miembro desde {{ Auth::user()->created_at->toFormattedDateString() }}</p>
       <p class="card-text"><i class="far fa-clock pr-2"></i> Actualizado {{ Auth::user()->updated_at }}</p>

    </div>
  </div>

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top rounded-0" src="perfil.png" width="80px" height="400px" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  </div>

</div>
<!-- Card -->
</div>
</div>


<!-- Card -->
<!-- JAVASCRPT de mdb -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
@endsection
