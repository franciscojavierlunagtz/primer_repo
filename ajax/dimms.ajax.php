<?php

require_once "../controllers/hardware.controlador.php";
require_once "../models/hardware.modelo.php";

class AjaxDIMMs{

    /*=============================================
	VALIDAR NO REPETIR DIMM
	=============================================*/
	public $validargdcdimm;
	public function ajaxValidarGdcDIMM(){
		$tabla = "dimms";
		$item = "gdc";
		$item2 = null;
		$valor = $this->validargdcdimm;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);
		echo json_encode($respuesta);
    }

	public $validargdcdimmInfo;
	public function ajaxValidarDIMMInfo(){
		$tabla = "dimms";
		$item = "gdc";
		$valor = $this->validargdcdimmInfo;
		$response = ControladorHardware::ctrMostrarDIMMsInfo($tabla, $item, $valor);
		echo json_encode($response);
    }

	public $validardimmInfobyID;
	public function ajaxValidarDIMMInfoByID(){
		$tabla = "dimms";
		$item = "id_dimm";
		$valor = $this->validardimmInfobyID;
		$response = ControladorHardware::ctrMostrarDIMMsInfo($tabla, $item, $valor);
		echo json_encode($response);
    }
	

}


/*=============================================
VALIDAR NO REPETIR DIMM
=============================================*/

if(isset($_POST["idInputNewGDCDimm"])){
	$valGDCDIMM = new AjaxDIMMs();
	$valGDCDIMM -> validargdcdimm = $_POST["idInputNewGDCDimm"];
	$valGDCDIMM -> ajaxValidarGdcDIMM();
}


if(isset($_POST["validargdcdimmInfo"])){
	$valGDCDIMMInfo = new AjaxDIMMs();
	$valGDCDIMMInfo -> validargdcdimmInfo = $_POST["validargdcdimmInfo"];
	$valGDCDIMMInfo -> ajaxValidarDIMMInfo();
}

if(isset($_POST["validardimmInfobyID"])){
	$valDIMMInfoByID = new AjaxDIMMs();
	$valDIMMInfoByID -> validardimmInfobyID = $_POST["validardimmInfobyID"];
	$valDIMMInfoByID -> ajaxValidarDIMMInfoByID();
}




