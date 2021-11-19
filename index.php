<?php
    require_once("Controller/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario ->login();
    }
?>

<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <?php
                        if(isset($_GET["m"])){
                                ?>
                                    <div class="alert alert-warning alert-dismissable">
                                        <strong class="alert">¡Error!</strong> El usuario o la contraseña son incorrectos.
                                    </div>
                                <?php
                            }

                    ?>
                    <form id="login_form" action="" method="post" >
                        <input type="text" id="correo_usuario" name="correo_usuario" placeholder="Correo" required>
                        
                        <input type="password" placeholder="Contraseña" id="pass_usuario" name="pass_usuario" required>
                        
                        <input type="hidden" name="enviar" class="form-control" value="si">
                        <button type="submit" title="Ingresar" name="Ingresar">Acceder</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                    </div>
                    <div class="by">
                        <p>by Dostop</p>
                    </div>
                </div>
                
            </div>
        </div>
            
    </body>
</html>