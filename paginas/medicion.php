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
            <a class="nav-link active" aria-current="page" href="#">Registro de mediciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="proyeccion.php">Registrar de proyeccion</a>
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
  <h2 class="text-center text-socondary">Registro de mediciones</h2>
        <?php
            include '../php/conexion.php';
            include '../controlador/registro_medicion.php';
        ?>
      <div class="mb-2">
          <label for="user" class="form-label">Usuario</label>
          <input type="text" class="form-control" name="usuario">
      </div>
      <div class="mb-2">
          <label for="año_medicion" class="form-label">Año de la medición</label>
          <input type="year" class="form-control" name="año">
      </div>
      <div class="mb-2">
          <label for="mes_medicion" class="form-label">Mes de la medición</label>
          <input type="integer" class="form-control" name="mes">
      </div>
      <div class="mb-2">
          <label for="area_cultivo" class="form-label">Area de cultivo medido</label>
          <input type="integer" class="form-control" name="area">
      </div>
      <div class="mb-2">
          <label for="altura_planta" class="form-label">Altura de la planta medida en cm</label>
          <input type="integer" class="form-control" name="altura">
      </div>  
      <div class="mb-2">
          <label for="humedad_clima	" class="form-label">Humedad del cultivo medido</label>
          <input type="integer" class="form-control" name="humedad">
      </div>  
      <div class="mb-2">
          <label for="ph_suelo" class="form-label">PH del suelo medido</label>
          <input type="decimal" class="form-control" name="suelo">
      </div>  
      <div class="mb-2">
          <label for="precio" class="form-label">Precio actual de comercialización por racimo de banano</label>
          <input type="double" class="form-control" name="precio">
      </div>  
      <div class="mb-2">
          <label for="cant_racimos" class="form-label">Cantidad de racimos en el cultivo medido</label>
          <input type="integer" class="form-control" name="racimos">
      </div>  
  <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto" name="registro_med" value="ok">Registar</button>
</form>
<div class="container-fluid row m-auto">
<?php 
        include "../php/conexion.php";
        include "../controlador/eliminar_med.php";
    ?>
<table class="table table-striped table-bordered table-responsive">
  <thead class="table table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Usuario</th>  
        <th scope="col">Año</th>
        <th scope="col">Mes</th>
        <th scope="col">Area</th>
        <th scope="col">Altura</th>
        <th scope="col">Humedad</th>
        <th scope="col">PH</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad de racimos</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
        include "../php/conexion.php";
        $sql=$conexion -> query( "SELECT * FROM medicion");
        while ($datos=$sql->fetch_object()){?>
        <tr>
            <td><?=$datos->idmedicion?></td>
            <td><?=$datos->user?></td>
            <td><?=$datos->año_medicion?></td>
            <td><?=$datos->mes_medicion?></td>
            <td><?=$datos->area_cultivo?></td>
            <td><?=$datos->altura_planta?></td>
            <td><?=$datos->humedad_clima?></td>
            <td><?=$datos->ph_suelo?></td>
            <td><?=$datos->precio?></td>
            <td><?=$datos->cant_racimos?></td>
            <td>
            <a href="../php/modificar_medicion.php?id=<?=$datos->idmedicion?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="medicion.php?id=<?= $datos->idmedicion?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-trash"></i></a>
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