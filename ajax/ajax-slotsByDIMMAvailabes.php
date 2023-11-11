<?php
require_once "../controllers/hardwareToChange.controlador.php";
require_once "../models/hardwareToChange.modelo.php";
class AjaxSistemasHWChangeByDIMMs{

    //Eliminar Sistema
    public $sysSlotAvailablesByDIMMs;
    public function sysSlotAvailablesByDIMM(){
        $tabla="dimms";$item="location";
        $valor= $this->sysSlotAvailablesByDIMMs;
        $response=ControladorHardwareToChange::ctrMostrarNumHWToChange($tabla, $item, $valor);
        echo $response+1;
}

}



if(isset($_POST["idsystembyDIMMs"])){
	$valAvByDIMMsHWC = new AjaxSistemasHWChangeByDIMMs();
	$valAvByDIMMsHWC -> sysSlotAvailablesByDIMMs = $_POST["idsystembyDIMMs"];
	$valAvByDIMMsHWC -> sysSlotAvailablesByDIMM();
}


