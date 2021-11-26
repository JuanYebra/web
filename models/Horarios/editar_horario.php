<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: ../../vista/Empresa/Horario.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: ../../vista/Empresa/Horario.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../../controller/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM horarios WHERE id_horario = ?;");
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
</head>
<body>
	
		<h3>Editar alumno:</h3>
		<form method="POST" action="editarProcesoHorario.php">
			<table>
				<tr>
					<td>Nombre de departamento: </td>
					<td><input type="text" name="nom2" value="<?php echo $persona->nombre_horario; ?>"></td>
				</tr>
				<tr>
					<td>Resposnable: </td>
					<td><input type="text" name="dia2" value="<?php echo $persona->dias; ?>"></td>
				</tr>
				<tr>
					<td>Usuario: </td>
					<td><input type="text" name="hora2" value="<?php echo $persona->horas; ?>"></td>
				</tr>
				
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id_horario; ?>">
					<td colspan="2"><input type="submit" value="Editar horario"></td>
				</tr>
			</table>
		</form>
</body>
</html>