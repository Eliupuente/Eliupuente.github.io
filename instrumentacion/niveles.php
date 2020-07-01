<?php 
//incluimos el menu
//include '../menu/index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Niveles de desempeño | Intrumentación</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<!--Contenedor-->
<body style="background: white; margin-top:20px;">
<div class="container">
<!--Titulo-->
<h1 class="col-form-label-lg" for="input">Niveles de desempeño</h1>
<br><br><br>
<!--Tabla-->
<table class="table">
  <thead class="thead-light ">
    <tr>
      <th scope="col">Desempeño</th>
      <th scope="col">Nivel</th>
      <th scope="col">Indicadores</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Competencia alcanzada</th>
      <td>Excelente</td>
      <td> <input type="text" class="form-control" placeholder="Escribe tus indicadores" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td>95-100</td>
    </tr>
    <tr>
      <th scope="row">Competencia alcanzada</th>
      <td>Notable</td>
      <td><input type="text" class="form-control" placeholder="Escribe tus indicadores" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td>85-94</td>
    </tr>
    <tr>
      <th scope="row">Competencia alcanzada</th>
      <td>Bueno</td>
      <td><input type="text" class="form-control" placeholder="Escribe tus indicadores" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td>75-74</td>
    </tr>
    <tr>
      <th scope="row">Competencia alcanzada</th>
      <td>Suficiente</td>
      <td><input type="text" class="form-control" placeholder="Escribe tus indicadores" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td>70-74</td>
    </tr>
    <tr>
      <th scope="row">Competencia no alcanzada</th>
      <td>Insufiiente</td>
      <td><input type="text" class="form-control" placeholder="Escribe tus indicadores" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td>0-69</td>
    </tr>
  </tbody>
</table>
<!--boton-->
<br><br>
<div class="float-right">
<a type="button" class="btn btn-dark" href="matriz.php">Continuar</a>
</div>
<!--Fin de la pagina-->
</div>
</body>
    </html>