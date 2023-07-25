<?php
    $conexion = mysqli_connect("localhost", "root", "", "cultivo");
    $conexion->set_charset("utf8");
    if($conexion->connect_error){
        die('Error de conexcion'.$conexion->connect_error);
    }
?>