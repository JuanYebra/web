<?php
session_start();
if (isset($_SESSION['nombre'])) {
    header('Location: vista/Home/home.php');
}
?>

<html lang="es">

    <head>
        <meta charset="utf-8">
        <title> Formulario de Acceso </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    if (isset($_GET["m"])) {
                        ?>                            
                                <div class="alert" >
                                <div class="ali">
                                    
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 9v2m0 4v.01" />
                                            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                        </svg> <br/>
                                    
                                El usuario o la contraseña son incorrectos.
                                </div>
                                </div>
                        <?php
                    }
                    ?>
                    <form id="login_form" action="loginProceso.php" method="post" >
                        <input type="text" id="correo_usuario" name="correo_usuario" placeholder="Correo" required>

                        <input type="password" placeholder="Contraseña" id="pass_usuario" name="pass_usuario" required>

                        <input type="hidden" name="enviar" class="form-control" value="si">
                        <button type="submit" title="Ingresar" name="Ingresar">Acceder</button>
                    </form>
                    <div class="pie-form">
                        <a href="#**">¿Perdiste tu contraseña?</a>
                    </div>
                    <div class="by">
                        <p>by Dostop</p>
                    </div>
                </div>

            </div>
        </div>   
    </body>
</html>
