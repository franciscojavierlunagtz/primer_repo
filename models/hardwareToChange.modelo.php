<?php
require_once "conexion.php";

class ModeloHardwareToChange{


    static public function mdlMostrarHardwareToChange($tabla, $item, $valor){
       
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();

        $stmt = null;

    }

    static public function mdlMostrarNumHardwareToChange($tabla, $item, $valor){
       
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->rowCount();
     
}

static public function mdlUpdateNewDIMMs($tabla, $datos, $system){
    $status="In Use";
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET location=:system, status=:status WHERE gdc=:gdcs");
        foreach($datos["gdcs"] as $key => $value) {

            $stmt->bindParam(":system", $system, PDO::PARAM_STR);
            $stmt->bindParam(":status", $status, PDO::PARAM_STR);
            $stmt->bindParam(":gdcs", $value, PDO::PARAM_STR);
            if (!$stmt->execute()) {
                return "error";
            }
        }
        return "ok";  
    $stmt = null;
   }
}