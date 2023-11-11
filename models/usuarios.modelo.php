<?php
require_once "conexion.php";

class ModeloUsuarios{
    static public function MdlMostrarUsuarios($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item LIMIT 1");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
        $stmt = null;
    }


    static public function mdlIngresarUsuario($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, usuario, password, email, perfil, foto) VALUES (:nombre, :apellido, :usuario, :password, :email, :perfil, :foto)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "done";

        }else{
            return "error";
        }
        $stmt = null;
    }

         //editar Usuario
        static public function mdlEditarUsuario($tabla, $datos){

            $stmt2 = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, usuario = :usuario, email = :email, password = :password, perfil = :perfil,
                                                    foto = :foto WHERE usuario = :usuario");
    
            $stmt2 -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
            $stmt2 -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

            if($stmt2->execute()){
                return "done";
            }else{
                return "error";
            }
            $stmt2 = null;

         
        }


            /*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

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


 