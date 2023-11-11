<?php
require_once "../controllers/usuarios.controlador.php";
require_once "../models/usuarios.modelo.php";
class AjaxUsuarios{

	public $idUsuario;
	public function ajaxEditarUsuario(){
		$item = "user_id";
		$valor = $this->idUsuario;
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
		echo json_encode($respuesta);
	}


	//Activar desactivar usuario

	public $activarUsuario;
	public $activarId;


	public function ajaxActivarUsuario(){

		$tabla = "usuarios";

		$item1 = "estado";
		$valor1 = $this->activarUsuario;

		$item2 = "user_id";
		$valor2 = $this->activarId;

		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

	}

	
	public $deletetId;

//Eliminar Usuario
	public function ajaxBorrarUsuario(){
		$tabla = "usuarios";

		$item1 = "display";
		$valor1 = 0;

		$item2 = "user_id";
		$valor2 = $this->deletetId;

		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
	}

}

//editar user
if(isset($_POST["idUsuario"])){

    $editar = new AjaxUsuarios();
    $editar -> idUsuario = $_POST["idUsuario"];
    $editar -> ajaxEditarUsuario();

}


//ACTIVAR USUARIO
if(isset($_POST["activarUsuario"])){

	$activarUsuario = new AjaxUsuarios();
	$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
	$activarUsuario -> activarId = $_POST["activarId"];
	$activarUsuario -> ajaxActivarUsuario();

}

//Eliminar USUARIO
if(isset($_POST["deletetId"])){
	
	$delUsuario = new AjaxUsuarios();
	$delUsuario -> deletetId = $_POST["deletetId"];
	$delUsuario -> ajaxBorrarUsuario();

}





