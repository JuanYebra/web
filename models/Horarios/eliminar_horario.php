<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include '../../controller/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM horarios WHERE id_horario = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: ../../vista/Empresa/Horario.php');
	}else{
		echo "Error";
	}

?>