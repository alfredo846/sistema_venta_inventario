<nav id="mainnav-container">
                <div id="mainnav">
                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <ul id="mainnav-menu" class="list-group"><br>

						            <!--Menu list item inicio-->
						            <li class="{{ request()->routeIs('inicio') ? 'active-sub' : ''}}">
										<a href="/">
						                    <i class="fa fa-home"></i>
						                    <span class="menu-title">Inicio</span>
						                </a>
						            </li>
									<li class="list-divider"></li>

						
						            <!--Menu list item catálogos-->
						            <li class="{{ request()->routeIs('categoria', 'marca', 'empaque', 'unidad_medida') ? 'active-sub' : ''}}">
						                <a href="#">
						                    <i class="fa fa-list-alt"></i>
						                    <span class="menu-title">Catálogos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="{{ request()->routeIs('categoria', 'marca', 'empaque', 'unidad_medida') ? 'collapse in' : ''}}">
						                    <li class="{{ request()->routeIs('categoria') ? 'active-link' : ''}}"><a href="categoria">Categorías</a></li>
											<li class="{{ request()->routeIs('marca') ? 'active-link' : ''}}"><a href="marca">Marcas</a></li>
											<li class="{{ request()->routeIs('empaque') ? 'active-link' : ''}}"><a href="empaque">Empaques</a></li>
											<li class="{{ request()->routeIs('unidad_medida') ? 'active-link' : ''}}"><a href="unidad_medida">Unidades de medida</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>


									<!--Menu list item productos-->
						            <li class="{{ request()->routeIs('producto', 'existencia', 'agotado', 'poca_existencia', 'sobreexistencia') ? 'active-sub' : ''}}">
						                <a href="#">
						                    <i class="fa fa-star"></i>
						                    <span class="menu-title">Productos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="{{ request()->routeIs('producto', 'existencia', 'agotado', 'poca_existencia', 'sobreexistencia') ? 'collapse in' : ''}}">
											<li class="{{ request()->routeIs('producto') ? 'active-link' : ''}}"><a href="producto">Productos</a></li>
						                    <li class="{{ request()->routeIs('existencia') ? 'active-link' : ''}}"><a href="existencia">Existencias</a></li>
											<li class="{{ request()->routeIs('agotado') ? 'active-link' : ''}}"><a href="agotado">Agotados</a></li>
											<li class="{{ request()->routeIs('poca_existencia') ? 'active-link' : ''}}"><a href="poca_existencia">Quedan pocas existencias</a></li>
											<li class="{{ request()->routeIs('sobreexistencia') ? 'active-link' : ''}}"><a href="sobreexistencia">Con sobre existencias</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>
						

									<!--Menu list item ventas-->
						            <li class="{{ request()->routeIs('venta', 'nueva_venta', 'consultar_venta', 'reporte_venta') ? 'active-sub' : '' }}">
						                <a href="#">
						                    <i class="fa fa-shopping-cart"></i>
						                    <span class="menu-title">Ventas</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="{{ request()->routeIs('venta', 'nueva_venta', 'consultar_venta', 'reporte_venta') ? 'collapse in' : '' }}">
										    <li class="{{ request()->routeIs('venta') ? 'active-link' : ''}}"><a href="venta">Ventas</a></li>
											<li class="{{ request()->routeIs('nueva_venta') ? 'active-link' : ''}}"><a href="nueva_venta">Nueva venta</a></li>
											<li class="{{ request()->routeIs('consultar_venta') ? 'active-link' : ''}}"><a href="consultar_venta">Consultar venta</a></li>
											<li class="{{ request()->routeIs('reporte_venta') ? 'active-link' : ''}}"><a href="reporte_venta">Reportes</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>


									<!--Menu list item compras-->
						            <li class="{{ request()->routeIs('compra', 'nueva_compra', 'consultar_compra', 'reporte_compra') ? 'active-sub' : '' }}">
						                <a href="#">
						                    <i class="fa fa-shopping-bag"></i>
						                    <span class="menu-title">Compras</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="{{ request()->routeIs('compra', 'nueva_compra', 'consultar_compra', 'reporte_compra') ? 'collapse in' : '' }}">
									    	<li class="{{ request()->routeIs('compra') ? 'active-link' : ''}}"><a href="compra">Compras</a></li>
											<li class="{{ request()->routeIs('nueva_compra') ? 'active-link' : ''}}"><a href="nueva_compra">Nueva compra</a></li>
											<li class="{{ request()->routeIs('consultar_compra') ? 'active-link' : ''}}"><a href="consultar_compra">Consultar compra</a></li>
											<li class="{{ request()->routeIs('reporte_compra') ? 'active-link' : ''}}"><a href="reporte_compra">Reportes</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>


									<!--Menu list item inventarios-->
						            <li class="{{ request()->routeIs('inventario_inicial', 'nuevo_inventario') ? 'active-sub' : '' }}">
						                <a href="#">
						                    <i class="fa fa-archive"></i>
						                    <span class="menu-title">Inventario</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
										<ul class="{{ request()->routeIs('inventario_inicial', 'nuevo_inventario') ? 'collapse in' : '' }}">
						                    <li class="{{ request()->routeIs('inventario_inicial') ? 'active-link' : '' }}"><a href="inventario_inicial">Inventario inicial</a></li>
											<li class="{{ request()->routeIs('nuevo_inventario') ? 'active-link' : '' }}"><a href="nuevo_inventario">Abrir nuevo inventario</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>

						
						            <!--Menu list item usuarios-->
						            <li class="{{ request()->routeIs('usuario', 'rol') ? 'active-sub' : ''}}">
						                <a href="#">
						                    <i class="fa fa-user-circle-o"></i>
						                    <span class="menu-title">Usuarios</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="{{ request()->routeIs('usuario', 'rol') ? 'collapse in' : ''}}">
										    <li class="{{ request()->routeIs('usuario') ? 'active-link' : ''}}"><a href="usuario">Usuarios</a></li>
											<li class="{{ request()->routeIs('rol') ? 'active-link' : ''}}"><a href="rol">Roles</a></li>
						                </ul>
						            </li>
									<li class="list-divider"></li>


									<!--Menu list item backup-->
									<li class="{{ request()->routeIs('backup') ? 'active-sub' : ''}}">
										<a href="backup">
						                    <i class="fa fa-database"></i>
						                    <span class="menu-title">Backup</span>
						                </a>
						            </li>
									<li class="list-divider"><br></li>
									<li class="list-divider"></li>

									
						        </ul><br>

                            </div><br>
                        </div>
                    </div>
                    <!--End menu-->

                </div>
            </nav>