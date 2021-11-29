<?php 
	if (!isset($_POST['oculto'])) {
		header('Location: ../../vista/Empresa/Departamento.php');
	}

	include '../../controller/conexion.php';
	$id2 = $_POST['id2'];
	$departamento2 = $_POST['dep2'];
	$responsable2 = $_POST['resp2'];
	$usuario2 = $_POST['user2'];
	
	$sentencia = $bd->prepare("UPDATE departamento SET departamento = ?, responsable = ?, usuario = ?  WHERE id_departamento = ?;");
	$resultado = $sentencia->execute([$departamento2,$responsable2,$usuario2, $id2]);

	if ($resultado === TRUE) {
		
		header('Location: ../../vista/Empresa/Departamento.php');
	}else{
		echo "Error";
	}
?>