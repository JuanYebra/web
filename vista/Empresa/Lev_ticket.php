<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Levantar ticket</title>
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
        ?>
        
        <article>
            <h1>Levantar ticket</h1>
            <h2>Envianos cualquier duda o requerimiento que tengas, lo atenderemos en el menor tiempo posible.</h2><br/><br/>
        </article>
                        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Aqui agrega tus comentarios</h3>
                        </div>
                            <div class="card-body">
                            <form action="#">
                                <div class="mb-3">
                                    <textarea  class="form-control" rows="4"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><br/>
            <div>
            <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Enviar ticket</button>
            </div>

                        

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













