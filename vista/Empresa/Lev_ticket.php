<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Levantar ticket</title>
        <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap 5 CDN Link -->
    <<link href="../css/bootstrap.min.css" rel="stylesheet" >
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
    </head>
    <body>
        <div class="wrapper">
            <?php
            include '../Cabecera/Cabecera.php';
            ?>
                <section>
                    <article>
                        <h1>Levantar ticket</h1>
                        <h2>Envianos cualquier duda o requerimiento que tengas, lo atenderemos en el menor tiempo posible.</h2><br/><br/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Aqui agrega tus comentarios</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="#">
                                                <div class="mb-3">
                                                    <textarea name="description" id="your_summernote" class="form-control" rows="4"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                        <!-- Summernote JS - CDN Link -->
                        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#your_summernote").summernote({
                                    
                                });

                                $('.dropdown-toggle').dropdown();
                            });
                        </script>
                    </article>
                </section>
        </div>
    </body>
</html>