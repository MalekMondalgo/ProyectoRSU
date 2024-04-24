<?php

require_once '../../config/model.master.php';

class CargarSelectsEstudiantes extends ModelMaster{

    public function CargarCarrera(){
        try{
            return parent::getRows("SPU_estudiante_cargar_carrera");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
}
?>
