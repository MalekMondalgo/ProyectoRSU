    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link <?php $paginas = array('index1', 'estadoproyecto', 'conformidad');
                                        foreach ($paginas as $pagina) {
                                            echo ($pagina_actual == $pagina) ? 'active' : '';
                                        } ?>" href="../fasesproyecto/" aria-expanded="false">
                    <span>
                        <!--  <i class="ti ti-article"></i>-->
                        <img src="../../../assets/images/logos/incioproyectoestudiante.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="hide-menu"><b>FASES DEL PROYECTO</b></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link <?php $paginas = array('index2', 'ejecucionproyecto', 'segundoentregable', 'tercerentregable');
                                        foreach ($paginas as $pagina) {
                                            echo ($pagina_actual == $pagina) ? 'active' : '';
                                        } ?>" href="../ejecucionproyecto/" aria-expanded="false">
                    <span>
                        <!-- <i class="ti ti-article"></i>-->
                        <img src="../../../assets/images/logos/proyecto.png" width="25px" height="25px" alt="">

                    </span>
                    <span class="hide-menu"><b>EJECUCIÓN DEL PROYECTO</b></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../autorizacionimagen/" aria-expanded="false">
                    <span>
                        <!--  <i class="ti ti-alert-circle"></i>-->
                        <img src="../../../assets/images/logos/imagen.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="hide-menu"><b>AUTORIZACION DE IMAGEN</b></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="../encuestadocente/" aria-expanded="false">
                    <span>
                        <!--  <i class="ti ti-cards"></i>-->
                        <img src="../../../assets/images/logos/encuestadocente.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="hide-menu"><b>ENCUESTA DOCENTE</b></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link  <?php $paginas = array('index3', 'estadosolicitud');
                                        foreach ($paginas as $pagina) {
                                            echo ($pagina_actual == $pagina) ? 'active' : '';
                                        } ?>" href="../solicitarconstancia/" aria-expanded="false">
                    <span>
                        <!--  <i class="ti ti-cards"></i>-->
                        <img src="../../../assets/images/logos/solicitudconstancia.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="hide-menu"><b>SOLICITAR CONSTANCIA</b></span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
    <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->