<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">DATOS GENERALES</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <style>
                                        /* Estilos CSS para el color de fondo de los encabezados de las filas */
                                        th[scope="row"] {
                                            background-color: #0F4143;
                                            color: white;
                                            /* Cambiar el color del texto a blanco para mayor contraste */
                                        }
                                    </style>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nombre Proyecto</th>
                                            <td colspan="4">Cómo hackear Windows – la guía secreta de la CIA</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Asesor</th>
                                            <td colspan="4">Juan Perez Salas</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alumno Responsable</th>
                                            <td colspan="4">Jose Antonio Pineda Carrillo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fecha Enviada</th>
                                            <td>01/01/2024</td>
                                            <th scope="row">Fecha de Inicio</th>
                                            <td>10/01/2024</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fecha Fin</th>
                                            <td>01/01/2024</td>
                                            <th scope="row">Facultad</th>
                                            <td>Ingenieria</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Escuela Profesional</th>
                                            <td>Ingenieria de Sistemas</td>
                                            <th scope="row">Ciclo</th>
                                            <td>V</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estado</th>
                                            <td> </td>
                                            <th scope="row">Comentario</th>
                                            <td></td>
                                        </tr>
                                        <!-- Otras filas aquí -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                </div>
                                <div class="col-md-2 mb-2">
                                    <button type="submit" class="btn btn-danger btn-lg">Rechazar</button>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <button type="submit" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Observar</button>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <div class="text-right">

                                        <!--<button type="submit" class="btn btn-primary btn-lg">Aprobar</button>-->
                                        <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#aprobarproyecto" data-bs-whatever="@mdo">
                                            Aprobar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layout/footer.php"); ?>
<!--MODAL RECHAZAR PROYECTO-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">DETALLE OBSERVACION</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">TITULO: *</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">OBSERVACION :*</label>
                        <textarea class="form-control" id="message-text"></textarea>
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

<!--MODAL APROBAR PROYECTO-->
<div class="modal fade modal-xl" id="aprobarproyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h5 class="m-0">FICHA EVALUACION APROBACION DOCENTE</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-md-6 mb-1">
                                <h5 class="m-0">DIAGNÓSTICO (25%)</h5>
                            </div>
                            <div class="col-md-6 mb-1">
                                <h5 class="m-0">PERTINENCIA Y COHERENCIA (50%)</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Aplica diagnóstico sobre problemática a atender</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">El proyecto está relacionado con la carrera profesional de los integrantes</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">2024</option>
                                    <option value="">2023</option>
                                    <option value="">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Describe de forma breve las necesidades que se puede atender</label>
                                <br> <br>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Explica la relación del proyecto con uno o más objetivos desarrollo sostenible(ODS)</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Indica las características de la población beneficiada.</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Los objetivos están bien planteados o redactados.</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                        </div>
                        <div class="row ">
                            <h5 class="m-0">SOSTENIBILIDAD (25%)</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Menciona los recursos a utilizar en el proyecto.</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Describe causas y consecuencias del problema social a atender.</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Describe Matriz de priorizaciòn del proyecto a realizar</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="recipient-name" class="col-form-label">Indica de forma específica las actividades a desarrollar en el cronograma.</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Seleccionar Opcion</option>
                                    <option value="">Administrador</option>
                                    <option value="">Tesoreria</option>
                                    <option value="">Director de Carrera</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </div>
        </div>
    </div>
</div>