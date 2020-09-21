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
 <br>
  <link rel="icon" type="image/png" href="/laboratorio.png" />
 <div class="container">
 <div class="card">
  <div class="card-header">
    Mi perfil de Usuario
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <h4 class="card-title font-weight-bold mb-2">  <img src="quimica.png" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">Detalles de Usuario</h4>
      <p class="card-text"><i class="fa fa-id-card-alt pr-2"></i>Identificador: {{Auth::user()->id}}</p>
        <p class="card-text"><i class="far fa-user pr-2"></i>Usuario: {{Auth::user()->name}}</p>
         <p class="card-text"><i class="fa fa-at pr-2"></i>Correo: {{Auth::user()->email}}</p>
          <!-- Subtitle -->
            <p class="card-text"><i class="fa fa-user-tie"></i> Rol:Administrador</p>
              <p class="card-text"><i class="fa fa-flask"></i> Laboratorio: RM|Positivo+ </p>
               <p class="card-text"><i class="far fa-clock pr-2"></i> Miembro desde {{ Auth::user()->created_at->toFormattedDateString() }}</p>
                <p class="card-text"><i class="far fa-clock pr-2"></i> Actualizado {{ Auth::user()->updated_at }}</p>
      
      <footer class="blockquote-footer">Datos segun  <cite title="Source Title">su membresia</cite></footer>
    </blockquote>
  </div>
</div>             
</div>
<!-- Card -->
</div>
</div>
</br>

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
