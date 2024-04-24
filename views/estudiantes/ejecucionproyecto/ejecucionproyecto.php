<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("../layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center mb-3">
                    <div class="mx-auto">
                        <img src="../../../assets/images/logos/PasoEjecucion4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text-center h5p">
                        <h5 class="card-title fw-semibold mb-2">REGISTRAR LA FINAZALIZACION DE TU PROYECTO </h5>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <b>NOTA:</b> <br>
                        Primero registrar la fichas de encuesta de Satisfaccion. Luego subir el informe final. <br>
                        Finalmente, esperar a que el estado se vuelva <b>APROBADO</b> para seguir con los tramites de generacion de constancia. Si consideras ampliar la fecha para la finalizacion de tu proyecto, editar la fecha.
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 table-responsive">
                                    <form>
                                        <table class="table table-bordered custom-table ">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="scope-row text-center">EDITAR FECHA DE FINALIZACION</th>
                                                    <th scope="row" class="scope-row text-center">REGISTRAR ENCUESTA DE SATISFACCIÓN</th>
                                                    <th scope="row" class="scope-row text-center">CONFIRMACION DE PARTICIPACION EN EL PROYECTO</th>
                                                    <th scope="row" class="scope-row text-center">SUBIR INFORME FINAL</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarfecha" data-bs-whatever="@mdo">EDITAR FECHA</button></td>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registrarencuesta" data-bs-whatever="@mdo">REGISTRAR ENCUESTA</button></td>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#confirmacionparticipacion" data-bs-whatever="@mdo">PARTICIPACION</button></td>
                                                    <td class="text-justify text-center"><button type="file" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#subirinformefinal" data-bs-whatever="@mdo">REGISTRAR</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="col-md-4 table-responsive">
                                    <table class="table table-bordered custom-table">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="scope-row ">ESTADO</th>
                                                <td class="text-center">PROCESO</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="scope-row ">FECHA ENVIADA</th>
                                                <td class="text-center">17/08/2024</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="scope-row ">OBSERVACION</th>
                                                <td class="text-center"></td>
                                            </tr>
                                            <!-- Añade más filas si es necesario -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../layout/footer.php"); ?>
<!-- MODAL EDITAR FECHA-->
<div class="modal fade" id="editarfecha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">EDITAR FECHA DE FINALIZACION</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha Registrada (Inicio)</label>
                        <input type="text" class="form-control" id="recipient-name" value="17/08/2024" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha Actualizar: </label>
                        <input type="date" class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                        <button type="button" class="btn btn-primary">EDITAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL REGISTRAR ENCUESTA-->
<div class="modal fade modal-xl" id="registrarencuesta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">REGISTRE FICHA DE SATISFACCION</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="recipient-name" class="col-form-label">NOMBRES Y APELLIDOS: *</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Nombres y Apellidos">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="recipient-name" class="col-form-label">DNI: *</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese DNI">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="recipient-name" class="col-form-label">CELULAR: *</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese Edad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="recipient-name" class="col-form-label">EDAD: *</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese Edad">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="recipient-name" class="col-form-label">SELECCIONAR CALIFICACION: *</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Seleccionar Ciclo</option>
                                <option value="" selected>V</option>
                                <option value="">VI</option>
                                <option value="">VII</option>
                                <option value="">IX</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <br><br>
                            <button type="button" class="btn btn-primary">REGISTRAR</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table  mb-0 align-middle" id="myTable3">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">ID</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">NOMBRES Y APELLIDOS</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">DNI</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">EDAD</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">NUMERO<br>CELULAR</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">CALIFICACION</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">ACCION</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-black">
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">TAIPE CANCHO MARIO HUBERTO</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">72455351</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">20</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">99999999 </p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">BUENA </p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="cursor-pointer">
                                                <a href="detalleproyectofase.php">
                                                    <img src="../../assets/images/logos/buscar.png" width="30" alt="" />
                                                </a>
                                            </div>
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
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PARTICIPACION -->
<div class="modal fade modal-xl" id="confirmacionparticipacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">REGISTRE FICHA DE SATISFACCION</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table  mb-0 align-middle" id="myTable3">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">ID</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">NOMBRES Y APELLIDOS</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">DNI</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-bold mb-0 text-center">ACCION</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-black">
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">TAIPE CANCHO MARIO HUBERTO</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">72455351</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
                </form>
            </div>
        </div>
    </div>
</div>