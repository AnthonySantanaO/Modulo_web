<?php
include '../php/conexion.php';
if(!empty($_POST['modificar_proy'])){
    if(!empty($_POST["usuario"]) and !empty($_POST["año"]) and !empty($_POST["area"]) 
    and !empty($_POST["racimo"]) and !empty($_POST["precio"])){
        $user_p=$_POST["usuario"];
        $año_p=$_POST["año"];
        $area_p=$_POST['area'];
        $racimo_p=$_POST['racimo'];
        $precio_p=$_POST['precio'];
        $sql=$conexion->query ("UPDATE proyeccion SET user= '$user_p' , año_proyeccion=$año_p , 
        area_proyectada=$area_p,cant_racim_proyect=$racimo_p , precio_venta_proy=$precio_p 
        WHERE id_proyeccion = $id");
    }
    if($sql==1){
        echo '<script> alert("Se ha registrado exitosamente")
        window.location="../paginas/proyeccion.php";</script>'; 
    } else{
        echo '<script> alert("Intente nuevamente, usuario no registrado")
        window.location="../paginas/proyeccion.php";</script>'; 
    }     
}else{'<script> alert("Algun campo esta vacio");
    window.location="../paginas/proyeccion.php";
    </script>';
}
?>