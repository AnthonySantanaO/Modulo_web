<?php
include 'conexion.php';
$id=$_GET['id'];
$sql=$conexion->query("SELECT * FROM proyeccion WHERE id_proyeccion='$id'");
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
        <h2 class="text-center text-socondary">Modificar proyección</h2>
        <input type="hidden" name="id" value="<?=$_GET ['id']  ?>">
        <?php
            include "../controlador/mod_pro.php";
            while($datos=$sql->fetch_object()){?>
                <div class="mb-1">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" value="<?=$datos->user?>">  
                </div>
                <div class="mb-1">
                    <label for="año_proyeccion" class="form-label">Año de la proyección</label>
                    <input type="text" class="form-control" name="año" value="<?=$datos->año_proyeccion?>">  
                </div>
                <div class="mb-2">
                    <label for="area_proyectada" class="form-label">Area proyectada para el cultivo</label>
                    <input type="integer" class="form-control" name="area" value="<?=$datos->area_proyectada?>">
                </div>
                <div class="mb-3">
                    <label for="cant_racim_proyect" class="form-label">Cantidad de racimos proyectada</label>
                    <input type="integer" class="form-control" name="racimo" value="<?=$datos->cant_racim_proyect?>">
                </div>
                <div class="mb-4">
                    <label for="precio_venta_proy" class="form-label">Precio-Venta proyectado</label>
                    <input type="double" class="form-control" name="precio" value="<?=$datos->precio_venta_proy?>">
                </div>
                <?php }
         ?>
        <button type="submit" class="btn btn-primary" name="modificar_proy" value="ok">Modificar</button>
    </form>
</body>
</html>