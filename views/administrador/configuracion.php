<?php include("layout/head.php"); ?>
<?php include("layout/sidebar.php"); ?>
<div class="body-wrapper">
    <?php include("layout/header_navbar.php"); ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">APERTURA DE INCRIPCION</h5>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 mb-2">
                                        <label for="exampleInputEmail1" class="form-label">INGRESE CANTIDAD DE HORA ACUMULADA *</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <label for="disabledSelect" class="form-label">SUBIR FORMATO *</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">APERTURA INSCRIPCION</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <h5 class="card-title fw-semibold mb-2">AGREGAR CANTIDAD DE PROYECTOS Y METAS</h5>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                <img src="../../assets/images/logos/boton-mas.png" width="25px" height="25px" alt="">
                                AGREGAR</button>
                        </div>
                    </div>
                    <h5 class="card-title fw-semibold mb-2">HABILITAR FUNCIONES PROYECTO</h5>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <input type="text" class="form-control" id="searchInput" placeholder="Buscar...">
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layout/footer.php"); ?>