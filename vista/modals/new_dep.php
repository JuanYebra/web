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
                            <h5 class="modal-title" id="staticBackdropLabel">Nuevo departamento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form method="POST" action="../../models/Departamento/insertar_departamento.php">

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre de departamento:</label>
                                    <input type="text" class="form-control" id="nombredep" name="nombredep">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Responsable:</label>
                                    <input type="text" class="form-control" id="responsable" name="responsable">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario">
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