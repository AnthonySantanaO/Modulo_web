<?php
session_start();
if(!isset($_SESSION['usuario'])){
    session_destroy($_SESSION);
    die();
    header('Location: ../index.php');
}else{
    echo "Debes iniciar sesión";

}
?>