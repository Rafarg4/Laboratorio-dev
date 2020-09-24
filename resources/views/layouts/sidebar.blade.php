<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}"><i class="icon-speedometer"></i> Escritorio</a>
                    </li>
                    <li class="nav-title">
                        Mantenimiento
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Carga de Datos</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=1" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i> Casos positivos</a>
                            </li>
                            <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="{{ route('tipoPruebas.index') }}"><i class="cil-eyedropper"></i> Tipo de Prueba</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="cil-contact"></i> Pacientes</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="{{ route('pacientes.index') }}"><i class="cil-people"></i> Lista de Pacientes</a>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="{{ route('controls.index') }}"><i class="cil-address-book"></i> Control</a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="cil-layers"></i> Historial</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="{{ action('HistorialController@lista') }}"><i class="cil-list"></i> Historial de paciente</a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="cil-laptop"></i> Laboratorios</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="{{ route('laboratorios.index') }}"><i class="cil-beaker"></i>     Lista de Laboratorios</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=7" class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}"><i class="icon-user"></i> Usuarios</a>
                            </li>
                            <li @click="menu=8" class="nav-item">
                                <a class="nav-link" href="{{ action('HomeController@usuario') }}"><i class="icon-user-following"></i> Mi Perfil</a>
                            </li>
                            <li @click="menu=8" class="nav-item">
                                <a class="nav-link" href="#"><i class="cil-people"></i> Roles</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=9" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Usuario</a>
                            </li>
                            <li @click="menu=10" class="nav-item">
                                <a class="nav-link" href="{{ action('GraficoController@index') }}"><i class="cil-chart-line"></i> Reporte Graficos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fab fa-audible"></i> Auditoria</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"><i class="cil-book"></i> Auditoria Interna</a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=11" class="nav-item">
                        <a class="nav-link" href="#"><i class="cil-notes"></i> Manual <span class="badge badge-danger">PDF</span></a>
                    </li>
                    <li @click="menu=12" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-info"></i> Acerca de..<span class="badge badge-info">IT</span></a>
                    </li>
                </ul>
            </nav>
        
        </div>


