<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="../css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>


    <div>
        <?php
        include '../Cabecera/Cabecera.php';
        ?>

          <section>
            <article>
                <h1>Listado de empleados</h1>
                <h2>Aquí podrás agregar, editar o eliminar a tus empleados.</h2><br/><br/>
                <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+ Agregar empleado</button>
            </article><br/><br/><br/>


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
          


          </section>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre(s):</label>
            <input type="text" class="form-control" id="nombredep">
          </div>
      
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>