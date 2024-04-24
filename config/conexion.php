<?php
class Conexion
{
    public function Conexion()
    {
        try {
            include("config.php");
            // $conexion = new PDO('mysql:host='.$server.'localhost;dbname='.$bd_name, '.$user.', '');
            $conexion = new PDO('mysql:host=' . $server . ';dbname=' . $bd_name, $user, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
            echo "Linea de error" . $e->getLine();
        }
        return $conexion;
    }
}
