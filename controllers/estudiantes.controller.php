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

if(isset($_POST['op'])){
  $estudiantes = new Estudiantes();
  if($_POST['op'] == 'registrar'){
    $idsEstudiantes = json_decode($_POST['equipoJSON']);
    foreach ($idsEstudiantes as $id) {
      echo "imprimiendo datos";
      echo $id;
    }
  }

  if($_POST['op'] == 'registrarProyecto'){
    $nombre = "";
    if ($_FILES['archivoEstudianteProyecto']['tmp_name'] != ''){
      $nombre = date('YmdhGs') . ".pdf";
      if (move_uploaded_file($_FILES['archivoEstudianteProyecto']['tmp_name'], "../assets/ProyectosEstudiantesPDF/" . $nombre)){
        $estudiantes->registrarProyecto([
          'nombreProyecto' => $_POST['nombreProyecto'],
          'tipologia' => $_POST['tipologia'],
          'ods' => $_POST['ods'],
          'lineas' => $_POST['lineas'],
          'numeroBeneficiados' => $_POST['numeroBeneficiados'],
          'sectorBeneficiario' => $_POST['sectorBeneficiario'],
          'fechaInicial' => $_POST['fechaInicial'],
          'fechaFin' => $_POST['fechaFin'],
          'docente' => $_POST['docente'],
          'archivoEstudianteProyecto' => $nombre,
        ]);
        $idsEstudiantes = json_decode($_POST['equipoJSON']);
        foreach ($idsEstudiantes as $id) {
          echo "imprimiendo datos";
          echo $id;
        }
      }
    }
  }
}
?>