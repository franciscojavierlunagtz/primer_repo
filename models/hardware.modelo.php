<?php

require_once "conexion.php";

class ModeloHardware{

    //mostrar hardware
    static public function mdlMostrarHardware($tabla, $item, $item2, $valor){
        if(($item != null) && ($item2 != null) && ($valor != null)){
            $stmt = Conexion::conectar()->prepare("SELECT DISTINCT $item FROM $tabla WHERE $item2 = :$item2 ORDER BY $item");
            $stmt -> bindParam(":".$item2, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        if(($item != null) && ($item2 == null) && ($valor != null)){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }

        if(($item != null) && ($item2 == null) && ($valor == null)){
            $stmt = Conexion::conectar()->prepare("SELECT DISTINCT $item FROM $tabla ORDER BY $item");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        if(($item == null) && ($item2 == null) && ($valor == null)){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        $stmt = null;

    }



        //crear cpu
    static public function mdlCrearcpu($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(product_name, qdf, step, mcode, serial, ubication, status, team, waic, reserved, wip, comments) VALUES (:product_name, :qdf, :step, :mcode, :serial, :ubication, :status, :team, :waic, :reserved, :wip, :comments)");

        $stmt -> bindParam(":product_name", $datos["product_name"], PDO::PARAM_STR);
        $stmt -> bindParam(":qdf", $datos["qdf"], PDO::PARAM_STR);
        $stmt -> bindParam(":step", $datos["step"], PDO::PARAM_STR);
        $stmt -> bindParam(":mcode", $datos["mcode"], PDO::PARAM_STR);
        $stmt -> bindParam(":serial", $datos["serial"], PDO::PARAM_STR);
        $stmt -> bindParam(":ubication", $datos["ubication"], PDO::PARAM_STR);
        $stmt -> bindParam(":status", $datos["status"], PDO::PARAM_STR);
        $stmt -> bindParam(":team", $datos["team"], PDO::PARAM_STR);
        $stmt -> bindParam(":waic", $datos["waic"], PDO::PARAM_INT);
        $stmt -> bindParam(":reserved", $datos["reserved"], PDO::PARAM_STR);
        $stmt -> bindParam(":wip", $datos["wip"], PDO::PARAM_STR);
        $stmt -> bindParam(":comments", $datos["comments"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
            $stmt = null;

        }else{
            return "error";
            $stmt = null;
        }
         


    }

    //editar CPU
    static public function mdlEditarcpu($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET product_name = :product_name, qdf = :qdf, step = :step, mcode = :mcode, serial = :serial,
                                                ubication = :ubication, status = :status, team = :team, waic = :waic, reserved = :reserved, wip = :wip, comments = :comments  WHERE mcode = :mcode");

        $stmt -> bindParam(":product_name", $datos["product_name"], PDO::PARAM_STR);
        $stmt -> bindParam(":qdf", $datos["qdf"], PDO::PARAM_STR);
        $stmt -> bindParam(":step", $datos["step"], PDO::PARAM_STR);
        $stmt -> bindParam(":mcode", $datos["mcode"], PDO::PARAM_STR);
        $stmt -> bindParam(":serial", $datos["serial"], PDO::PARAM_STR);
        $stmt -> bindParam(":ubication", $datos["ubication"], PDO::PARAM_STR);
        $stmt -> bindParam(":status", $datos["status"], PDO::PARAM_STR);
        $stmt -> bindParam(":team", $datos["team"], PDO::PARAM_STR);
        $stmt -> bindParam(":waic", $datos["waic"], PDO::PARAM_INT);
        $stmt -> bindParam(":reserved", $datos["reserved"], PDO::PARAM_STR);
        $stmt -> bindParam(":wip", $datos["wip"], PDO::PARAM_STR);
        $stmt -> bindParam(":comments", $datos["comments"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
            $stmt = null;

        }else{
            return "error";
            $stmt = null;
        }
    }


    static public function mdlBorrarcpu($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt->execute()){
            return "ok";
            $stmt = null;

        }else{
            return "error";
            $stmt = null;
        }

    }

        static public function mdlCreardimm($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(team, raw_card, gdc, serial, brand, item_name, model, date, charac, status, location, reserved, waic, comments) VALUES
                                                                 (:team, :raw_card, :gdc, :serial, :brand, :item_name, :model, :date, :charac, :status, :location, :reserved, :waic, :comments)");

        $stmt -> bindParam(":team", $datos["team"], PDO::PARAM_STR);
        $stmt -> bindParam(":raw_card", $datos["raw_card"], PDO::PARAM_STR);
        $stmt -> bindParam(":gdc", $datos["gdc"], PDO::PARAM_STR);
        $stmt -> bindParam(":serial", $datos["serial"], PDO::PARAM_STR);
        $stmt -> bindParam(":brand", $datos["brand"], PDO::PARAM_STR);
        $stmt -> bindParam(":item_name", $datos["item_name"], PDO::PARAM_STR);
        $stmt -> bindParam(":model", $datos["model"], PDO::PARAM_STR);
        $stmt -> bindParam(":date", $datos["date"], PDO::PARAM_INT);
        $stmt -> bindParam(":charac", $datos["charac"], PDO::PARAM_STR);
        $stmt -> bindParam(":status", $datos["status"], PDO::PARAM_STR);
        $stmt -> bindParam(":location", $datos["location"], PDO::PARAM_STR);
        $stmt -> bindParam(":reserved", $datos["reserved"], PDO::PARAM_STR);
        $stmt -> bindParam(":waic", $datos["waic"], PDO::PARAM_STR);
        $stmt -> bindParam(":comments", $datos["comments"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
            $stmt = null;

        }else{
            return "error";
            $stmt = null;
        }


    }

    //mostrar hardware
    static public function mdlMostrarDIMMsInfo($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item LIMIT 1");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();

return $stmt->fetch(PDO::FETCH_ASSOC);
   

        $stmt = null;

    }


}


?>