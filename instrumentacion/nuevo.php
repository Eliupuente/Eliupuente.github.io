<?php 
//incluimos el menu
//include '../menu/index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Instrumentación | Docente</title>
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
<body style="background: white">
<!--Pie de pagina de arriba-->
<div class="card">
<div class="card-header">
<!--Titulos-->
  <nav class="navbar navbar-light bg-light" 
  style=" margin:1px; border: black 2px solid; font-size: 150%;">
  <a class="navbar-brand">
  <img src="css/logo.png" width="110" height="110"class="d-inline-block align-top" >  
  <center>  
    TECNOLÓGICO NACIONAL DE MÉXICO 
    <br>INSTITUTO TECNOLÓGICO DE MATEHUALA
    <br>SUBDIRECCIÓN ACADÉMICA
    <br>INSTRUMENTACIÓN DIDÁCTICA PARA LA FORMACIÓN Y DESARROLLO DE COMPETENCIAS PROFESIONALES    
    </a></center></nav>
<!--Periodo-->
<div class="float-right">
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Periodo" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Actualizar</button>
    </form>
</div>
</div>
</div>
<!--Terminan los div-->
<!--Cuerpo-->
    <ul class="nav nav-tabs" >
<!--Materia-->
  <li><a class="nav-link" data-toggle="tab" href="#materia">
    Materia</a></li>
<!--Caracterización-->
  <li><a class="nav-link" data-toggle="tab" href="#Caracterización">
    Caracterización</a>  </li>
<!--Intención-->
  <li><a class="nav-link" data-toggle="tab" href="#contact">
    Intención didáctica</a></li>
<!--Competencias-->
    <li><a class="nav-link" data-toggle="tab" href="#Competencias">
    Competencias</a></li>
<!--Fuentes de información-->
<li><a class="nav-link" data-toggle="tab" href="#Fuentes">
Fuentes de información</a></li>
<!--Apoyos didácticos-->
<li><a class="nav-link" data-toggle="tab" href="#Apoyos">
Apoyos didácticos</a></li>
<!--Calendarización de evaluación en semanas -->
<li><a class="nav-link" data-toggle="tab" href="#Calendarización">
Calendarización</a></li>
    </ul>
<div class="tab-content">
<br>
<div class="float-right">
<a type="button" class="btn btn-primary btn-lg " href="index.php">Guardar Instrumentación</a>
</div>

<!--Materia--> 
<div class="tab-pane fade" id="materia">
<div class="container">
<div class="float-none">
<br>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Materia" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
</div> 
    <p class="font-weight-bold">Nombre de la asignatura:</p> 
    Probabilidad y Estadística
    <p class="font-weight-bold">Plan de Estudios:</p>
    Ing. En sistemas computacionales
    <p class="font-weight-bold">Clave de la asignatura:</p>
    AEF-1052
    <p class="font-weight-bold">Horas teoría – horas prácticas – créditos:</p>
    3 - 2 - 5
    <br>
</div>
</div>



<!--Caracterización-->
<div class="tab-pane fade" id="Caracterización">
<div class="container">
<div class="float-none">
<br>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Materia" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
</div> 
    <br>
    <p class="font-weight-bold">Caracterización de la asignatura:</p>
    <p class="text-justify"> 
    Esta asignatura aporta al perfil del egresado los conocimientos matemáticos
    adquiridos en esta materia proveen al futuro profesionista las competencias 
    que le permitan entender, aplicar y desarrollar modelos matemáticos utilizando 
    técnicas de probabilidad y estadística, para el análisis de información y toma 
    de decisiones en las diferentes áreas de las ciencias computacionales.
    </p><br>
</div>
</div>




<!--Intención-->
<div class="tab-pane fade" id="contact">
<div class="container">
<div class="float-none">
<br>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Materia" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
</div> 
    <br>
    <p class="font-weight-bold">Intención didáctica:</p>
    <p class="text-justify"> 
    La asignatura se encuentra dividida en cinco unidades. Las dos primeras enfocadas 
    a probabilidad y las tres siguientes a estadística.
    </p><br>
</div>
</div>




<!--Competencias-->
<div class="tab-pane fade" id="Competencias">
<div class="container">
<div class="float-none">
<br>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Materia" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
</div> 
    <br>
    <p class="font-weight-bold">Competencias de la asignatura:</p>
    <p class="text-justify"> 
    Seleccionar modelos probabilísticos, aplicar cálculos de inferencia estadística 
    sobre datos y desarrollar modelos para la toma de decisiones en sistemas con 
    componentes aleatorios.
    </p><br>
</div>
</div>



<!--Fuentes de información-->
<div class="tab-pane fade" id="Fuentes">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Fuentes de información:</p> 
    Selecciona las fuentes de información usadas para tu instrumentacoión, 
    aqui te mostramos unas sugerencias, en caso de que quieras agreagr las tuyas
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
      <td>Devore, J. L. (2012) Probabilidad y estadística para ingenierías y ciencia. (8ª. ed.) México : Cengage Learning.</td>
    </tr>
    <tr>
      <td>Hines, W. (2009) Probabilidad y estadística para ingeniería (4ª. ed.) México : CECSA : Grupo Editorial Patria.</td>
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
<!--fuentes de informacion-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fuentes seleccionadas</th>
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


<!--Apoyos didácticos-->
<div class="tab-pane fade" id="Apoyos">
<div class="container">
<div class="float-none">
<br>
 </div> 
    <p class="font-weight-bold">Apoyos didácticos:</p> 
    Selecciona tus materiales de apoyo que usaras para tu instrumentacoión, 
    aqui te mostramos unas sugerencias, en caso de que quieras agreagr las tuyas
    puedes hacerlo en el recuadro de agregar nuevas.<br><br>
    <br>
<!--Sugerencias-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <td><th scope="col">Sugerencias</th></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><th scope="col">Pintarrón</th></td>
    </tr>
    <tr>
      <td><th scope="col">Plumones para pintarrón</th></td>
    </tr>
    <tr>
      <td><th scope="col">Equipo de Proyección por computadora</th></td>
    </tr>
    <tr>
      <td><th scope="col">Calculadora</th></td>
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
<!--fuentes de informacion-->
<div class="card">
    <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Apoyos seleccionadas</th>
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
<!--Calendarización de evaluación en semanas -->
<div class="tab-pane fade" id="Calendarización">
<div class="container">
<div class="float-none">
<br>
</div> 
    <br>
    <p class="font-weight-bold">Calendarización de evaluación en semanas</p>
    <p class="text-justify"> 
    Selecciona la semana en la tabla para agregar una evaluacion por medio del boton debajo de la tabla.
    </p><br>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Semana</th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">7</th>
      <th scope="col">8</th>
      <th scope="col">9</th>
      <th scope="col">10</th>
      <th scope="col">11</th>
      <th scope="col">12</th>
      <th scope="col">13</th>
      <th scope="col">14</th>
      <th scope="col">15</th>
      <th scope="col">16</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">TP</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">TR</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">SD</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<br>

<div class="float-right">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Añadir evento a la semana
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">ED= evaluación diagnóstica</a>
    <a class="dropdown-item" href="#">EFn= evaluación formativa (competencia especifica n)</a>
    <a class="dropdown-item" href="#">ES= evaluación sumativa</a>
    <a class="dropdown-item" href="#">SDn= seguimiento departamental</a>
    <a class="dropdown-item" >Selecciona Evaluación </a>

  </div>
</div>
</div>

    <p class="font-weight-bold">TP=<a>tiempo planeado</a></p>
    <p class="font-weight-bold">TR=<a>tiempo real</a></p>
    <p class="font-weight-bold">SD=<a>seguimiento departamental</a></p>
    <br>
</div>
</div>
<!--Aqui termina las acciones.-->
</div>
<!--Esto se debe eliminar.-->
<center>
<br><br><br>
<h4>Selecciona la materia.</h4>
<h6>(Este se esconde despues de elegir la materia)</h6>
</center>
<br><br><br>
<!--Pie de pagina de abajo-->
<div class="card">
<div class="card-header">
<!--Temas-->
  <nav class="navbar navbar-light bg-light" 
  style=" margin:1px; border: black 2px solid; font-size: 150%;">
  <p>Temas
  <br>
  <div class="btn-group btn-group-toggle" data-toggle="buttons"><p>
  <button type="button" class="btn btn-primary btn-lg ">1</button>
  <button type="button" class="btn btn-primary btn-lg ">2</button>
  <button type="button" class="btn btn-primary btn-lg ">3</button>
  <button type="button" class="btn btn-primary btn-lg ">4</button>
  <button type="button" class="btn btn-primary btn-lg ">5</button>
  <a type="button" class="btn btn-primary btn-lg " href="tema.php">+</a>
  </div>
</nav>
</div>
</div>
<!--fecha de creacion-->
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Fecha de elaboración:</h5>
      <p class="card-text">Lunes 1/Junio/2020</p>
    </div>
  </div>
<!--nombre del docente-->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">(Nombre del Docente)</h5>
      <p class="card-text">Docente del área de Sistemas y Computación</p>
    </div>
  </div>
<!--nombre del jefe-->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">(Nombre del Jefe de departamento)</h5>
      <p class="card-text">Jefa de Departamento de Sistemas y Computación</p>
    </div>
  </div>
</div>
    </body>
    </html>
