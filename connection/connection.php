<?php

// Datos de la db en variables

$hostname = 'localhost';
$username = 'ubyquit';
$password = 'Holamundo2022';
$database = 'octavous';

// Query para la conexión a la db

$connection = mysqli_connect($hostname,$username,$password,$database);

// Validador de conexión de la db

if (mysqli_connect_error()){
    echo 'Conexión fallida';
}else{
    //echo 'Conexión exitosa';
}

?>


