<?php
  $pagina_actual = 'index3';
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
                        <img src="../../../assets/images/logos/SolicitarConstancia.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">SOLICITAR CONSTANCIA</h5>
                    <p>Guía video para solicitar constancia haciendo click en el siguiente icono. </p>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nombres y Apellidos : *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Carrera : *</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="disabledSelect" class="form-label">Ciclo : *</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Ciclo</option>
                                            <option value="">V</option>
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
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Monto : *</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Banco : *</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Seleccionar Banco</option>
                                            <option value="">Banco de la Nacion</option>
                                            <option value="">Interbank</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Fecha de pago :*</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Subir Vocuher:*</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="exampleInputPassword1" class="form-label text-center">Ver Voucher</label><br>
                                        <div class="cursor-pointer" onclick="openModal()">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#vervoucher" data-bs-whatever="@mdo" style="border: none; background:transparent">
                                                <img src="../../../assets/images/logos/Vervoucher.png" alt="">
                                            </button>
                                        </div>
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
                                            <button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button>
-->
                                            <a href="estadosolicitud.php" class="btn btn-primary btn-lg">REGISTRAR</a>
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
<div class="modal fade" id="vervoucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Voucher Subido</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="align-content-center">
                    <img src="../../../assets/images/logos/voucherpago2.jpg" height="600px" width="470px" alt="">
                </div>
            </div>

        </div>
    </div>
</div>