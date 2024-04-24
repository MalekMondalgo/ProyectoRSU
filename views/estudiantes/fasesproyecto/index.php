<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>

<div class="body-wrapper">
    <?php include("../layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center mb-3">
                    <div class="mx-auto">
                        <img src="../../../assets/images/logos/paso1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">REGISTRAR PROYECTO</h5>
                    <p>Descargar formato haciendo click al icono. <a href="https://www.youtube.com" target="__blank"><img src="../../../assets/images/logos/logoformatoregistroproyecto.png" class="cursor-pointer" width="40px" height="40px" alt=""></a>
                    </p>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombres y Apellidos : *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Juan Perez Salas">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="carrera" class="form-label">Carrera : </label>
                                        <select class="form-control form-control-border" name="carrera" id="carrera">

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="ciclo" class="form-label">Ciclo : *</label>
                                        <select id="ciclo" class="form-select">
                                            <option>Seleccionar Ciclo</option>
                                            <option value="" selected>V</option>
                                            <option value="">VI</option>
                                            <option value="">VII</option>
                                            <option value="">VIII</option>
                                            <option value="">IX</option>
                                            <option value="">X</option>
                                            <option value="">Egresado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del Proyecto: *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del proyecto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="buscador" class="form-label">Seleccionar Equipo : *</label>
                                        <select class="js-states form-control" id="buscadorequipo" multiple="multiple" style="display: none; width: 100%">
                                            <optgroup label="Nombres y Apellidos">
                                                <option value="1">Malek Mondalgo Nuñez</option>
                                                <option value="2">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                                <option value="2">Malek Mondalgo Nuñez</option>
                                                <option value="2">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                                <option value="1">Malek Mondalgo Nuñez</option>
                                                <option value="1">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Seleccionar Tipo de Proyecto :*</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Tipo de Proyecto</option>
                                            <option value="">V</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="buscador" class="form-label">Seleccionar Asesor : *</label>
                                        <select class="form-control js-example-basic-multiple" id="buscadordocente" multiple="multiple" style="display: none; width: 100%">
                                            <optgroup label="Nombres y Apellidos">
                                                <option value="1">Malek Mondalgo Nuñez</option>
                                                <option value="2">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                                <option value="2">Malek Mondalgo Nuñez</option>
                                                <option value="2">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                                <option value="1">Malek Mondalgo Nuñez</option>
                                                <option value="1">Jeriot Magallanes</option>
                                                <option value="1">Angel Chacaliaza</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Seleccionar ODS :*</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar ODS</option>
                                            <option value="">V</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Seleccionar Lineas de Accion :*</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Lineas de Accion </option>
                                            <option value="">V</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Numero de Beneficiados :*</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Sector Beneficiado :*</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Sector Beneficiado :*</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Sector Beneficiado :*</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Subir Archivo :*</label>
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
                                            <!--
                                            <button type="submit" class="btn btn-primary btn-lg" >Siguiente</button>
                    -->
                                            <a href="conformidad.php" class="btn btn-primary btn-lg">Siguiente</a>
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

<script src="../estudiantes.js"></script>

<script>
    $(document).ready(function() {
        $('#buscadorequipo').select2();
    });
    $(document).ready(function() {
        $('#buscadordocente').select2();
    });
</script>

<?php include("../layout/footer.php"); ?>