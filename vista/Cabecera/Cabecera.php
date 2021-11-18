<?php
include '../../Controller/conexion.php';
include '../../models/Usuario.php';
$resultado = $_SESSION['nombre_usuario'];
if(!isset($resultado)){
    header("Location:index.php");
}
?>

<link rel="stylesheet" href="../css/cabecera.css">
    <input type="checkbox" id="navigation" />
    <label for="navigation">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="18" x2="20" y2="18" />
          </svg>
    </label>
    <nav>
        <ul>
            <li>
                <h1>Dostop</h1>
                <br><h2>Empresa</h2>
                <li>
                    <a href="../Empresa/Dato_empresa.php">Datos de la empresa</a>
                    <a href="../Empresa/Lev_ticket.php">Levantar un ticket</a>
                    <a href="../Empresa/Departamento.php">Departamentos</a>
                    <a href="../Empresa/Horario.php">Horarios</a>
                </li>
            </li>
            <li>
                <br><br><h2>Empleados</h2>
                <li>
                    <a href="../Empleados/Listado_empleados.php">Lista de empleados</a>
                    <a href="../Empleados/Lista_asistencia">Lista de asistencia</a>
                </li>
            </li>
            <li>
                <br><br><h2>Reportes</h2>
                <li>
                    <a href="../Reportes/Conf_reportes.php">Configurar reportes automaticos</a>
                    <a href="../Reportes/Elabora_reportes.php">Elaborar reportes</a>
                </li>
            </li>
            <li>
                <br><br><h2>Ayuda</h2>
                <li>
                    <a href="">Videos</a>
                    <a href="../cerrars.php">Cerrar sesion</a>
                </li>
            </li>
        </ul>
    </nav>

     
 
