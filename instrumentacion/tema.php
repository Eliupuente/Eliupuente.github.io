<?php 
//incluimos el menu
//include '../menu/index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Nuevo Tema | Intrumentación</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<!--Estilo del circulo numerico-->
<style>
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}
</style>




<!--Contenedor-->
<body style="background: white; margin-top:20px;">
<div class="container">
<!--Numero de tema-->
<label class="col-form-label-lg" for="input">Tema numero:</label>
<button type="button" class="btn btn-primary btn-circle btn-xl">1</button>
<div class="float-right">
<a>Horas teórico-práctica:</a>
<button type="button" class="btn btn-secondary">3 - 2 - 5</button>
</div>
<!--Descripcion-->
<br><br>
<form>
  <div class="form-group row">
    <label class="col-form-label-lg" for="input">Descripción</label>
    <div class="col-sm-10">
      <input type="text"  placeholder="Escribir descripcion de la competencia a tratar" class="form-control" id="input">
    </div>
  </div>






<!--Menu para la tabla-->
<!--Cuerpo-->
<ul class="nav nav-tabs" >
<!--Temas-->
  <li><a class="nav-link" data-toggle="tab" href="#Temas">
  Temas y subtemas</a></li>
<!--aprendizaje-->
  <li><a class="nav-link" data-toggle="tab" href="#aprendizaje">
  Actividades de aprendizaje</a>  </li>
<!--enseñanza-->
  <li><a class="nav-link" data-toggle="tab" href="#enseñanza">
  Actividades de enseñanza</a></li>
<!--competencias-->
    <li><a class="nav-link" data-toggle="tab" href="#competencias">
    Desarrollo de competencias genéricas</a></li>
<!--Análisis por competencias específicas-->
    <li><a class="nav-link" data-toggle="tab" href="#análisis">
    Análisis</a></li>
 <!--Fin del menu-->   
    </ul>
<div class="tab-content">
<!--Inicio de las opciones-->








<!--Fuentes de temas-->
<div class="tab-pane fade" id="Temas">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Temas y subtemas para desarrollar la competencia específica:</p> 
    Selecciona los temas y subtemas a desarrollar en esta competencia, 
    aqui te mostramos unas sugerencias, en caso de que quieras agregar los tuyas
    puedes hacerlo en el recuadro de agregar nuevas.<br><br>
    <br>
<!--Sugerencias-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sugerencias</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>1 Técnicas de conteo</td>
    </tr>
    <tr>
      <td>1.1 Principio aditivo.</td>
    </tr>
  </tbody>
</table>    
    </div>
  </div>
<!--Operaciones-->
  <div class="card">
    <div class="card-body">
    <div class="btn-group-vertical">
    <br>
    <input type="text" class="form-control" placeholder="Agregar nuevo" aria-label="Username" aria-describedby="basic-addon1">
    <br>
    <button type="button" class="btn btn-secondary">Agregar</button>
    <br>
    <button type="button" class="btn btn-secondary">Quitar</button>
</div>
    </div>
  </div>
<!--Temas y subtemas-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Temas y subtemas seleccionadas</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td> </td>
    </tr>
    </tbody>
</table>    
    </div>
  </div>
</div>
</div>
</div>








<!--Actividades de aprendizaje-->
<div class="tab-pane fade" id="aprendizaje">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Actividades de aprendizaje:</p> 
    Selecciona las actividades de aprendizaje a desarrollar en esta competencia, 
    aqui te mostramos unas sugerencias, en caso de que quieras agregar los tuyas
    puedes hacerlo en el recuadro de agregar nuevas.<br><br>
    <br>
<!--Sugerencias-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sugerencias</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Investigar en diferentes fuentes los principios aditivo y multiplicativo</td>
    </tr>
    <tr>
      <td>Resolver en grupos de trabajo problemas que involucren los principios aditivo y multiplicativo</td>
    </tr>
  </tbody>
</table>    
    </div>
  </div>
<!--Operaciones-->
  <div class="card">
    <div class="card-body">
    <div class="btn-group-vertical">
    <br>
    <input type="text" class="form-control" placeholder="Agregar nuevo" aria-label="Username" aria-describedby="basic-addon1">
    <br>
    <button type="button" class="btn btn-secondary">Agregar</button>
    <br>
    <button type="button" class="btn btn-secondary">Quitar</button>
</div>
    </div>
  </div>
<!--actividades de aprendizaje-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Actividades de aprendizaje seleccionadas</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td> </td>
    </tr>
    </tbody>
</table>    
    </div>
  </div>
</div>
</div>
</div>





<!--Actividades de enseñanza-->
<div class="tab-pane fade" id="enseñanza">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Actividades de enseñanza:</p> 
    Selecciona las actividades de enseñanza a desarrollar en esta competencia, 
    aqui te mostramos unas sugerencias, en caso de que quieras agregar los tuyas
    puedes hacerlo en el recuadro de agregar nuevas.<br><br>
    <br>
<!--Sugerencias-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sugerencias</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Presentar diferentes fuentes de consulta para consultar temas de aditivo, multiplicativo, factorial, permutaciones, combinaciones diagrama de árbol y binomio.</td>
    </tr>
    <tr>
      <td>Resolver ejercicios en pizarrón asi como por Excel </td>
    </tr>
  </tbody>
</table>    
    </div>
  </div>
<!--Operaciones-->
  <div class="card">
    <div class="card-body">
    <div class="btn-group-vertical">
    <br>
    <input type="text" class="form-control" placeholder="Agregar nuevo" aria-label="Username" aria-describedby="basic-addon1">
    <br>
    <button type="button" class="btn btn-secondary">Agregar</button>
    <br>
    <button type="button" class="btn btn-secondary">Quitar</button>
</div>
    </div>
  </div>
<!--actividades de enseñanza-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Actividades de enseñanza seleccionadas</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td> </td>
    </tr>
    </tbody>
</table>    
    </div>
  </div>
</div>
</div>
</div> 








<!--Desarrollo de competencias genéricas-->
<div class="tab-pane fade" id="competencias">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Desarrollo de competencias genéricas:</p> 
    Selecciona las competencias genéricas a desarrollar en esta competencia, 
    aqui te mostramos unas sugerencias, en caso de que quieras agregar los tuyas
    puedes hacerlo en el recuadro de agregar nuevas.<br><br>
    <br>
<!--Sugerencias-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sugerencias</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Conocimientos básicos de la carrera</td>
    </tr>
    <tr>
      <td>Habilidades básicas de manejo de la computadora </td>
    </tr>
  </tbody>
</table>    
    </div>
  </div>
<!--Operaciones-->
  <div class="card">
    <div class="card-body">
    <div class="btn-group-vertical">
    <br>
    <input type="text" class="form-control" placeholder="Agregar nuevo" aria-label="Username" aria-describedby="basic-addon1">
    <br>
    <button type="button" class="btn btn-secondary">Agregar</button>
    <br>
    <button type="button" class="btn btn-secondary">Quitar</button>
</div>
    </div>
  </div>
<!--competencias genéricas-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Competencias genéricas seleccionadas</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td> </td>
    </tr>
    </tbody>
</table>    
    </div>
  </div>
</div>
</div>
</div>





<!--análisis-->
<div class="tab-pane fade" id="análisis">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Análisis por competencias específicas:</p> 
    Esta es la tabla del analisis resultado de sus selecciones para las competencias de los temas a desarrollar.
    <br><br>
    <br>
<!--Operaciones-->
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Temas y subtemas para desarrollar la competencia específica</th>
      <th scope="col">Actividades de aprendizaje</th>
      <th scope="col">Actividades de enseñanza</th>
      <th scope="col">Desarrollo de competencias genéricas</th>
      <th scope="col">Horas teórico-práctica</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
    <br>
    <div class="float-right">
    <div class="btn-group">
    <br>
    <button type="button" class="btn btn-secondary">Cancelar</button>
    <br>
    <a type="button" class="btn btn-secondary" href="alcance.php">Guardar</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--Fin de la pagina-->
</div>
</body>
    </html>
