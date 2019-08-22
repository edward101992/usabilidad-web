      <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            @if(Entrust::hasRole('administrador'))
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Administrador</span>
                                <span class="arrow"></span>
                            </a>
                           @endif 
                            @if(Entrust::hasRole('estudiante'))
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Estudiante</span>
                                <span class="arrow"></span>
                            </a>
                           @endif
                            @if(Entrust::hasRole('evaluador'))
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Evaluador</span>
                                <span class="arrow"></span>
                            </a>
                           @endif
                            
                    <ul class="sub-menu">                          
                            <li class="nav-item start ">
                                <a href="{{ asset('home') }}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Inicio</span>
                                </a>
                            </li>

                            @if(Entrust::hasRole('administrador'))
                            <li class="nav-item start ">
                                <a href="" class="nav-link ">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span class="title">Modificar Bienvenido</span>
                                </a>
                            </li>
                            @endif  

                            </ul>
                        </li>
                            @if(Entrust::hasRole('administrador'))
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Usuario</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               
                                <li class="nav-item  ">
                                    <a href="{{ route('usuario.lista') }}" class="nav-link ">
                                        <i class="icon-user-following"></i>
                                        <span class="title">Gestion de Usuarios</span>
                                    </a>
                                </li>

                                 <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <i class=" icon-user-follow"></i>
                                        <span class="title">Agregar Usuario</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(Entrust::hasRole('administrador'))
                           <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Plataformas</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                <a href="" class="nav-link ">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span class="title">Gestionar Plataformas</span>
                                </a>
                            </li>
                            </ul>
                        </li>
                        @endif
                        @if (entrust::hasRole('administrador'))
                           <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Reportes</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-bar-chart"></i> Plataforma </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <i class="icon-user-following"></i>
                                        <span class="title">Usuarios</span>
                                    </a>
                                </li>          
                            </ul>
                        </li>
                        @endif  
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Configurcion</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-settings"></i> Cuenta
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                      <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link nav-toggle"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                <span class="title">Salir</span>
                                <span class="arrow"></span>
                            </a>
                      </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->