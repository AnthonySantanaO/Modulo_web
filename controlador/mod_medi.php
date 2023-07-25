<?php
include '../php/conexion.php';
if(!empty($_POST['modificar_medicion'])){
    if(!empty($_POST["usuario"]) and !empty($_POST["año"]) and !empty($_POST["mes"]) and !empty($_POST["area"]) 
    and !empty($_POST["altura"]) and !empty($_POST["humedad"]) and !empty($_POST["suelo"])
    and !empty($_POST["precio"]) and !empty($_POST["racimos"])){
        $user_m=$_POST['usuario'];
        $año_m=$_POST['año'];
        $mes_m=$_POST['mes'];
        $area_m=$_POST['area'];
        $altura_m=$_POST['altura'];
        $humedad_m=$_POST['humedad'];
        $ph_m=$_POST['suelo'];
        $precio_m=$_POST['precio'];
        $racimo_m=$_POST['racimos'];
        $sql=$conexion->query ("UPDATE medicion SET user='$user_m', año_medicion=$año_m , 
        mes_medicion=$mes_m , area_cultivo=$area_m , altura_planta=$altura_m ,
        humedad_clima=$humedad_m , ph_suelo=$ph_m , precio=$precio_m , cant_racimos=$racimo_m
        WHERE idmedicion = $id");
    }
    if($sql==1){
        echo '<script> alert("Se ha registrado exitosamente")
        window.location="../paginas/medicion.php";</script>'; 
    } else{
        echo '<script> alert("Intente nuevamente, usuario no registrado")
        window.location="../paginas/medicion.php";</script>'; 
    }     
}else{'<script> alert("Algun campo esta vacio");
    window.location="../paginas/medicion.php";
    </script>';
}
?>