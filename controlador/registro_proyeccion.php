<?php
include '../php/conexion.php';
if(!empty($_POST['registro_proy'])){
    if(!empty($_POST["usuario"]) and !empty($_POST["año"]) and !empty($_POST["area"]) 
    and !empty($_POST["racimo"]) and !empty($_POST["precio"])){
        $user_p=$_POST['usuario'];
        $año_p=$_POST['año'];
        $area_p=$_POST['area'];
        $racimo_p=$_POST['racimo'];
        $precio_p=$_POST['precio'];
        $sql =$conexion->query ("INSERT INTO proyeccion (user,año_proyeccion,area_proyectada,cant_racim_proyect,precio_venta_proy)
        VALUES ('$user_p',$año_p,$area_p,$racimo_p,$precio_p)");
        if($sql==1){
        echo '<script> alert("Se ha registrado exitosamente")</script>'; 
        } else{
        echo '<script> alert("Intente nuevamente, usuario no registrado")</script>'; 
        } 
    }
    else{
        echo '<div class="alert=danger">Algun campo esta vacio</div>';
        mysqli_close($conexion);
    }
}
?>