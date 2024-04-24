<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body custom-card">
                    <h5 class="card-title fw-semibold mb-2 text-white">PROYECTOS</h5>
                    <p class="text-white">Descargar formato haciendo click al icono.</p>
                    <div class="table-responsive">
                        <table class="table  text-white mb-0 align-middle" id="myTable3">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">CODIGO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">TITULO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ASESOR</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ESTUDIANTE<br>RESPONSABLE</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ESCUELA<br>PROFESIONAL</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">MODALIDAD</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">VER<br>PROYECTO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ESTADO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">VISTO<br>BUENO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ACCION</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white">PS_01_2023_I</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-center">“FORTALECIMIENTO DEL CONTROL ETOLÓGICO A TRAVÉS DEL USO DE TRAMPAS CROMÁTICAS DIRIGIDO A LOS AGRICULTORES DEL DISTRITO DE QUILMANÁ” </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">DR. TAIPE CANCHO, MARIO HUBERTO </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">JUAN PEREZ SALAS </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">INGENERIA </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">PRESENCIAL </p>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <div class="cursor-pointer">
                                            <a href="detalleproyectofase.php">
                                                <img src="../../assets/images/logos/buscar.png" width="30" alt="" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold">CULMINADO</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold">APROBADO</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold">APROBADO</span>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layout/footer.php"); ?>