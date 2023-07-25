<?php
include '../php/conexion.php';
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion -> query ("DELETE FROM medicion WHERE idmedicion=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">MEDICIÓN ELIMINADA SATISFACTORIAMENTE</div>';
    }else{
        echo '<divclass="alert alert-danger">LA MEDICIÓN NO SE HA ELIMINADO</div>';
    }
}
?>