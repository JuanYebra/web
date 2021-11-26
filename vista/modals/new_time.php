<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Nuevo horario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form method="POST" action="../../models/Horarios/insertar_horario.php">

                                <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_ho" name="nombre_ho">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Dias:</label>
                            <input type="text" class="form-control" id="dias_ho" name="dias_ho">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Horas:</label>
                            <input type="text" class="form-control" id="hora_ho" name="hora_ho">
                          </div>


                            <input type="hidden" name="oculto" value="1">
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" value="Registrar">

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



</body>
</html>