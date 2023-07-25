<?php
include '../php/conexion.php';
$id=$_GET['id'];
$sql=$conexion->query("SELECT * FROM medicion WHERE idmedicion='$id'");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">  
        <h2 class="text-center text-socondary">Modificar medición</h2>
        <input type="hidden" name="id" value="<?=$_GET ['id']  ?>">
        <?php
            include '../php/conexion.php';
            include '../controlador/mod_medi.php';
            while($datos = $sql->fetch_object()){?>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" value="<?=$datos->user?>" >
                </div>
                <div class="mb-3">
                    <label for="año_medicion" class="form-label">Año de la medición</label>
                    <input type="year" class="form-control" name="año" value="<?=$datos->año_medicion?>">
                </div>
                <div class="mb-3">
                    <label for="mes_medicion" class="form-label">Mes de la medición</label>
                    <input type="integer" class="form-control" name="mes" value="<?=$datos->mes_medicion?>">
                </div>
                <div class="mb-3">
                    <label for="area_cultivo" class="form-label">Area de cultivo medido</label>
                    <input type="integer" class="form-control" name="area" value="<?=$datos->area_cultivo?>">
                </div>
                <div class="mb-3">
                    <label for="altura_planta" class="form-label">Altura de la planta medida en cm</label>
                    <input type="integer" class="form-control" name="altura" value="<?=$datos->altura_planta?>">
                </div>  
                <div class="mb-3">
                    <label for="humedad_clima	" class="form-label">Humedad del cultivo medido</label>
                    <input type="integer" class="form-control" name="humedad" value="<?=$datos->humedad_clima?>">
                </div>  
                <div class="mb-3">
                    <label for="ph_suelo" class="form-label">PH del suelo medido</label>
                    <input type="decimal" class="form-control" name="suelo" value="<?=$datos->ph_suelo?>">
                </div>  
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio actual de comercialización por racimo de banano</label>
                    <input type="double" class="form-control" name="precio" value="<?=$datos->precio?>">
                </div>  
                <div class="mb-3">
                    <label for="cant_racimos" class="form-label">Cantidad de racimos en el cultivo medido</label>
                    <input type="integer" class="form-control" name="racimos" value="<?=$datos->cant_racimos?>">
                </div>  
                <?php }
                ?>
        <button type="submit" class="btn btn-primary" name="modificar_medicion" value="ok">Modificar</button>
    </form>
</body>
</html>