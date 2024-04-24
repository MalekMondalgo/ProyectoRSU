<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>

<!--  Main wrapper -->
<div class="body-wrapper">
<?php include("../layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center mb-3">
                    <div class="mx-auto">
                        <img src="../../../assets/images/logos/paso2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">CONFORMIDAD</h5>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">NOMBRE PROYECTO : *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="Hacker la Nasa">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">TIPO PROYECTO : *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="Proyeccion Social">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">ASESOR: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="Ricardo Inquilla Quispe">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">ODS: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="Educacion de calidad">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">LINEAS DE ACCION: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="Innovación de procesos y nuevas tecnologías">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">SEMESTRE ACADEMICO: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="2024-0">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">NÚMERO DE BENEFICIADOS: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="20">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">SECTOR BENEFICIADO: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="SAN VICENTE">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">FECHA INICIO: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="01/01/2024">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">FECHA FIN: *</label>
                                        <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="03/04/2024">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label">INTEGRANTES: *</label>
                                <textarea class="form-control" disabled value="" id="floatingTextarea">Juan, Pepe, etc</textarea>


                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mb-2">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <div class="text-right">
                                            <a href="index.php" class="btn btn-primary btn-lg">Atras</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <div class="text-right">
                                        <!--    <input type="submit" name="registrarproyecto" class="btn btn-primary btn-lg" onclick="registroproyecto(event)" value="Registrar">-->
                                            <a href="estadoproyecto.php" class="btn btn-primary btn-lg" onclick="registroproyecto(event)">Registrar</a>
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