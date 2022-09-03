<?php

include('../connection/connection.php');

//print_r($_POST);

if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputNombre'];
    $phpPrecio = $_POST['inputPrecio'];
    $phpCodigoFabricante = $_POST['inputCodigoFabricante'];

    $insertProducto = "INSERT INTO producto (nombre,precio,codigo_fabricante) 
    VALUE('$phpNombre','$phpPrecio','$phpCodigoFabricante')";

    $resultado = mysqli_query($connection,$insertProducto);

}

header('Location: ../productos.php')

?>