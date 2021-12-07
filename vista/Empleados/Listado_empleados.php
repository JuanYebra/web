<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/contenido.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
                    session_start();

            include_once '../Cabecera/cabecera.php';
            include_once '../../Controller/conexion.php';
            $sentencia = $bd->query("SELECT departamento FROM departamento;");
            $departamentos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        ?>
        

        <article>
                <h1>Listado de empleados</h1>
                <h2>Aquí podrás agregar, editar o eliminar a tus empleados.</h2><br/><br/>
                
                <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+ Agregar empleado</button>
            </article><br/><br/><br/>


          <div>
          <label for="recipient-name" >Buscar :</label>
        		<input type="text" name="buscar" >
            <label for="recipient-name" >Departamento :</label>
            <input list="browsers">
            <datalist id="browsers">
            <?php
foreach ($departamentos as $dato) {
          ?>
              <option value="<?php echo $dato->departamento; ?>">
              
          <?php
              }
          ?>
            </datalist>

          </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">Nombre</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Horario</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    
                    <td>Larry the Bird</td>
                    <td>Lanzon</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
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
    </body>
</html>