<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mb-2">
            </div>
            <div class="col-md-2 mb-2">
                <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    <img src="../../assets/images/logos/boton-mas.png" width="25px" height="25px" alt="">
                    USUARIO</button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body custom-card">
                    <h5 class="card-title fw-semibold mb-2 text-white">GESTION DE USUARIO</h5>
                    <!-- <p class="text-white">Descargar formato haciendo click al icono.</p>-->
                    <div class="table-responsive">
                        <table class="table  text-white mb-0 align-middle" id="myTable2">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ID</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">NOMBRES</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">APPELIDO <br> PATERNO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">APPELIDO<br>MATERNO</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">DNI</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">CELULAR</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ROL</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">EMAIL</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 text-white text-center">ACCION</h6>
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
                                        <p class="mb-0 fw-normal">72727272 </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">999999999 </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">TESORERIA </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">rtesoreria@undc.edu.pe </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold"></span>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">REGISTRAR USUARIO</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">NOMBRES: *</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">APELLIDO PATERNO: *</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">APELLIDO MATERNO: *</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">DNI: *</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">CELULAR: *</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">ROL: *</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Seleccionar Rol</option>
                                <option value="">Administrador</option>
                                <option value="">Tesoreria</option>
                                <option value="">Director de Carrera</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="recipient-name" class="col-form-label">EMAIL: *</label>
                            <input type="email" class="form-control" id="recipient-name">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>