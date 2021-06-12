<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RM|Positivo +</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->   
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

         <link rel="icon" type="image/png" href="/laboratorio.png"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<style type="text/css">
       #loading {width: 100%;height: 100%;top: 0px;left: 0px;position: fixed;display: block; z-index: 99}
       #loading-image {position: absolute;top: 40%;left: 45%;z-index: 100} 
    </style>
    <script language="javascript" type="text/javascript">
        window.onload = function(){ document.getElementById("loading").style.display = "none" }   
</script>
    <div id="loading">
     <img id="loading-image" src="/loader.gif" alt="Loading..." />
</div>
        <!-- Styles -->
    <div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

        <div class="view">
          <img src="/baydos.jpg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          
          <h3 class="font-weight-bold mb-4">Hasta Luego!</h3>

            <p>Si desea volver a ingresar a la plataforma de casos positivos de dengue, debe darle click sobre <strong> "volver al login"</strong>para que se pueda redireccionar al apartado de ingreso de usuarios.</p>
             @if (Route::has('login'))
              @auth   
                    @else
            <a href="{{ route('login') }}" class="btn btn-primary">Volver a login</a>
             @if (Route::has('register'))
                      @endif
                    @endauth
               @endif
        </div>
      </div>
    </div>

  </section>
  <!--Section: Content-->

    </body>
  
</html>
