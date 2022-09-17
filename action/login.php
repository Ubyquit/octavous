<?php

    //print_r($_POST);

    include('../connection/connection.php');

    $phpEmail = $_POST['inputEmail'];
    $phpPassword = $_POST['inputPassword'];

    $consulta = "SELECT * FROM usuario WHERE email = '$phpEmail'";
    $resultado = mysqli_query($connection,$consulta);

    $fila = mysqli_fetch_array($resultado);

    $respuesta = ''; // Comprobación

    if(sizeof($fila) > 0 && $fila["email"] = $phpEmail){
        if($fila["password"] = $phpPassword){
            $respuesta = 1;
        }else{
            $respuesta = "El password es incorrecto";
            echo $respuesta;
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../index.html">';
        }
    }else{
        $respuesta = "El correo electronico no es correcto";
        echo $respuesta;
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../index.html">';
    }

    if($respuesta == 1){
        header("location: ../dashboard.html");
    }
?>