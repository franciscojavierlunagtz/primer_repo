<?php
class ControladorTickets{
    static public function ctrMostrarTickets($item, $valor){
        $tabla = "tickets";
        $response = ModeloTickets::mdlMostrarTickets($tabla, $item, $valor);
        return $response;
    }

    static public function ctrCrearTicket(){
        if(isset($_POST["ticketName"])){
            $tabla="tickets";

            $datos = array("ticketName" => $_POST["ticketName"],
            "user_id" => $_POST["tec_id"],
            "sys_id" => $_POST["systemID"],
            "items" => $_POST["listaItemstoRemDB"]); 

            $respuesta = ModeloTickets::mdlCrearTickets($tabla,$datos); 

            if($respuesta == "ok"){

                echo '<script>window.location = "http://localhost/lastraspinv/syshwchange";</script>'; 

            }

        }

    }
    




}








