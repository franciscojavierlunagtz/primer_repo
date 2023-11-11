<?php
require_once "../controllers/usuarios.controlador.php";
require_once "../models/usuarios.modelo.php";

class ValidateUserController{

    public $user;

    public function dataRepeatUser(){
        $item = "usuario";
        $valor = $this->user;
       
        $ajaxUser = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
        if($ajaxUser){
        echo json_encode($ajaxUser);
        }
    }


    public $data;

    public function dataRepeatEmail(){
        $item = "email";
        $valor = $this->data;
        $response = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
        if($response){
            echo json_encode($response);
        }
        }
        
}

if(isset($_POST["dataUser"])){
    $validateUser = new ValidateUserController();
    $validateUser -> user = $_POST["dataUser"];
    $validateUser ->dataRepeatUser();

}


if(isset($_POST["dataEmail"])){
    $validateEmail = new ValidateUserController();
    $validateEmail -> data = $_POST["dataEmail"];
    $validateEmail ->dataRepeatEmail();

}


