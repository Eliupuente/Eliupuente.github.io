<?php 
//incluimos el menu
//include '../menu/index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Matriz de evaluación | Intrumentación</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.indicadores {
position: absolute;
  top: 120px;
  right: 0;
  width: 300px;
  height: 40px;
  margin-left:50px;
  margin-right:300px;
}
</style>
<!--Contenedor-->
<body style="background: white; margin-top:20px;">
<div class="container">
<!--Titulo-->
<h1 class="col-form-label-lg" for="input">Matriz de evaluación</h1>
<br><br><br>
<!--Tabla-->
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">Evidencia de aprendizaje</th>
      <th scope="col">%</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">Evaluación formativa de la competencia</th>
    </tr>
  </thead>
    
    <tbody>
    <tr>
      <th><input type="text" class="form-control" placeholder="Evidencia" 
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <td><input type="text" class="form-control" placeholder="Porcentaje total" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Material para evaluar" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
      <th><input type="text" class="form-control" placeholder="Evidencia" 
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <td><input type="text" class="form-control" placeholder="Porcentaje total" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Material para evaluar" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
      <th><input type="text" class="form-control" placeholder="Evidencia" 
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <td><input type="text" class="form-control" placeholder="Porcentaje total" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Material para evaluar" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
      <th><input type="text" class="form-control" placeholder="Evidencia" 
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <td><input type="text" class="form-control" placeholder="Porcentaje total" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    <td><input type="text" class="form-control" placeholder="Porcentaje" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control" placeholder="Material para evaluar" 
                  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    </tbody>
    <thead class="thead-dark">
    <tr>
      <th></th>
      <th scope="col">Total</th>
      <th scope="col"><a type="text" class="form-control"  
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <th scope="col"><a type="text" class="form-control"  
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <th scope="col"><a type="text" class="form-control"  
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <th scope="col"><a type="text" class="form-control"  
                  aria-label="Username" aria-describedby="basic-addon1"></th>
      <th></th>
    </tr>
  </thead>
</table>
<!--boton-->
<br><br>
<div class="float-right">
<a type="button" class="btn btn-dark" href="nuevo.php">Guardar</a>
<a type="button" class="btn btn-dark" href="">Cancelar</a>
</div>
<!--Fin de la pagina-->
</div>
</body>
    </html>