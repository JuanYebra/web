<?php

if (!isset($_POST['oculto'])) {
    exit();
}

include '../../Controller/conexion.php';
$nombreh = $_POST['nombre_ho'];
$diash = $_POST['dias_ho'];
$horash = $_POST['hora_ho'];

$sentencia = $bd->prepare("INSERT INTO horarios(nombre_horario,dias,horas) VALUES (?,?,?);");
$resultado = $sentencia->execute([$nombreh, $diash, $horash]);

if ($resultado == TRUE) {
    //echo "Insertado correctamente";
    header('Location: ../../vista/Empresa/Horario.php');
} else {
    echo "Error";
}
?>