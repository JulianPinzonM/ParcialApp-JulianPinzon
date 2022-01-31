<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Directorio estudiantes</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>

    </head>
    <body>
        <?php
        require_once 'logica/Estudiante.php';
        include 'logica/Estudiante.php';
        $estudiante = new Estudiante();
        $estudiantes = $estudiante->consultarTodos();

        if (isset($_POST["crear"])) {
            $estudiante = new Estudiante($_POST["codigo"], $_POST["nombre"], $_POST["apellido"], $_POST["fecha_nacimiento"]);
            $estudiante->crear();
        }
        ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card">
                        <h5 class="card-header">Digitar estudiante nuevo</h5>
                        <div class="card-body">
                            <?php if (isset($_POST["crear"])) { ?>
                                <div class="alert alert-success alert-dismissible fade show"
                                     role="alert">
                                    Datos registrados correctamente
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            <?php } ?>				
                            <form method="post" action="index.php?pid=<?php echo base64_encode("presentacion/vuelo/crearEstudiante.php") ?>" >
                                <div class="mb-3">							
                                    <label for="exampleInputEmail1" class="form-label">codigo</label>
                                    <input type="number" class="form-control" name="codigo" required="required">							
                                </div>
                                <div class="mb-3">							
                                    <label for="exampleInputEmail1" class="form-label">nombre</label>
                                    <input type="text" class="form-control" name="nombre" required="required">							
                                </div>
                                <div class="mb-3">							
                                    <label for="exampleInputEmail1" class="form-label">apellido</label>
                                    <input type="text" class="form-control" name="apellido" required="required">							
                                </div>
                                <div class="mb-3">							
                                    <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fecha" required="required">
                                </div>

                                <button type="submit" class="btn btn-primary" name="crear">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

