<?php
session_start();
include 'conexion.php';
$correo = $_POST['correo_user'];
$password =$_POST['clave'];

$validate_login=mysqli_query($conexion, "SELECT * FROM usuario WHERE correo_user='$correo'
and clave='$password' ");

if(mysqli_num_rows($validate_login)>0){
    $_SESSION['usuario']= $correo; 
    header("location: ../paginas/inicio.php");
    exit;
}else{
    echo '<script>
    alert("Este usuario no existe, verifique los datos proporcionados");
    window.location="../index.php";
    </script>';
    exit();
}
?>