<?php
    $host = "localhost";
    $User = "root";
    $pass = "";

    $db = "project";

    $conexion = mysqli_connect($host, $User , $pass, $db);

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    
    if ($conexion) {
        echo "";
    }
    
    
?>
