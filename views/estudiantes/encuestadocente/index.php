<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("../layout/header_navbar.php"); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">REGISTRAR PROYECTO</h5>
                    <p>Descargar formato haciendo click al icono.</p>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Asesor</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="Ricardo Inquilla Quispe">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Carrera</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value="Administracion">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Tipo de Proyecto</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Proyecto</option>
                                            <option value="" selected>Extension Universitaria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del Proyecto: *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del proyecto" value="Cómo hackear Windows – la guía secreta de la CIA">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="disabledSelect" class="form-label">¿El Asesor(a) les orientó en las diferentes etapas del proyecto?</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Opcion</option>
                                            <option value="">Satisfecho</option>
                                            <option value="">Regular</option>
                                            <option value="">Insatisfecho</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="disabledSelect" class="form-label">¿El Asesor(a) monitoreó el cumplimiento del cronograma y del resultado del proyecto?</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Opcion</option>
                                            <option value="">Satisfecho</option>
                                            <option value="">Regular</option>
                                            <option value="">Insatisfecho</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="disabledSelect" class="form-label">¿El Asesor(a) les acompañó o apoyo en actividades de campo o gestión? </label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Opcion</option>
                                            <option value="">Satisfecho</option>
                                            <option value="">Regular</option>
                                            <option value="">Insatisfecho</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="disabledSelect" class="form-label">El asesor(a) estuvo comprometido con el proyecto y su equipo? </label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Opcion</option>
                                            <option value="">Satisfecho</option>
                                            <option value="">Regular</option>
                                            <option value="">Insatisfecho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="disabledSelect" class="form-label">¿Recomendaría a sus compañeros de estudio, al Asesor(a) de su proyecto, para que asesore nuevos proyectos de responsabilidad social?</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Opcion</option>
                                            <option value="">Satisfecho</option>
                                            <option value="">Regular</option>
                                            <option value="">Insatisfecho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-2">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">REGISTRAR ENCUESTA</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../layout/footer.php"); ?>