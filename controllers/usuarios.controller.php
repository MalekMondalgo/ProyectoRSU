<?php
session_start();
require_once '../models/usuarios.models.php';

if (isset($_GET['op'])){

  $usuario = new Usuarios();

  if ($_GET['op'] == 'login'){

    //Array asociativo
    $datos = ["correo" => $_GET['correo']];
    $resultado = $usuario->login($datos);
    
    if ($resultado){
      //Acceso al sistema
      //var_dump($resultado);

      $registro = $resultado[0];
      //var_dump($registro);

      //Sabemos que el usuario existe, entonces verificamos que su clave es CORRECTA
      $claveValidar = $_GET['password'];

      //Validando la contraseña
      if ($claveValidar=$registro['password']){

        $_SESSION['acceso'] = true;

        //La clave es correcta...
        $_SESSION['idusuario'] = $registro['estudiante'];
        $_SESSION['dni'] = $registro['dni_estu'];
        $_SESSION['nombres'] = $registro['nombre'];
        $_SESSION['apellidos'] = $registro['apellido'];
        $_SESSION['password'] = $registro['password'];
        $_SESSION['nivelacceso'] = $registro['nivelacceso'];
        echo json_encode(array("mensaje" => "", "nivelacceso" => $registro['nivelacceso']));

      }else{

        $_SESSION['acceso'] = false;
        $_SESSION['idusuario'] = '';
        $_SESSION['dni'] = '';
        $_SESSION['nombres'] = '';
        $_SESSION['apellidos'] = '';
        $_SESSION['password'] = '';
        $_SESSION['nivelacceso'] = '';

        echo "La clave es incorrecta";

      }

    }else{
      
      //No se puede acceder, usuario NO existe
      $_SESSION['acceso'] = false;
      $_SESSION['idusuario'] = '';
      $_SESSION['dni'] = '';
      $_SESSION['nombres'] = '';
      $_SESSION['apellidos'] = '';
      $_SESSION['password'] = '';
      $_SESSION['nivelacceso'] = '';


      echo "El usuario no existe";
    }
  }

  if ($_GET['op'] == 'cerrar-sesion'){
    session_destroy();
    session_unset();
    header('Location:../');
  }

}
?>