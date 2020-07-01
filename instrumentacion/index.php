<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Instrumentación | Docente</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<!--Contenedor-->
<body style="background: white">
<!--cuadro de titulo-->
<div class="position-sticky">
<nav class="navbar" 
style=" margin:1px; font-size: 150%;">
<a class="navbar-brand">
    <img src="css/icon.png" width="30" height="30" class="d-inline-block" alt="">
    Intrumentación del curso.
  </a>
  
</nav>
<!--cuadro de la lista-->
<nav class="navbar navbar-light bg-light" style=" margin:1px; font-size: 150%;">
  <a class="navbar-brand">
    <a type="button" href="nuevo.php" class="btn btn-primary"> + Nuevo</a>
  </a>
  <!--botones de opciones-->
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-primary">Compartir</button>
  <button type="button" class="btn btn-primary">Imprimir</button>
  <button type="button" class="btn btn-primary">Copiar</button>
  <button type="button" class="btn btn-primary">PDF</button>
  <button type="button" class="btn btn-primary">CSV</button>
  </div>
  <!--barra de busqueda-->
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Buscar lista" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <!--boton de filtro-->
  <div class="btn-group" role="group">
<button id="btnGroupDrop1" type="button" 
class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Filtrar</button>
</div>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" >por fecha</a>
      <a class="dropdown-item" >por materia</a>
      <a class="dropdown-item" >por carrera</a>
</div>
</nav></div>
  <!--inicio de tabla.-->
  <table class="table">
  <thead>
    <tr>
      <th scope="col" class=" btn-info dropdown-toggle">Periodo</th>
      <th scope="col" class=" btn-info dropdown-toggle">Materia</th>
      <th scope="col" class=" btn-info dropdown-toggle">Docente</th>
      <th scope="col" class=" btn-info dropdown-toggle">Carrera</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Enero-Junio</th>
      <td>Matematicas</td>
      <td>Mercedes</td>
      <td>ISC</td>
    </tr>
    <tr>
      <th>Enero-Junio</th>
      <td>Calculo</td>
      <td>Mercedes</td>
      <td>ISC</td>
    </tr>
    <tr>
      <th>Enero-Junio</th>
      <td>POO</td>
      <td>Luciano</td>
      <td>ISC</td>
    </tr>
  </tbody>
</table>
<br><br>
  <!--Boton de paginas.-->
  <div class="float-right">
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-dark"><</button>
  <button type="button" class="btn btn-dark">1</button>
  <button type="button" class="btn btn-dark">></button>
  </div></div>
</body>
</html>