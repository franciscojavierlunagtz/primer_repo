
<?php
class ControladorUsuarios{

//mostrar usuarios
static public function ctrMostrarUsuarios($item, $valor){
    $tabla = "usuarios";
    $usercontroll = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
    return $usercontroll;
}

//ingreso al sistema
static public function ctrIngresoUsuario(){
    if(isset($_POST["ingEmail"])){
        $ingPassword = $_POST["ingPassword"];
          if((preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $_POST["ingEmail"])) && (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $ingPassword))){
            $hashedPassword = hash('sha512', $ingPassword);
            $tabla="usuarios";
            $item="email";
            $valor=$_POST["ingEmail"];
            var_dump($hashedPassword);
            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
                if($respuesta["email"] == $_POST["ingEmail"] && $respuesta["password"] == $hashedPassword){
                    if($respuesta["estado"] == 1){
                    $_SESSION["iniciarSesion"] = "done"; 
                    $_SESSION["user_id"] = $respuesta["user_id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["apellido"] = $respuesta["apellido"];
                    $_SESSION["usuario"] = $respuesta["usuario"];
                    $_SESSION["email"] = $respuesta["email"]; 
                    $_SESSION["perfil"] = $respuesta["perfil"]; 
                    $_SESSION["foto"] = $respuesta["foto"]; 

                    date_default_timezone_set("America/Mexico_City");

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "ultimo_login";
						$valor1 = $fechaActual;

						$item2 = "user_id";
						$valor2 = $respuesta["user_id"];

						$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
                        if($ultimoLogin == "ok"){

                            echo '<script>window.location = "http://localhost/lastraspinv/users";</script>'; 

                        }
                  
                    }else{

                        echo '<br><div class="alert alert-danger">The user is not activated</div>';
            }
            }else{
                echo '<br><div class="alert alert-danger">The user is not registered</div>';
            }

        }

    }
}


//crear Usuario
static public function ctrCrearUsuario(){
    if(isset($_POST["nameNewUser"])){
        $ruta="";
        $tabla = "usuarios";

        $nameNewFirstName = $_POST["nameNewFirstName"];
        $nameNewLastName = $_POST["nameNewLastName"];
        $nameNewUser = $_POST["nameNewUser"];
        $nameNewEmail = $_POST["nameNewEmail"];
        $nameNewPass = $_POST["nameNewPass"];
        $nameNewProfile = $_POST["nameNewProfile"];

        if(preg_match("/^([0-9a-zA-Z'_ ]+)$/",$nameNewFirstName) &&
           preg_match("/^([0-9a-zA-Z'_ ]+)$/",$nameNewLastName) &&
           preg_match('/^[a-zA-Z0-9_]{3,20}$/',$nameNewUser) &&
           preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i',$nameNewEmail) &&
           preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$nameNewPass) &&
           preg_match('/^[a-zA-Z]{3,14}$/',$nameNewProfile)){

            if(isset($_FILES["nameNewUserImg"]["tmp_name"]) && !empty($_FILES["nameNewUserImg"]["tmp_name"])){

                list($ancho, $alto) = getimagesize($_FILES["nameNewUserImg"]["tmp_name"]);
                $nuevoAncho = 500;
                $nuevoAlto = 500;
                $directorio = "views/assets/img/users/".$nameNewUser;
                mkdir($directorio, 0755);
    
                if($_FILES["nameNewUserImg"]["type"] == "image/jpeg"){
    
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".jpg";
                    $origen = imagecreatefromjpeg($_FILES["nameNewUserImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                }
    
                if($_FILES["nameNewUserImg"]["type"] == "image/png"){
    
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".png";
                    $origen = imagecreatefrompng($_FILES["nameNewUserImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagepng($destino, $ruta);
                }
    
            }
            $secpass = hash('sha512', $nameNewPass);
            $datos = array("nombre" => ucfirst(strtolower($nameNewFirstName)),
            "apellido" => ucfirst(strtolower($nameNewLastName)),
            "usuario" => $nameNewUser,
            "email" => filter_var($nameNewEmail, FILTER_SANITIZE_EMAIL),
            "password" => $secpass,
            "perfil" => $nameNewProfile,
            "foto" => $ruta);
           } 
            

       $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

        if($respuesta == "done"){

            echo '<script>window.location = "http://localhost/lastraspinv/users";</script>';

        }else{
            echo '<script>
                   swal.fire({
                      title: "Error!",
                      text: "The first and last names cannot be empty or contain special characters!",
                      icon: "warning",
                      dangerMode: true,
                      button: "Accept",
                    }).then((result)=>{
                        if(result.value){
                            window.location = "users";
                        }
                        });
                  </script>';

        }
    }

}


//Edit User

static public function ctrEditUser(){
    if(isset($_POST["nameEditUser"])){

        $nameEditFirstName = $_POST["nameEditFirstName"];
        $nameEditLastName = $_POST["nameEditLastName"];
        $nameEditUser = $_POST["nameEditUser"];
        $nameEditEmail = $_POST["nameEditEmail"];
        $nameEditProfile = $_POST["nameEditProfile"];

        if(preg_match("/^([0-9a-zA-Z'_ ]+)$/",$nameEditFirstName) &&
           preg_match("/^([0-9a-zA-Z'_ ]+)$/",$nameEditLastName) &&
           preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i',$nameEditEmail)){

            $ruta=$_POST["nameFotoActual"];
            if(isset($_FILES["nameEditUserImg"]["tmp_name"]) && !empty($_FILES["nameEditUserImg"]["tmp_name"])){

                list($ancho, $alto) = getimagesize($_FILES["nameEditUserImg"]["tmp_name"]);
                $nuevoAncho = 500;
                $nuevoAlto = 500;
                $directorio = "views/assets/img/users/".$nameEditUser;
                //mkdir($directorio, 0755);
                if(!empty($_POST["nameFotoActual"])){
                    unlink($_POST["nameFotoActual"]);
                }else{
                    mkdir($directorio, 0777);
                }
                if($_FILES["nameEditUserImg"]["type"] == "image/jpeg"){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".jpg";
                    $origen = imagecreatefromjpeg($_FILES["nameEditUserImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                }
                if($_FILES["nameEditUserImg"]["type"] == "image/png"){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".png";
                    $origen = imagecreatefrompng($_FILES["nameEditUserImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagepng($destino, $ruta);
                }
              }

              $tabla="usuarios";
              if(isset($_POST["nameEditPass"]) && !empty($_POST["nameEditPass"])){
                  $secpass = hash('sha512', $_POST["nameEditPass"]);
                  //$secpass = crypt($_POST["editarPass"], '$6$rounds=5000$usesomesillystringforsalt$');
              }else{
                  $secpass = $_POST["namePassActual"];
              }

              $datos = array("nombre" => ucfirst(strtolower($nameEditFirstName)),
            "apellido" => ucfirst(strtolower($nameEditLastName)),
            "usuario" => $nameEditUser,
            "email" => filter_var($nameEditEmail, FILTER_SANITIZE_EMAIL),
            "password" => $secpass,
            "perfil" => $nameEditProfile,
            "foto" => $ruta);

            $respuesta2 = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
              if($respuesta2 == "done"){
                echo '<script>window.location = "http://localhost/lastraspinv/users";</script>';
              }
              $respuesta2 == null;
           }
           
}

}



}

















