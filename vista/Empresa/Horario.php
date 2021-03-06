<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: ../../index.php');
} elseif (isset($_SESSION['nombre'])) {
    include '../../controller/conexion.php';
    $sentencia = $bd->query("SELECT * FROM horarios;");
    $horariosv2 = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);
} else {
    echo "Error en el sistema";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Horarios</title>
    <?php require_once("../head/head.php");?>
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
            //modalingreso
            include '../modals/new_time.php'
        ?>

            <article>
                <h1>Horarios</h1>
                <h2> En esta sección puedes crear horarios para después asignarlos a tus empleados.</h2><br/><br/>
                <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >+ Agregar horario</button>
            </article><br/><br/><br/>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Horas</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
foreach ($horariosv2 as $dato) {
    $id=$dato->id_horario;
    $name=$dato->nombre_horario
    ?>
                            <tr>
                                <td>
                                    <button class="btn btn-warning" onclick="location.href='../../models/Horarios/editar_horario.php?id=<?php echo $id;?>'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                               
                                     <!--sweetalert-->
                                    <button class="btn btn-danger"  onclick="alerteliminar();" id="delete" data-id="<?=$id?>" data-name="<?=$name?>" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td><?php echo $dato->nombre_horario; ?></td>
                                <td><?php echo $dato->dias; ?></td>
                                <td><?php echo $dato->horas; ?></td>
                            </tr>
    <?php
}
?>

                </table>


     <!---------------------------------------fin contenido-------------------------------------------------------------------->

    </div>
  </main>
  
</div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--sweetalert-->	
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../js/alert_edit.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/slide.js"></script>
        <script src="../js/eliminar_horario.js"></script>
    </body>
</html>
