<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body custom-card">
                    <h5 class="card-title fw-semibold mb-2 text-white"><b>CONTROL DE CONSTANCIA</b></h5>
                    <!-- <p class="text-white">Descargar formato haciendo click al icono.</p>-->
                    <div class="table-responsive">
                        <table class="table  text-white mb-0 align-middle" id="tbldata">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ID</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">FECHA ENVIADA</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ESTUDIANTE</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">BANCO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">VER VOCUHER</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ENVIAR CONSTANCIA</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ESTADO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">TESORERIA</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white">1</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-center">MARIO HUBERTO</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">TAIPE </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">CANCHO</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-center cursor-pointer">
                                            <img src="../../assets/images/logos/documento.png" width="50px" height="50px" alt="">
                                        </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-warning rounded-3 fw-semibold">NO RECIBIDO</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold">NO RECIBIDO</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-warning rounded-3 fw-semibold">NO RECIBIDO</span>
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