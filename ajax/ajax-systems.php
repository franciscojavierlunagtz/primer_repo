<?php
require_once "../controllers/sistemas.controlador.php";
require_once "../models/sistemas.modelo.php";
class AjaxSistemas{

    //Buscar info del sistema dependiendo del summary seleccionado
	public $sysSummary;
	public function ajaxfindElemtbySummary(){
		$tabla = "sistemas";
		$item = "platform";
		$item2 = "summary";
		$valor = $this->sysSummary;
		$respuesta = ControladorSistemas::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}


    public $sysSummary2;
	public function ajaxfindElemtbySummary2(){
		$tabla = "sistemas";
		$item = "boardname";
		$item2 = "summary";
		$valor = $this->sysSummary2;
		$respuesta = ControladorSistemas::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    public $sysSummary3;
	public function ajaxfindElemtbySummary3(){
		$tabla = "sistemas";
		$item = "processor";
		$item2 = "summary";
		$valor = $this->sysSummary3;
		$respuesta = ControladorSistemas::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    public $sysSummary4;
	public function ajaxfindElemtbySummary4(){
		$tabla = "sistemas";
		$item = "location";
		$item2 = "summary";
		$valor = $this->sysSummary4;
		$respuesta = ControladorSistemas::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    public $idEditSys;
	public function ajaxEditSys(){
		$item = "sys_id";
		$valor = $this->idEditSys;
		$respuesta = ControladorSistemas::ctrMostrarSistema($item, $valor);
		echo json_encode($respuesta);
	}

    //Eliminar Sistema
    public $idSysDel;
    public function ajaxEliminarSistema(){
        $tabla = "sistemas";
		$item1 = "display";
		$valor1 = 0;
		$item2 = "sys_id";
		$valor2 = $this->idSysDel;

		$respuesta = ModeloSistemas::mdlEliminarSistema($tabla, $item1, $valor1, $item2, $valor2);
	}

}



if(isset($_POST["idSelSysSummary"])){
	$valEStep = new AjaxSistemas();
	$valEStep -> sysSummary = $_POST["idSelSysSummary"];
	$valEStep -> ajaxfindElemtbySummary();
}

if(isset($_POST["idSelSysSummary2"])){
	$valEStep2 = new AjaxSistemas();
	$valEStep2 -> sysSummary2 = $_POST["idSelSysSummary2"];
	$valEStep2 -> ajaxfindElemtbySummary2();
}

if(isset($_POST["idSelSysSummary3"])){
	$valEStep3 = new AjaxSistemas();
	$valEStep3 -> sysSummary3 = $_POST["idSelSysSummary3"];
	$valEStep3 -> ajaxfindElemtbySummary3();
}

if(isset($_POST["idSelSysSummary4"])){
	$valEStep4 = new AjaxSistemas();
	$valEStep4 -> sysSummary4 = $_POST["idSelSysSummary4"];
	$valEStep4 -> ajaxfindElemtbySummary4();
}

//editar sistema
if(isset($_POST["idEditSys"])){
    $editarSys = new AjaxSistemas();
    $editarSys -> idEditSys = $_POST["idEditSys"];
    $editarSys -> ajaxEditSys();
}

//Eliminar sistema
if(isset($_POST["idSysDel"])){
	$delSystem = new AjaxSistemas();
	$delSystem -> idSysDel = $_POST["idSysDel"];
	$delSystem -> ajaxEliminarSistema();
}
