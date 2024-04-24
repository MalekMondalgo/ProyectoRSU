<?php
require_once '../../models/estudiante/cargarSelect.php';
if (isset($_GET['op'])){
  $cargarSelectsEstudiantes = new CargarSelectsEstudiantes();

  if ($_GET['op'] == 'cargarCarrera') {
    $datosObtenidos = $cargarSelectsEstudiantes->CargarCarrera();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_car'>$valor->nombre</option>
        ";
      }
  }
}
?>