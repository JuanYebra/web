<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/contenido.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
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
        
            <h1>Configurar reportes automáticos</h1>
            <h2>Elige cuando quieres recibir de manera automatica los reportes de asistencia</h2><br/><br/>
            <form>
              <fieldset>
                  <legend>Frecuencia: </legend>
                  <label>
                    <input type="radio" name="color" value="diario"> Diario
                  </label>
                  <label>
                      <input type="radio" name="color" value="semanal"> Semanal
                  </label>
                  <label>
                      <input type="radio" name="color" value="quincenal"> Quincenal
                  </label>
              </fieldset><br/>
              <fieldset>
                  <legend>Dia de la semana: </legend>
                  <label>
                      <input type="radio" name="numero" value="lunes">  Lunes
                  </label>
                  <label>
                      <input type="radio" name="numero" value="martes"> Martes
                  </label>
                  <label>
                      <input type="radio" name="numero" value="miercoles"> Miercoles
                  </label>
                  <label>
                      <input type="radio" name="numero" value="jueves"> Jueves
                  </label>
                  <label>
                      <input type="radio" name="numero" value="viernes"> Viernes
                  </label>
                  <label>
                      <input type="radio" name="numero" value="sdabado"> Sabado
                  </label>
                  <label>
                      <input type="radio" name="numero" value="domingo"> Domingo
                  </label>
              </fieldset>
            </form><br/>
            <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Generar reporte</button>

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

    </body>
</html>