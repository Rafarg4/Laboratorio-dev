<!--
<li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/home') }}">
        <i class="fa fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>


<li class="nav-item {{ Request::is('tipoPruebas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tipoPruebas.index') }}">
        <i class="fa fa-ambulance"></i>
        <span>Tipo Pruebas</span>
    </a>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
       <i class="fa fa-address-book"></i>
        <span>Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('laboratorios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('laboratorios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Laboratorios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('controls*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('controls.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Controls</span>
    </a>
</li>
<li class="nav-item {{ Request::is('casoPositivos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('casoPositivos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Caso Positivos</span>
    </a>
</li>
