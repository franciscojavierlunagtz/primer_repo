<?php

class ControladorHardware{

    //mostrar productos

    static public function ctrMostrarHW($tabla, $item, $item2, $valor){
        $respuesta = ModeloHardware::mdlMostrarHardware($tabla, $item, $item2, $valor);
        return $respuesta;
    }

    static public function ctrMostrarDIMMsInfo($tabla, $item, $valor){
        $respuesta = ModeloHardware::mdlMostrarDIMMsInfo($tabla, $item, $valor);
        return $respuesta;
    }

    

    static public function ctrCrearcpu(){
        if(isset($_POST["nameInputNewMcode"])){
            $tabla = "cpus";
            if(isset($_POST["nameInputNewProduct"]) && !empty($_POST["nameInputNewProduct"])){
                $nuevoProductName = $_POST["nameInputNewProduct"];
            }else{
                $nuevoProductName = $_POST["nameSelNewProduct"];
            }

            if(isset($_POST["nameInputNewQDF"]) && !empty($_POST["nameInputNewQDF"])){
                $nuevoQDF = $_POST["nameInputNewQDF"];
            }else{
                $nuevoQDF = $_POST["nameSelNewQDF"];
            }

            if(isset($_POST["nameInputNewStep"]) && !empty($_POST["nameInputNewStep"])){
                $nuevoStep = $_POST["nameInputNewStep"];
            }else{
                $nuevoStep = $_POST["nameSelNewStep"];
            }

            if(isset($_POST["nameInputNewLoc"]) && !empty($_POST["nameInputNewLoc"])){
                $nuevoLoc = $_POST["nameInputNewLoc"];
            }else{
                $nuevoLoc = $_POST["nameSelNewLoc"];
            }

            if(isset($_POST["nameInputNewStat"]) && !empty($_POST["nameInputNewStat"])){
                $nuevoStat = $_POST["nameInputNewStat"];
            }else{
                $nuevoStat = $_POST["nameSelNewStat"];
            }

            if(isset($_POST["nameInputNewTeam"]) && !empty($_POST["nameInputNewTeam"])){
                $nuevoTeam = $_POST["nameInputNewTeam"];
            }else{
                $nuevoTeam = $_POST["nameSelNewTeam"];
            }

            if(isset($_POST["nameInputNewReserv"]) && !empty($_POST["nameInputNewReserv"])){
                $nuevoReser = $_POST["nameInputNewReserv"];
            }else{
                $nuevoReser = $_POST["nameSelNewReserv"];
            }

            $datos = array("product_name" => $nuevoProductName,
                           "qdf" => $nuevoQDF,
                           "step" => $nuevoStep,
                           "mcode" => $_POST["nameInputNewMcode"],
                           "serial" => $_POST["nameInputNewSerial"],
                           "ubication" => $nuevoLoc,
                           "status" => $nuevoStat,
                           "team" => $nuevoTeam,
                           "waic" => $_POST["nameInputNewWaic"],
                           "reserved" => $nuevoReser,
                           "wip" => $_POST["nameInputNewWIP"],
                           "comments" => $_POST["nameInputNewComment"]);

            $respuesta = ModeloHardware::mdlCrearcpu($tabla, $datos);
            if($respuesta == "ok"){
                echo '<script>window.location = "http://localhost/lastraspinv/cpus";</script>';

            }
        }
    }




    //Editar cpu
    static public function ctrEditcpu(){
        if(isset($_POST["nameInputEditMcode"])){
            $tabla="cpus";
            if(isset($_POST["nameInputEditProduct"]) && !empty($_POST["nameInputEditProduct"])){
                $editProductName = $_POST["nameInputEditProduct"];
            }else{
                $editProductName = $_POST["nameSelEditProduct"];
            }

            if(isset($_POST["nameInputEditQDF"]) && !empty($_POST["nameInputEditQDF"])){
                $editQDF = $_POST["nameInputEditQDF"];
            }else{
                $editQDF = $_POST["nameSelEditQDF"];
            }

            if(isset($_POST["nameInputEditStep"]) && !empty($_POST["nameInputEditStep"])){
                $editStep = $_POST["nameInputEditStep"];
            }else{
                $editStep = $_POST["nameSelEditStep"];
            }

            if(isset($_POST["nameInputEditLoc"]) && !empty($_POST["nameInputEditLoc"])){
                $editLoc = $_POST["nameInputEditLoc"];
            }else{
                $editLoc = $_POST["nameSelEditLoc"];
            }

            if(isset($_POST["nameInputEditStat"]) && !empty($_POST["nameInputEditStat"])){
                $editStat = $_POST["nameInputEditStat"];
            }else{
                $editStat = $_POST["nameSelEditStat"];
            }

            if(isset($_POST["nameInputEditTeam"]) && !empty($_POST["nameInputEditTeam"])){
                $editTeam = $_POST["nameInputEditTeam"];
            }else{
                $editTeam = $_POST["nameSelEditTeam"];
            }

            if(isset($_POST["nameInputEditReserv"]) && !empty($_POST["nameInputEditReserv"])){
                $editReser = $_POST["nameInputEditReserv"];
            }else{
                $editReser = $_POST["nameSelEditReserv"];
            }
            $datos = array("product_name" => $editProductName,
                           "qdf" => $editQDF,
                           "step" => $editStep,
                           "mcode" => $_POST["nameInputEditMcode"],
                           "serial" => $_POST["nameInputEditSerial"],
                           "ubication" => $editLoc,
                           "status" => $editStat,
                           "team" => $editTeam,
                           "waic" => $_POST["nameInputEditWaic"],
                           "reserved" => $editReser,
                           "wip" => $_POST["nameInputEditWIP"],
                           "comments" => $_POST["nameInputEditComment"]);
            // echo "<script>console.log('Console: " . $datos . "' );</script>";
            $respuesta = ModeloHardware::mdlEditarcpu($tabla, $datos);
            if($respuesta == "ok"){
                echo "<script>
                                  Swal.fire({
                                      icon: 'success',
                                      title: 'The CPU has been edited correctly',
                                      showConfirmButton: false,
                                      timer: 1500,
                                    }).then((result) => {
                                          if (result.dismiss === Swal.DismissReason.timer) {
                                            window.location = 'cpus';
                                          }
                                        })
                                  </script>";


            }
        }
    }


    static public function ctrCreardimm(){
        if(isset($_POST["nameInputNewGDCDimm"])){
            $tabla = "dimms";
            if(isset($_POST["nameInputNewTeamDimm"]) && !empty($_POST["nameInputNewTeamDimm"])){
                $nuevoTeamDimm = $_POST["nameInputNewTeamDimm"];
            }else{
                $nuevoTeamDimm = $_POST["nameSelNewTeamDimm"];
            }

            if(isset($_POST["nameInputNewBrandDimm"]) && !empty($_POST["nameInputNewBrandDimm"])){
                $nuevoBrandDimm = $_POST["nameInputNewBrandDimm"];
            }else{
                $nuevoBrandDimm = $_POST["nameSelNewBrandDimm"];
            }

            if(isset($_POST["nameInputNewItemDimm"]) && !empty($_POST["nameInputNewItemDimm"])){
                $nuevoItemDimm = $_POST["nameInputNewItemDimm"];
            }else{
                $nuevoItemDimm = $_POST["idSelNewItemDimm"];
            }

            if(isset($_POST["nameInputNewModelDimm"]) && !empty($_POST["nameInputNewModelDimm"])){
                $nuevoModDimm = $_POST["nameInputNewModelDimm"];
            }else{
                $nuevoModDimm = $_POST["nameSelNewModelDimm"];
            }

            if(isset($_POST["nameInputNewFeaturesDimm"]) && !empty($_POST["nameInputNewFeaturesDimm"])){
                $nuevoFeatDimm = $_POST["nameInputNewFeaturesDimm"];
            }else{
                $nuevoFeatDimm = $_POST["nameSelNewFeaturesDimm"];
            }

            if(isset($_POST["nameInputNewStatDim"]) && !empty($_POST["nameInputNewStatDim"])){
                $nuevoStatDimm = $_POST["nameInputNewStatDim"];
            }else{
                $nuevoStatDimm = $_POST["nameSelNewStatDimm"];
            }

            if(isset($_POST["nameInputNewLocDimm"]) && !empty($_POST["nameInputNewLocDimm"])){
                $nuevoLocDimm = $_POST["nameInputNewLocDimm"];
            }else{
                $nuevoLocDimm = $_POST["nameSelNewLocDimm"];
            }

            if(isset($_POST["nameInputNewReservDim"]) && !empty($_POST["nameInputNewReservDim"])){
                $nuevoReservDimm = $_POST["nameInputNewReservDim"];
            }else{
                $nuevoReservDimm = $_POST["nameSelNewReservDimm"];
            }

            $datos = array("team" => $nuevoTeamDimm,
                           "raw_card" => $_POST["nameInputNewRCDimm"],
                           "gdc" => $_POST["nameInputNewGDCDimm"],
                           "serial" => $_POST["nameInputNewSerialDimm"],
                           "brand" => $nuevoBrandDimm,
                           "item_name" => $nuevoItemDimm,
                           "model" => $nuevoModDimm,
                           "date" => $_POST["nameInputNewDateDimm"],
                           "charac" => $nuevoFeatDimm,
                           "status" => $nuevoStatDimm,
                           "location" => $nuevoLocDimm,
                           "reserved" => $nuevoReservDimm,
                           "waic" => $_POST["nameInputNewDimmWaic"],
                           "comments" => $_POST["nameInputNewDimmComment"]);

            $respuesta = ModeloHardware::mdlCreardimm($tabla, $datos);
            if($respuesta == "ok"){
                echo "<script>
                                  Swal.fire({
                                      icon: 'success',
                                      title: 'The DIMM has been created correctly',
                                      showConfirmButton: false,
                                      timer: 1500,
                                    }).then((result) => {
                                          if (result.dismiss === Swal.DismissReason.timer) {
                                            window.location = 'cpus';
                                          }
                                        })
                                  </script>";

            }
        }
    }

}