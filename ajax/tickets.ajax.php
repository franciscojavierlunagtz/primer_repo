<?php
require_once "../controllers/tickets.controlador.php";
require_once "../models/tickets.modelo.php";

class ValidateTicketsController{

    public $ticketName;

    public function dataRepeatTicket(){
        $item = "ticketName";
        $valor = $this->ticketName;
       
        $ajaxTicket = ControladorTickets::ctrMostrarTickets($item, $valor);
        echo json_encode($ajaxTicket);
    }

}

if(isset($_POST["ticketNumber"])){
    $validateTicket = new ValidateTicketsController();
    $validateTicket -> ticketName = $_POST["ticketNumber"];
    $validateTicket ->dataRepeatTicket();

}

