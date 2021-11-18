<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Departamento</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper">

            <?php
            include '../Cabecera/Cabecera.php';
            ?>
                <section>
                    <article>
                        <h1>Departamentos</h1>
                        <h2> Agrega todos los departamentos de tu empresa, después podrás asignarlos a cada empleado.</h2><br/><br/>
                        <a href="Agregar_departamento.php" class="buttonlink" > + Agregar departamento</a><br/><br/>
                        
                        <table>
                            <tr>
                                <td>Departamento</td>
                                <td>Responsable</td>
                                <td>Usuario</td>
                            </tr>
                        </table>


                    </article>
                </section>
        </div>
    </body>
</html>