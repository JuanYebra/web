<?php
include '../Controller/conexion.php';

$nombredep = $_POST['nombredep'];
$responsable = $_POST['responsable'];
$usuario = $_POST['usuario'];

$sql = "INSERT INTO departamento (departamento, responsable, usuario) VALUES ('$nombredep', '$responsable', '$usuario')" ;

$resultado=$conectar->query($sql)

?>

<html>
    <?php if ($resultado == TRUE){ ?>
        <h3>registro guardado</h3> 

        <?php } else { ?>
        <h3>Error</h3>
    <?php } ?>
    
</html>