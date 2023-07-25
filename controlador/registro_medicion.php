<?php
include '../php/conexion.php';
if(!empty($_POST['registro_med'])){
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
        $sql = $conexion -> query("INSERT INTO medicion (user,año_medicion,mes_medicion,area_cultivo,altura_planta,humedad_clima,ph_suelo,precio,cant_racimos)
        VALUES ('$user_m',$año_m,$mes_m,$area_m,$altura_m,$humedad_m,$ph_m,$precio_m,$racimo_m)");
        if($sql == 1){
            echo '<script> alert("Se ha registrado exitosamente")</script>';
        }else{
            echo '<script> alert("Intente nuevamente, usuario no registrado")</script>'; 
        }
    }else{
        echo '<div class="alert=danger">Algun campo esta vacio</div>';
        mysqli_close($conexion);
    }
}
?>