<?php
    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["correo_usuario"];
                $pass = $_POST["pass_usuario"];
                if(empty($correo) and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql="SELECT * FROM usuario WHERE correo_usuario=? AND pass_usuario=? AND estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["id_usuario"]=$resultado["id_usuario"];
                        $_SESSION["nombre_usuario"]=$resultado["nombre_usuario"];
                        $_SESSION["apellido_usuario"]=$resultado["apellido_usuario"];
                        header("Location:".Conectar::ruta()."vista/Home/home.php");
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>