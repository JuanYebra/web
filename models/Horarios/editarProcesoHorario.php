<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: ../../vista/Empresa/Departamento.php');
	}

	include '../../controller/conexion.php';
	$id2 = $_POST['id2'];
	$nombre2 = $_POST['nom2'];
	$dias2 = $_POST['dia2'];
	$horas2 = $_POST['hora2'];
	
	$sentencia = $bd->prepare("UPDATE horarios SET nombre_horario = ?, dias = ?, horas = ?  WHERE id_horario = ?;");
	$resultado = $sentencia->execute([$nombre2,$dias2,$horas2, $id2]);

	if ($resultado === TRUE) {
		header('Location: ../../vista/Empresa/Horario.php');
	}else{
		echo "Error";
	}
?>