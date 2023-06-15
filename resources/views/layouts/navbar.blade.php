<header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('assets\img\logo.png') }}" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Logo</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->
                    </ul>

                    <ul class="nav navbar-top-links">

                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <img class="img-circle img-sm" src="{{ asset('assets\img\profile-photos\1.png') }}" alt="Profile Picture">
                                <span class="ic-user pull-left active text-overflow text-bold text-light">
                                    Alfredo Heraz Pérez  <i class="fa fa-caret-right"></i>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Mí perfil</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Cambiar foto</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><i class="demo-pli-gear icon-lg icon-fw"></i> Cambiar contraseña</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html"><i class="demo-pli-unlock icon-lg icon-fw"></i> Cerrar sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--End user dropdown-->
                    </ul>
                </div>
                <!--End Navbar Dropdown-->
            </div>
        </header>