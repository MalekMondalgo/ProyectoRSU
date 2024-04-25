<?php

require_once '../config/model.master.php';

class Estudiantes extends ModelMaster{

    public function cargarCarrera(){
        try{
            return parent::getRows("SPU_estudiante_cargar_carrera");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }

    public function cargarEstudiantes(){
        try{
            return parent::getRows("SPU_estudiante_cargar_estudiantes");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }

    public function cargarCiclo(){
        try{
            return parent::getRows("SPU_estudiante_cargar_ciclo");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }

}
?>
