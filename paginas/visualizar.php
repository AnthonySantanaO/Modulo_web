<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f5f8df1d54.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<header class="header">
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Visualizar datos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="proyeccion.php">Registrar de proyeccion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="medicion.php">Registrar  mediciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../php/cerrar_sesion.php">Cerrar Sesión</a>
        </li>
    </ul>
</header>     
<div class="container_buscar row m-auto mb-2">
    <!--Buscador-->
    <form id="buscar" action="php/login.php" method="POST" class="formulario_busqueda col-4 p-3 m-auto">
        <h2 class="text-center">Ingrase su usuario para hacer la busqueda</h2>
        <input class="form-control text-center mb-2" type="text" placeholder="Usuario" name="user">
        <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto mb-2" name="buscador" value="ok">Buscar</button>
    </form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>