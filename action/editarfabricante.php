<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Fabricantes</title>
</head>

<body>

    <div class="container">

        <br>
        <!--Inicio de formulario-->
        <?php
        // Importar el archivo de conexión
        include('../connection/connection.php');

        // Recibir variable
        //print_r($_GET);
        $phpId = $_GET['id'];

        // Variable para mostrar objeto por medio de codigo
        $consulta = "SELECT * FROM fabricante WHERE codigo = '$phpId'";

        // Query de conexión y query de mostrar
        $resultado = mysqli_query($connection, $consulta);
        // Mientras haya algo dentro de table, seguira listando
        $fila = mysqli_fetch_array($resultado)
        ?>

        <form action="updatefabricante.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre fabricante</label>
                <input type="text" name="inputNombre" value="<?php echo $fila["nombre"] ?>" class="form-control">
                <input type="hidden" name="inputId" value="<?php echo $fila["codigo"] ?>">
            </div>
            <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
        </form>
        <!--Final de formulario-->
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>