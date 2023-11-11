<?php
require_once "../controllers/hardware.controlador.php";
require_once "../models/hardware.modelo.php";

class AjaxHardware{

	//editar cpu
    public $idcpu;

	public function ajaxEditcpu(){
        $tabla = "cpus";
		$item = "id";
        $item2 = null;
		$valor = $this->idcpu;
	    $respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);
        echo json_encode($respuesta);
    }


    /*=============================================
	VALIDAR NO REPETIR CPU
	=============================================*/
	public $validarmcode;
	public function ajaxValidarCPU(){
		$tabla = "cpus";
		$item = "mcode";
		$item2 = null;
		$valor = $this->validarmcode;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

	//Buscar en db QDFs segun CPU seleccionado
	public $validarprod;
	public function ajaxValidarProd(){
		$tabla = "cpus";
		$item = "qdf";
		$item2 = "product_name";
		$valor = $this->validarprod;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

	//Buscar Steps segun QDF seleccionado
	public $validarqdf;
	public function ajaxValidarQdf(){
		$tabla = "cpus";
		$item = "step";
		$item2 = "qdf";
		$valor = $this->validarqdf;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

	//Buscar localidades segun el CPU seleccionado
	public $validarloc;
	public function ajaxValidarLoc(){
		$tabla = "cpus";
		$item = "ubication";
		$item2 = "product_name";
		$valor = $this->validarloc;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    //Buscar en db QDFs segun CPU seleccionado en edicion de info
	public $validarEprod;
	public function ajaxValidarEProd(){
		$tabla = "cpus";
		$item = "qdf";
		$item2 = "product_name";
		$valor = $this->validarEprod;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    //Buscar Steps segun QDF seleccionado al editar Info
	public $validarEqdf;
	public function ajaxValidarEQdf(){
		$tabla = "cpus";
		$item = "step";
		$item2 = "qdf";
		$valor = $this->validarEqdf;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

    //Buscar localidades segun el CPU seleccionado en edicion Info
	public $validarEloc;
	public function ajaxValidarELoc(){
		$tabla = "cpus";
		$item = "ubication";
		$item2 = "product_name";
		$valor = $this->validarEloc;
		$respuesta = ControladorHardware::ctrMostrarHW($tabla, $item, $item2, $valor);

		echo json_encode($respuesta);
	}

}



//editar cpu
if(isset($_POST["idcpu"])){
	$editar = new AjaxHardware();
    $editar -> idcpu = $_POST["idcpu"];
    $editar -> ajaxEditcpu();
}

/*=============================================
VALIDAR NO REPETIR CPU
=============================================*/
if(isset($_POST["idInputNewMcode"])){
	$valMcode = new AjaxHardware();
	$valMcode -> validarmcode = $_POST["idInputNewMcode"];
	$valMcode -> ajaxValidarCPU();
}

//Buscar QDFs segun CPU seleccionado en edicion de Info CPU
if(isset($_POST["idSelNewProduct"])){
	$valProd = new AjaxHardware();
	$valProd -> validarprod = $_POST["idSelNewProduct"];
	$valProd -> ajaxValidarProd();
}

//Buscar Steppings segung QDF en nuevo CPU
if(isset($_POST["idSelNewQDF"])){
	$valStep = new AjaxHardware();
	$valStep -> validarqdf = $_POST["idSelNewQDF"];
	$valStep -> ajaxValidarQdf();
}

//Buscar localidades segun CPU seleccionado
if(isset($_POST["idInputProd"])){
	$valLoc = new AjaxHardware();
	$valLoc -> validarloc = $_POST["idInputProd"];
	$valLoc -> ajaxValidarLoc();
}

//Buscar CPUs en edicion de info
if(isset($_POST["idSelEditProduct"])){
	$valEProd = new AjaxHardware();
	$valEProd -> validarEprod = $_POST["idSelEditProduct"];
	$valEProd -> ajaxValidarEProd();
}

//Buscar Steps segun QDF sel al editar info de CPU
if(isset($_POST["idSelEditQDF"])){
	$valEStep = new AjaxHardware();
	$valEStep -> validarEqdf = $_POST["idSelEditQDF"];
	$valEStep -> ajaxValidarEQdf();
}

//Buscar localidades segun CPU seleccionado en edicion de info
if(isset($_POST["idInputEProd"])){
	$valELoc = new AjaxHardware();
	$valELoc -> validarEloc = $_POST["idInputEProd"];
	$valELoc -> ajaxValidarELoc();
}


