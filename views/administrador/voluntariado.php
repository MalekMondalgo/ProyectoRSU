<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-2 mb-2">
                <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registrovoluntariado" data-bs-whatever="@mdo">
                    <img src="../../assets/images/logos/boton-mas.png" width="25px" height="25px" alt="">
                    ASISTENCIA
                </button>
            </div>
            <div class="col-md-2 mb-2">
                <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registroasistencia" data-bs-whatever="@mdo">
                    <img src="../../assets/images/logos/boton-mas.png" width="25px" height="25px" alt="">
                    VOLUNTARIOS
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-body custom-card">
                <h5 class="card-title fw-semibold mb-2 text-white"><b>CONTROL DE CONSTANCIA</b></h5>
                <!-- <p class="text-white">Descargar formato haciendo click al icono.</p>-->
                <div class="table-responsive">
                    <table class="table  text-white mb-0 align-middle" id="voluntariado">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">CODIGO ESTUDIANTIL</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">NOMBRES Y APELLIDOS</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">CARRERA</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">HORA ACUMULADO</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">ENVIAR CONSTANCIA</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">ASISTENCIA</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-white text-center">HISTORIAL</h6>
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
<?php include("layout/footer.php"); ?>

<div class="modal fade modal-xl" id="registroasistencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">REGISTRO DE VOLUNTARIADOS</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="recipient-name" class="col-form-label">NOMBRES Y APELLIDOS: *</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Alumno</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="recipient-name" class="col-form-label">AÑO : *</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Año</option>
                                    <option value="">2024</option>
                                    <option value="">2023</option>
                                    <option value="">2022</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <br> <br>
                                <button type="button" class="btn btn-primary">REGISTRAR</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">CODIGO</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">DNI</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">NOMBRES Y APELLIDOS</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">CORREO ELECTRONICO</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">FECHA NACIMIENTO</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">NUMERO CELULAR</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">FACULTAD</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">CARRERA PROFESIONAL</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">SEMESTRE</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ACCION</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">1</h6>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <span class="fw-normal">2457123654</span>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">72420381</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">Malek Arni Mondalgo Nuñez</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">2457123654@undc.edu.pe</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">15/02/2005</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">965213565</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">INGENIERIA</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">INGENIERIA DE SISTEMAS</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">IX</p>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <p class="mb-0 fw-normal">ELIMINAR</p>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-xl" id="registrovoluntariado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">REGISTRO DE VOLUNTARIADOS</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                </form>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </div>
        </div>
    </div>
</div>