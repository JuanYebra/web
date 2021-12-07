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
    <div class="container-fluid cmargin">
     <!---------------------------------------contenido-------------------------------------------------------------------->
        <?php
            include_once '../Cabecera/cabecera.php';
        ?>
            <h1>Elaborar reportes</h1>
            <h2>Genera reportes de asistencia.</h2><br/><br/>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Elige las fechas en las que quieres generar el reporte.<br/>
            Puedes generar reportes con un maximo de 31 dias<br/><br/>
            <label for="recipient-name">Desde :</label>
        		<input type="date" name="buscar_dep" >
            <label for="recipient-name" >Hasta :</label>
        		<input type="date" name="buscar_dep" ><br/><br/>
            <form>
              <fieldset>
                  <legend>Empleados: </legend>
                  <label>
                    <input type="radio" name="color" value="azul"> Todos
                  </label>
                  <label>
                      <input type="radio" name="color" value="negro"> Personalizado
                  </label>
              </fieldset><br/>
              <fieldset>
                  <legend>Crear en: </legend>
                  <label>
                      <input type="radio" name="numero" value="1"> Excel
                  </label>
                  <label>
                      <input type="radio" name="numero" value="2"> PDF
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