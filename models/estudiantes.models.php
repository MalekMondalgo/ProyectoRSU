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
    
    public function cargarTipologia(){
        try{
            return parent::getRows("SPU_estudiante_cargar_tipologia");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
    
    public function cargarDocente(){
        try{
            return parent::getRows("SPU_estudiante_cargar_docente");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
    
    public function cargarODS(){
        try{
            return parent::getRows("SPU_estudiante_cargar_ods");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
    
    public function cargarLineas(){
        try{
            return parent::getRows("SPU_estudiante_cargar_lineas");
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
    
    public function registrarProyecto(array $data){
        try{
          parent::execProcedure($data, "SPU_estudiante_registrar_proyecto", false);
        }catch(Exception $error){
          die($error->getMessage());
        }
      }

}
?>
