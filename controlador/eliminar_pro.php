<?php
include '../php/conexion.php';
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion -> query ("DELETE FROM proyeccion WHERE id_proyeccion=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">PROYECCIÓN ELIMINADA SATISFACTORIAMENTE</div>';
    }else{
        echo '<divclass="alert alert-danger">LA PROYECCIÓN NO SE HA ELIMINADO</div>';
    }
}
?>