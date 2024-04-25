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
                                        <label for="estudiante" class="form-label">Nombres y Apellidos : *</label>
                                        <select class="form-select " name="estudiante" id="estudiante">

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="carrera" class="form-label">Carrera : </label>
                                        <select class="form-select " name="carrera" id="carrera">

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="ciclo" class="form-label">Ciclo : </label>
                                        <select class="form-select " name="ciclo" id="ciclo">

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="nombreProyeto" class="form-label">Nombre del Proyecto:</label>
                                        <input type="text" class="form-control" id="nombreProyecto" aria-describedby="emailHelp" placeholder="Nombre del proyecto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="buscador" class="form-label">Seleccionar Equipo :</label>
                                        <select class="form-select  js-states " id="buscadorequipo" multiple="multiple" style="display: none; width: 100%">

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="tipologia" class="form-label">Seleccionar Tipo de Proyecto :</label>
                                        <select class="form-select " name="tipologia" id="tipologia">

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="buscadordocente" class="form-label">Seleccionar Asesor : </label>
                                        <select class="form-select js-example-basic-multiple" id="buscadordocente" multiple="multiple" style="display: none; width: 100%">
                                       
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="ods" class="form-label">Seleccionar ODS :</label>
                                        <select id="ods" name="ods" class="form-select ">
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="lineas" class="form-label">Seleccionar Lineas de Accion :</label>
                                        <select id="lineas" name="lineas" class="form-select">
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="numeroBeneficiados" class="form-label">Numero de Beneficiados :*</label>
                                        <input type="text" class="form-control" id="numeroBeneficiados" name="numeroBeneficiados">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="sectorBeneficiario" class="form-label">Sector Beneficiado :</label>
                                        <input type="text" class="form-control" id="sectorBeneficiario" name="sectorBeneficiario">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="fechaIncial" class="form-label">Fecha Inicio:</label>
                                        <input type="date" class="form-control" id="fechaIncial" name="fechaIncial">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="fechaFin" class="form-label">Fecha Fin:</label>
                                        <input type="date" class="form-control" id="fechaFin" name="fechaFin">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="archivoEstudianteProyecto" class="form-label">Subir Archivo :</label>
                                        <input type="file" class="form-control" id="archivoEstudianteProyecto" name="archivoEstudianteProyecto">
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

<script src="../../../js/estudiantes.js"></script>

<script>
    $(document).ready(function() {
        $('#buscadorequipo').select2();
    });
    $(document).ready(function() {
        $('#buscadordocente').select2();
    });
</script>

<?php include("../layout/footer.php"); ?>