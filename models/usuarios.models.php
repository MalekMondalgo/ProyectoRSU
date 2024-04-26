<?php

require_once '../config/model.master.php';

class Usuarios extends ModelMaster{

    public function login(array $data){
        try{
        return parent::execProcedureLogin($data, "SPU_usuario_login", true);
        } catch (Exception $error){
        die($error->getMessage());
        }
    }

}
?>
