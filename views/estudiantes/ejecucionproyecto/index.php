<?php
  $pagina_actual = 'index2';
?>
<?php include("../layout/head.php"); ?>
<?php include("../layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("../layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center mb-3">
                    <div class="mx-auto">
                        <img src="../../../assets/images/logos/PasoEjecucion.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">REGISTRAR TU PRIMER AVANCE</h5>
                    <p>Descargar formato haciendo click al icono. <a href="https://www.youtube.com" target="__blank"><img src="../../../assets/images/logos/logoformatoregistroproyecto.png" class="cursor-pointer" width="40px" height="40px" alt=""></a>
                    </p>
                    <div class="alert alert-warning" role="alert">
                        <b>NOTA:</b> <br>
                        Una vez que se ha registrado la cantidad de horas y el formato, no se puede modificar.
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">INGRESE CANTIDAD DE HORA ACUMULADA *</label>
                                        <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="disabledSelect" class="form-label">SUBIR FORMATO *</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 mb-2">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <!--   <button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button>-->
                                        <a href="segundoentregable.php" class="btn btn-primary btn-lg">REGISTRAR</a>

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