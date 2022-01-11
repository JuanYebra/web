<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Departamentos</title>
</head>

<body>

<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: ../../index.php');
} elseif (isset($_SESSION['nombre'])) {
    include '../../controller/conexion.php';
    $sentencia = $bd->query("SELECT * FROM departamento;");
    $departamentos = $sentencia->fetchAll(PDO::FETCH_OBJ);
} else {
    echo "Error en el sistema";
}
?>

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>

  
  
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th scope="col">Departamento</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
foreach ($departamentos as $dato) {
    $id=$dato->id_departamento;
    $name=$dato->departamento;
    ?>
                            <tr>
                                
                            
                                <td><?php echo $dato->departamento; ?></td>
                                <td><?php echo $dato->responsable; ?></td>
                                <td><?php echo $dato->usuario; ?></td>
                            </tr>
    <?php
}
?>

                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>
  </main>
  
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--sweetalert-->	


   
</body>
</html>




<?php
$html=ob_get_clean();
//echo $html;


require_once ("../../lib/dompdf/autoload.inc.php");

use Dompdf\Dompdf; //para incluir el namespace de la librería
 
$dompdf = new Dompdf(); //crear el objeto de la clase Dompdf
       
// Componer el HTML
//$html11 = $html; //el html que necesites en formato texto, puedes incluirlo desde una vista de tu MVC
        
// Añadir el HTML a dompdf
$dompdf->loadHtml($html);
        
//Establecer el tamaño de hoja en DOMPDF
$dompdf->setPaper('A4', 'portrait');
 
// Renderizar el PDF
$dompdf->render();
 
// Forzar descarga del PDF
$dompdf->stream("mypdf.pdf", [ "Attachment" => false]);
?> 
