<?php
    //require_once '../Procesar.php';
    //$procesar = new Procesar();
    
    session_start();

    if (!isset($_SESSION['autenticacionOk']) || $_SESSION['autenticacionOk'] !== true) {
    header("Location: ./login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            padding-top: 60px; /* Para evitar que el contenido quede debajo del navbar */
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación (Header) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Procesar.php?action=inicioView">Trabajo Practico 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../Procesar.php?action=importarCsvView">Importar CSV</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../Procesar.php?action=logout">Cerrar Sesión</a>
                       <!-- <a class="nav-link" href="../controller/LogOutController.php">Cerrar Sesión</a>-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-md-8">

            <h1 class="text-center">Importar csv</h1>

            <form action="../Procesar.php?action=importarCsv" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
             <label for="archivoCsv" class="form-label">Seleccionar archivo csv:</label>
            <input type="file" class="form-control" name="archivoCsv" id="archivoCsv" accept=".csv" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir CSV</button>
            </form>

            <?php
            if (isset($_SESSION["mensaje"])) {
                echo "<div class='alert alert-info mt-3' >" . $_SESSION["mensaje"] . "</div>";
                unset($_SESSION["mensaje"]); 
            }
            ?>
            </div>
            <div class="col-2"></div>

            

        </div>
    </div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
