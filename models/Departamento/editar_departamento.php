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
</head>
<body>

		<h3>Editar Departamento:</h3>
		<form method="POST" action="editarProcesoDepartamento.php">
			<table>
				<tr>
					<td>Nuevo nombre de departamento: </td>
					<td><input type="text" name="dep2" value="<?php echo $persona->departamento; ?>"></td>
				</tr>
				<tr>
					<td>Nuevo Resposnable: </td>
					<td><input type="text" name="resp2" value="<?php echo $persona->responsable; ?>"></td>
				</tr>
				<tr>
					<td>Nuevo usuario: </td>
					<td><input type="text" name="user2" value="<?php echo $persona->usuario; ?>"></td>
				</tr>
				
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id_departamento; ?>">
					<td colspan="2"><input type="submit" value="Editar Departamento"></td>
				</tr>
			</table>
		</form>
</body>
</html>





