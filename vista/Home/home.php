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
    <meta charset="utf-8">
    <?php require_once("../head/head.php") ?>
</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>

  <main class="page-content">
    <div class="container-fluid">
     <!---------------------------------------contenido-------------------------------------------------------------------->
        <?php
            include_once '../Cabecera/cabecera.php';
        ?>
        

        <h1> WELCOME</h1>

                <img src="../../docs/img.png" width="100%" height="100%">



     <!---------------------------------------fin contenido-------------------------------------------------------------------->

    </div>
  </main>
  
</div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--sweetalert-->	
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/slide.js"></script>
        <script src="../js/sweetalert.js"></script>
    </body>
</html>