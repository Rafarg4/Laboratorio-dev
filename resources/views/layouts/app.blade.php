<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
       <title>RM|Positivo +</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <!--  leaflt -->
     <ltlink rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css"type="text/css">
    <link href="{{ asset('css/leaflet.css') }}"  rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/leaflet.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <link rel="icon" type="image/png" href="/laboratorio.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Data tables css -->
    <link href="{{ asset('css/datatable.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}"  rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/maps.css')}}">

    <!-- core ui dashboard-->
    <link href="{{ asset('css/dashboard.css') }}"  rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/dashscript.js') }}"></script>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- core ui icons -->
    <link href="{{ asset('css/all.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/flag.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/brand.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/free.min.css') }}"  rel="stylesheet">

     <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/brand.min.css">--}}
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/flag.min.css">--}}
     
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
   
    <header class="app-header navbar navbar-expand-lg navbar-light white">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
     <a class="navbar-brand" href="{{ url('/home') }}">
        <img class="navbar-brand-full" src="/laboratorio.png" width="30" height="30"
             alt="RM Logo">
             <strong> RM|Positivo+</strong>
    </a>
    <span class="navbar-white sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <div class="container">
           <i class="cil-indent-decrease fa-2x"></i></div>
    </span>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">   
        </li>
         <ul class="nav navbar-nav ml-auto">
            <notification :notifications="notifications"></notification>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="/usuario.jpg" class="img-avatar" alt="Usuario">
                    <span class="d-md-down-none">{{Auth::user()->name}} </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong><i class="cil-settings"></i> Opciones</strong>
                    </div>
                    <a class="dropdown-item" href="{{ action('HomeController@usuario') }}">
                    <i class="cil-user"></i> Perfil</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="cil-exit-to-app"></i> Cerrar sesión</a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>
</ul>
</header>
</body>
</ltlink>
<div class="app-body">
    @include('layouts.sidebar')
    <main class="main">
        @yield('content')
    </main>
</div>
<footer class="app-footer">
    <div>
        <a>RM|Positivo + </a>
        <span>&copy; 2020 Escobar|Gimenez. <i class="fa fa-university"></i></span>
    </div>
    <div class="ml-auto">
        <span>Powered by  Escobar|Gimenez. <i class="fab fa-laravel"></i></span>
       
    </div>
</footer>
</body>
<!-- jQuery 3.1.1 -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
@stack('scripts')
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<!-- Datatables -->
     
     <script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/buttons.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/flashexport.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/jszip.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/pdfmake.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/pdffont.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/html5.js') }}"></script>

     <script type="text/javascript" src="{{ asset('js/print.js') }}"></script>
@yield('scripts')
 <script>
 $(document).ready(function() {
    $('#data-table').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

    </script>

</html>
