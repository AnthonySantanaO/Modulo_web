<?php
include 'conexion.php';
$nombre_completo = $_POST['nombres'];
$correo= $_POST['correo_user'];
$usuario=$_POST['user'];
$password=$_POST['clave'];
/*Encriptación de contraseña*/
$password= hash ('md5', $password); 
$query = "INSERT INTO usuario (nombres, correo_user, user, clave)
            VALUES ('$nombre_completo','$correo','$usuario','$password')";
/* Verificar que el correo no se repita*/
$verificar_correo=mysqli_query($conexion, "SELECT * FROM usuario WHERE correo_user='$correo'");
if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '<script>
    alert("Este correo ya esta en uso, intenta con uno diferente");
    window.location="../index.php";
    </script>';
    exit();
}
/* Verificar que el usuario no se repita*/
$verificar_usuario=mysqli_query($conexion, "SELECT * FROM usuario WHERE user='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo '<script>
    alert("Este usuario ya existe, intenta con uno diferente");
    window.location="../index.php";
    </script>';
    exit();
}
/* Verificar que los nombres no se repitan*/
$verificar_nombre=mysqli_query($conexion, "SELECT * FROM usuario WHERE nombres='$nombre_completo'");
if(mysqli_num_rows($verificar_nombre) > 0 ){
    echo '<script>
    alert("Este usuario ya existe, intenta con uno diferente");
    window.location="../index.php";
    </script>';
    exit();
}
$ejecutar =mysqli_query($conexion, $query);
if($ejecutar){
    echo '<script> alert("Se ha registrado exitosamente") 
    window.location= "../index.php" </script>'; 
} else{
    echo '<script> alert("Intente nuevamente, usuario no registrado") 
    window.location= "../index.php" </script>'; 
}
mysqli_close($conexion);
?>