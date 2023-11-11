<?php
require_once "conexion.php";
class ModeloTickets{

    static public function mdlMostrarTickets($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY fecha DESC");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
        
        $stmt = null;
    }


    static public function mdlCrearTickets($tabla,$datos){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ticketName, user_id, sys_id, items) VALUES (:ticketName, :user_id, :sys_id, :items)");
    
            $stmt -> bindParam(":ticketName", $datos["ticketName"], PDO::PARAM_STR);
            $stmt -> bindParam(":user_id", $datos["user_id"], PDO::PARAM_STR);
            $stmt -> bindParam(":sys_id", $datos["sys_id"], PDO::PARAM_STR);
            $stmt -> bindParam(":items", $datos["items"], PDO::PARAM_STR);

    
            if($stmt->execute()){
                return "ok";
    
            }else{
                return "error";
            }
            $stmt = null;
        }

}

