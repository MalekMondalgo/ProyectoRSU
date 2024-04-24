<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>

<div class="body-wrapper">
    <?php include("../layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">FIRMAR DECLARACION JURADA</h5>
                    <p>Descargar la plantila de la Declaracion Jurada de para el uso de imagen:</p>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del Proyecto: *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del proyecto" value="Cómo hackear Windows – la guía secreta de la CIA">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombres: *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del proyecto" value="Juan">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Apellidos: *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del proyecto" value="Perez Salas">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Carrera: *</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Carrera</option>
                                            <option value="" selected>Administracion</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Ciclo: *</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Ciclo</option>
                                            <option value="" selected>V</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Adjuntar DJ: *</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button>
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