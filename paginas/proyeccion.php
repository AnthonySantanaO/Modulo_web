<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f5f8df1d54.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿ESTA SEGURO DE ELIMINAR ESTE REGISTRO?");
            return respuesta
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<header class="header">
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Registro de Proyección</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="medicion.php">Registrar  mediciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="visualizar.php">Visualizar datos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../php/cerrar_sesion.php">Cerrar Sesión</a>
        </li>
    </ul>
</header> 
<div class="container_fluid row">
<form method="POST" class="col-4 p-3 m-auto">  
    <h2 class="text-center text-socondary">Registro proyección</h2>
        <?php
            include "../php/conexion.php";
            include "../controlador/registro_proyeccion.php";
        ?>
    <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario">
    </div>
    <div class="mb-3">
        <label for="año_proyeccion" class="form-label">Año de la proyección</label>
        <input type="year('Y')" class="form-control" name="año">
    </div>
    <div class="mb-3">
        <label for="area_proyectada" class="form-label">Area proyectada para el cultivo</label>
        <input type="integer" class="form-control" name="area">
    </div>
    <div class="mb-3">
        <label for="cant_racim_proyect" class="form-label">Cantidad de racimos proyectada</label>
        <input type="integer" class="form-control" name="racimo">
    </div>
    <div class="mb-3">
        <label for="precio_venta_proy" class="form-label">Precio-Venta proyectado</label>
        <input type="double" class="form-control" name="precio">
    </div>
    <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto" name="registro_proy" value="ok">Registrar</button>
</form>
<div class="container-fluid row m-auto">
    <?php 
        include "../php/conexion.php";
        include "../controlador/eliminar_pro.php";
    ?>
<table class="table table-striped table-bordered table-responsive">
  <thead class="table table-dark">
    <tr>
        <th scope="col">ID de la proyección</th>
        <th scope="col">Usuario</th>  
        <th scope="col">Año de la proyección</th>
        <th scope="col">Area proyectada para el cultivo</th>
        <th scope="col">Cantidad de racimos proyectada</th>
        <th scope="col">Precio-Venta proyectado</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
        include "../php/conexion.php";
        $sql=$conexion -> query( "SELECT * FROM proyeccion");
        while ($datos=$sql->fetch_object()){?>
        <tr>
            <td><?=$datos->id_proyeccion?></td>
            <td><?=$datos->user?></td>
            <td><?=$datos->año_proyeccion?></td>
            <td><?=$datos->area_proyectada?></td>
            <td><?=$datos->cant_racim_proyect?></td>
            <td><?=$datos->precio_venta_proy?></td>
            <td>
            <a href="../php/modificar_proyeccion.php?id=<?= $datos->id_proyeccion?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="proyeccion.php?id=<?= $datos->id_proyeccion?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
       <?php }
    ?>  
  </tbody>
</table>
</div>
</div>  
</body>
</html>