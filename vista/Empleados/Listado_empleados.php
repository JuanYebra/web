<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Empleados</title>
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
            <input list="departamentos">
            <datalist id="departamentos">
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