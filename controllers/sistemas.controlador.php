<?php
class ControladorSistemas{

//mostrar sistemas

static public function ctrMostrarSistema($item, $valor){

    $tabla = "sistemas";

    $respuesta = ModeloSistemas::mdlMostrarSistema($tabla, $item, $valor);

    return $respuesta;

}


static public function ctrMostrarHW($tabla, $item, $item2, $valor){
  $respuesta = ModeloSistemas::mdlMostrarHardware($tabla, $item, $item2, $valor);

  return $respuesta;

}


static public function ctrCrearSistema(){

    if(isset($_POST["nameNewSysID"])){

      if(isset($_POST["inpNameNewSysSummary"]) && !empty($_POST["inpNameNewSysSummary"])){
          $selNameNewSysSummary = $_POST["inpNameNewSysSummary"];
        }else{
          $selNameNewSysSummary = $_POST["selNameNewSysSummary"];
      }
      if(isset($_POST["inpNameNewSysState"]) && !empty($_POST["inpNameNewSysState"])){
          $selNameNewSysState = $_POST["inpNameNewSysState"];
        }else{
          $selNameNewSysState = $_POST["selNameNewSysState"];
      }
      if(isset($_POST["inpNameNewSysLoc"]) && !empty($_POST["inpNameNewSysLoc"])){
          $selNameNewSysLoc = $_POST["inpNameNewSysLoc"];
        }else{
          $selNameNewSysLoc = $_POST["selNameNewSysLoc"];
      }
      if(isset($_POST["inpNameNewSysPlat"]) && !empty($_POST["inpNameNewSysPlat"])){
          $selNameNewSysPlat = $_POST["inpNameNewSysPlat"];
        }else{
          $selNameNewSysPlat = $_POST["selNameNewSysPlat"];
      }
      if(isset($_POST["inpNameNewSysBN"]) && !empty($_POST["inpNameNewSysBN"])){
          $selNameNewSysBN = $_POST["inpNameNewSysBN"];
        }else{
          $selNameNewSysBN = $_POST["selNameNewSysBN"];
      }
      if(isset($_POST["inpNameNewSysCPU"]) && !empty($_POST["inpNameNewSysCPU"])){
        $selNameNewSysCPU = $_POST["inpNameNewSysCPU"];
        }else{
          $selNameNewSysCPU = $_POST["selNameNewSysCPU"];
      }
      if(isset($_POST["inpNameNewSysTeam"]) && !empty($_POST["inpNameNewSysTeam"])){
        $selNameNewSysTeam = $_POST["inpNameNewSysTeam"];
        }else{
          $selNameNewSysTeam = $_POST["selNameNewSysTeam"];
      }

      $nameNewSysEpic = $_POST["nameNewSysEpic"];
      $nameNewSysID = $_POST["nameNewSysID"];
     
      if(preg_match("/^[a-zA-Z0-9]+$/",$nameNewSysEpic) &&
         preg_match("/^[A-Za-z0-9\-\ ]+$/",$selNameNewSysSummary) &&
         preg_match("/^([0-9]+)$/",$nameNewSysID) &&
         preg_match("/^[A-Za-z0-9\ ]+$/",$selNameNewSysState) &&
         preg_match("/^([a-zA-Z0-9\ ]+)$/",$selNameNewSysLoc) &&
         preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameNewSysPlat) &&
         preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameNewSysBN) &&
         preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameNewSysCPU)
       ){  
            $tabla = "sistemas";
            $datos = array("epicname" => $nameNewSysEpic,
            "summary" => $selNameNewSysSummary,
            "systemID" => $nameNewSysID,
            "state" => $selNameNewSysState,
            "location" => $selNameNewSysLoc,
            "platform" => $selNameNewSysPlat,
            "boardname" => $selNameNewSysBN,
            "processor" => $selNameNewSysCPU,
            "team" => htmlspecialchars($selNameNewSysTeam)
            );
       $respuesta = ModeloSistemas::mdlCrearSistema($tabla, $datos);

        if($respuesta == "done"){

         echo '<script>window.location = "http://localhost/lastraspinv/systems";</script>';

       }
    }

    echo '<script>window.location = "http://localhost/lastraspinv/systems";</script>';

}
}


static public function ctrEditarSistema(){
  if(isset($_POST["nameEditSysID"])){

    if(isset($_POST["inpNameEditSysSummary"]) && !empty($_POST["inpNameEditSysSummary"])){
        $selNameEditSysSummary = $_POST["inpNameEditSysSummary"];
      }else{
        $selNameEditSysSummary = $_POST["selNameEditSysSummary"];
    }
    if(isset($_POST["inpNameEditSysState"]) && !empty($_POST["inpNameEditSysState"])){
        $selNameEditSysState = $_POST["inpNameEditSysState"];
      }else{
        $selNameEditSysState = $_POST["selNameEditSysState"];
    }
    if(isset($_POST["inpNameEditSysLoc"]) && !empty($_POST["inpNameEditSysLoc"])){
        $selNameEditSysLoc = $_POST["inpNameEditSysLoc"];
      }else{
        $selNameEditSysLoc = $_POST["selNameEditSysLoc"];
    }
    if(isset($_POST["inpNameEditSysPlat"]) && !empty($_POST["inpNameEditSysPlat"])){
        $selNameEditSysPlat = $_POST["inpNameEditSysPlat"];
      }else{
        $selNameEditSysPlat = $_POST["selNameEditSysPlat"];
    }
    if(isset($_POST["inpNameEditSysBN"]) && !empty($_POST["inpNameEditSysBN"])){
        $selNameEditSysBN = $_POST["inpNameEditSysBN"];
      }else{
        $selNameEditSysBN = $_POST["selNameEditSysBN"];
    }
    if(isset($_POST["inpNameEditSysCPU"]) && !empty($_POST["inpNameEditSysCPU"])){
      $selNameEditSysCPU = $_POST["inpNameEditSysCPU"];
      }else{
        $selNameEditSysCPU = $_POST["selNameEditSysCPU"];
    }
    if(isset($_POST["inpNameEditSysTeam"]) && !empty($_POST["inpNameEditSysTeam"])){
      $selNameEditSysTeam = $_POST["inpNameEditSysTeam"];
      }else{
        $selNameEditSysTeam = $_POST["selNameEditSysTeam"];
    }

    $nameEditSysEpic = $_POST["nameEditSysEpic"];
    $nameEditSysID = $_POST["nameEditSysID"];
   
    if(preg_match("/^[a-zA-Z0-9]+$/",$nameEditSysEpic) &&
       preg_match("/^[A-Za-z0-9\-\ ]+$/",$selNameEditSysSummary) &&
       preg_match("/^([0-9]+)$/",$nameEditSysID) &&
       preg_match("/^[A-Za-z0-9\ ]+$/",$selNameEditSysState) &&
       preg_match("/^([a-zA-Z0-9\ ]+)$/",$selNameEditSysLoc) &&
       preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameEditSysPlat) &&
       preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameEditSysBN) &&
       preg_match("/^([a-zA-Z0-9\-\ ]+)$/",$selNameEditSysCPU)
     ){  
          $tabla = "sistemas";
          $datos = array("epicname" => $nameEditSysEpic,
          "summary" => $selNameEditSysSummary,
          "systemID" => $nameEditSysID,
          "state" => $selNameEditSysState,
          "location" => $selNameEditSysLoc,
          "platform" => $selNameEditSysPlat,
          "boardname" => $selNameEditSysBN,
          "processor" => $selNameEditSysCPU,
          "team" => htmlspecialchars($selNameEditSysTeam)
          );
     $respuesta = ModeloSistemas::mdlEditarSistema($tabla, $datos);

      if($respuesta == "done"){

       echo '<script>window.location = "http://localhost/lastraspinv/systems";</script>';

     }
  }

  echo '<script>window.location = "http://localhost/lastraspinv/systems";</script>';

}
}

}