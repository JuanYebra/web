<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: ../../vista/Empresa/Departamento.php');
	}
	if (!isset($_SESSION['nombre'])) {
		header('Location: ../../vista/Empresa/Departamento.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../../controller/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM departamento WHERE id_departamento = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Departamento</title>
	<meta charset="utf-8">
	<link href="../../vista/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="../../vista/css/editar.css">
</head>
<body>
<div class="div_contenedor">
    <div class="div_centrado">
		<div class="modal-header">
			<h1>Editar Departamento:</h1>
		</div>
	
		<form method="POST" action="editarProcesoDepartamento.php">
			<div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre de departamento:</label>
        		<input type="text" name="dep2" class="form-control" value="<?php echo $persona->departamento; ?>">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Responsable:</label>
            	<input type="text" name="resp2" class="form-control" value="<?php echo $persona->responsable; ?>">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input type="text" name="user2" class="form-control" value="<?php echo $persona->usuario; ?>">
            </div>
			<div class="modal-footer">
				<input type="hidden" name="oculto">
				<input type="hidden" name="id2" value="<?php echo $persona->id_departamento; ?>">

				<td colspan="2"><button class="btn btn-secondary"> Cancelar </button></td>
				<td colspan="2"><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><input type="submit" value="Guardar cambios" > </button></td>
				

			</div>
		</form>
		<!--<button  onclick="edit();">test </button>-->






		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado! </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas guardar los cambios realizados?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick ="location.href='index.html'">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>







	</div>
</div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!--sweetalert-->
   <script src="../../vista/js/alert_edit.js"></script>		
</body>
</html>





