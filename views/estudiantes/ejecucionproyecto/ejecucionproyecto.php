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
                                <div class="col-md-8">
                                    <form>
                                        <table class="table table-bordered custom-table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="scope-row text-center">EDITAR FECHA DE FINALIZACION</th>
                                                    <th scope="row" class="scope-row text-center">REGISTRAR ENCUESTA DE SATISFACCIÓN</th>
                                                    <th scope="row" class="scope-row text-center">CONFIRMACION DE PARTICIPACION EN EL PROYECTO</th>
                                                    <th scope="row" class="scope-row text-center">SUBIR INFORME FINAL</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarfecha" data-bs-whatever="@mdo">EDITAR FECHA</button></td>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarfecha" data-bs-whatever="@mdo">REGISTRAR ENCUESTA</button></td>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarfecha" data-bs-whatever="@mdo">PARTICIPACION</button></td>
                                                    <td class="text-justify text-center"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarfecha" data-bs-whatever="@mdo">REGISTRAR</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="col-md-4">
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

<div class="modal fade" id="editarfecha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>