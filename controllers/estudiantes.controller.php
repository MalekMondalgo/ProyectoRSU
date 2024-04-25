<?php
require_once '../models/estudiantes.models.php';
if (isset($_GET['op'])){
  $estudiantes = new Estudiantes();

  if ($_GET['op'] == 'cargarCarrera') {
    $datosObtenidos = $estudiantes->cargarCarrera();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_car'>$valor->nombre</option>
        ";
      }
  }

  if ($_GET['op'] == 'cargarEstudiantes') {
    $datosObtenidos = $estudiantes->cargarEstudiantes();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_estu'>{$valor->nombre} {$valor->apellido}</option>
        ";
      }
  }
  
  if ($_GET['op'] == 'cargarCiclo') {
    $datosObtenidos = $estudiantes->cargarCiclo();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_ciclo'>$valor->nombre_ciclo</option>
        ";
      }
  }
  
  if ($_GET['op'] == 'cargarTipologia') {
    $datosObtenidos = $estudiantes->cargarTipologia();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_tipo'>$valor->nombre</option>
        ";
      }
  }
  
  if ($_GET['op'] == 'cargarDocente') {
    $datosObtenidos = $estudiantes->cargarDocente();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_doce'>{$valor->nombre} {$valor->apellido}</option>
        ";
      }
  }

  if ($_GET['op'] == 'cargarODS') {
    $datosObtenidos = $estudiantes->cargarODS();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_ods'>$valor->nombre</option>
        ";
      }
  }

  if ($_GET['op'] == 'cargarLineas') {
    $datosObtenidos = $estudiantes->cargarLineas();
    echo "<option value=''>Seleccione</option>";
    foreach($datosObtenidos as $valor){
        echo"
        <option value='$valor->id_linea'>$valor->nombre</option>
        ";
      }
  }


}
?>