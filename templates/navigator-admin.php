            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle" src="../img/landing/default-avatar.png" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                                <?php echo "Hola, " . $_SESSION['nombre']; ?>
                                            </strong>
                                        </span></span></a>
                            </div>
                            <div class="logo-element">
                                <img src="../img/landing/logo_core.png" width="75px">
                            </div>
                        </li>
                        <li>
                            <a href="inicio.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                        </li>
                        <li>
                            <a href="asistentes.php"><i class="fa fa-users"></i> <span class="nav-label">Asistentes</span></a>
                        </li>
                        <li>
                            <a href="ponentes.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Ponentes</span></a>
                        </li>
                        <li>
                            <a href="conferencias.php"><i class="fa fa-slideshare"></i> <span class="nav-label">Conferencias</span></a>
                        </li>
                        <li>
                            <a href="talleres.php"><i class="fa fa-flask" ></i> <span class="nav-label">Talleres</span></a>
                        </li>
                        <li>
                            <a href="../classes/logout.php"><i class="fa fa-sign-out"></i> <span class="nav-label">Cerrar sesión</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            