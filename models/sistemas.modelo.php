<?php
require_once "conexion.php";
class ModeloSistemas{

    //mostrar sistemas
    static public function mdlMostrarSistema($tabla, $item, $valor){
        if(($item != null) && ($valor != null)){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }

        if(($item != null) && ($valor == null)){
            $stmt = Conexion::conectar()->prepare("SELECT DISTINCT $item FROM $tabla ORDER BY $item");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        if(($item == null) && ($valor == null)){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        $stmt = null;

    }

    static public function mdlCrearSistema($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(epicname, summary, systemID, state, location, platform, boardname, processor, team) VALUES (:epicname, :summary, :systemID, :state, :location, :platform, :boardname, :processor, :team)");

        $stmt -> bindParam(":epicname", $datos["epicname"], PDO::PARAM_STR);
        $stmt -> bindParam(":summary", $datos["summary"], PDO::PARAM_STR);
        $stmt -> bindParam(":systemID", $datos["systemID"], PDO::PARAM_STR);
        $stmt -> bindParam(":state", $datos["state"], PDO::PARAM_STR);
        $stmt -> bindParam(":location", $datos["location"], PDO::PARAM_STR);
        $stmt -> bindParam(":platform", $datos["platform"], PDO::PARAM_STR);
        $stmt -> bindParam(":boardname", $datos["boardname"], PDO::PARAM_STR);
        $stmt -> bindParam(":processor", $datos["processor"], PDO::PARAM_STR);
        $stmt -> bindParam(":team", $datos["team"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "done";

        }else{
            return "error";
        }
        $stmt = null;


    }


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
            return $stmt -> fetchAll();
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


    static public function mdlEditarSistema($tabla, $datos){

        $stmt2 = Conexion::conectar()->prepare("UPDATE $tabla SET epicname = :epicname, summary = :summary, systemID = :systemID, state = :state, location = :location, platform = :platform,
                                                            boardname = :boardname, processor = :processor, team = :team WHERE systemID = :systemID");
        $stmt2 -> bindParam(":epicname", $datos["epicname"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":summary", $datos["summary"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":systemID", $datos["systemID"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":state", $datos["state"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":location", $datos["location"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":platform", $datos["platform"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":boardname", $datos["boardname"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":processor", $datos["processor"], PDO::PARAM_STR);
        $stmt2 -> bindParam(":team", $datos["team"], PDO::PARAM_STR);
        
                    if($stmt2->execute()){
                        return "done";
                    }else{
                        return "error";
                    }
                    $stmt2 = null;
    }


//Eliminar Usuario
   static public function mdlEliminarSistema($tabla, $item1, $valor1, $item2, $valor2){


	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}


		$stmt = null;

	}

}


