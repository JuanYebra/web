<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: ../index.php');
} elseif (isset($_SESSION['nombre'])) {
    include '../../controller/conexion.php';
   // $sentencia = $bd->query("SELECT * FROM alumno;");
    //$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);
} else {
    echo "Error en el sistema";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper">

<?php
include '../Cabecera/Cabecera.php';
?>

            <section>

                <h1> WELCOME</h1>

                <img src="../../docs/img.png" width="100%" height="100%">

            </section>
        </div>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="../js/swetalert.js"></script>
    </body>
</html>