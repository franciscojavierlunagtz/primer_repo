<?php

class ControladorHardwareToChange{

static public function ctrMostrarHWToChange($tabla, $item, $valor){
        $respuesta = ModeloHardwareToChange::mdlMostrarHardwareToChange($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrMostrarNumHWToChange($tabla, $item, $valor){
        $respuesta = ModeloHardwareToChange::mdlMostrarNumHardwareToChange($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrUpdateNewDimms($sysHWchangeDIMMs){

        if (isset($_POST["updateMasDIMMs"])) {

            $tabla = "dimms";
            $system= $sysHWchangeDIMMs;
            $datos = array("gdcs" => $_POST["updateMasDIMMs"]);

        $respuesta = ModeloHardwareToChange::mdlUpdateNewDIMMs($tabla, $datos, $system);
        if ($respuesta == "ok") {
            echo '<script>window.history.back();</script>'; 
        } else {
            echo "No se han insertado los datos";
        }
    }    
}   

}