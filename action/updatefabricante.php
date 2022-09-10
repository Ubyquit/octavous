<?php

    // Importar el archivo de conexión
    include('../connection/connection.php');

    $phpId = $_POST['inputId'];
    $phpNombre = $_POST['inputNombre'];

    $updateFabricante = "UPDATE fabricante SET nombre = '$phpNombre' WHERE codigo = '$phpId'";

    $resultado = mysqli_query($connection,$updateFabricante);

    header('Location: ../fabricantes.php')

?>