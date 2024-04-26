<?php
  $pagina_actual = 'estadoproyecto';

?>
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
                        <img src="../../../assets/images/logos/paso2_fase.png" alt="">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text-center h5p">
                        <h5 class="card-title fw-semibold mb-2">PROCESO PROYECTO</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered custom-table">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="scope-row w-50">NOMBRE PROYECTO</th>
                                        <td class="text-justify">“FORTALECIMIENTO DEL CONTROL ETOLÓGICO A TRAVÉS DEL USO DE TRAMPAS CROMÁTICAS DIRIGIDO A LOS AGRICULTORES DEL DISTRITO DE QUILMANÁ”</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="scope-row w-50">ESTADO</th>
                                        <td class="text-center">En progreso</td>
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

<?php include("../layout/footer.php"); ?>