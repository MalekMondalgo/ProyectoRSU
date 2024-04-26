<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SERUS</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logorsuundc.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <style>
    body {
      background-color: #0F4143;
    }
  </style>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xxl-6 mb-4 mb-md-0 mt-5">
            <div class="card justify-content-center">
              <div class="card-body mt-0">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/logoundc.png" width="100" height="100" alt="">
                </a>
                <p class="text-center">Sistema de Responsabilidad <br> Social Universitaria <br>
                  SERUS -UNDC</p>
                <form>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo Estudiantil</label>
                    <input type="email" class="form-control" id="correo" pattern="[a-zA-Z0-9._%+-]+@undc\.edu\.pe$" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary btn-lg" id="ingresoLogin">INGRESAR</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xxl-6 mb-4 mb-md-0 d-none d-md-block">
            <img src="../assets/images/logos/fondoundc.jpg" width="780px" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-6 col-lg-6 col-xxl-3">
            <div class="card mb-0 d-flex align-items-center justify-content-center">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/logoundc.png" width="180" alt="">
                </a>
                <p class="text-center">Sistema de Responsabilidad <br> Social Universitaria <br>
                  SERUS -UNDC</p>
                <form>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo Estudiantil</label>
                    <input type="text" class="form-control" id="correo" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg" id="ingresoLogin">Ingresar</button>
                  <div class="d-flex align-items-center justify-content-center">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xxl-3">
            <img src="../assets/images/logos/fondoundc.jpg" width="800" height="730" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
-->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../assets/js/usuarios.js"></script>

</body>

</html>