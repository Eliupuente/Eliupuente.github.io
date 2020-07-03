
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
<!--Periodo-->
</div>
</div>
</div>
<!--Terminan los div-->
<!--Cuerpo-->
    <ul class="nav nav-tabs" >
<!--Materia-->
  <li><a class="nav-link" data-toggle="tab" href="#materia">
    Información general
    </a></li>
<!--Caracterización-->
  <li><a class="nav-link" data-toggle="tab" href="#Caracterización">
    Grupos</a>  </li>
<!--Intención-->
  <li><a class="nav-link" data-toggle="tab" href="#Calendarización">
    Materias</a></li>

    </ul>
<div class="tab-content">
<br>
<div class="float-right">
<a type="button" class="btn btn-primary btn-lg " href="index.php">Crear PDF</a>
</div>

<!--Materia--> 
<div class="tab-pane fade" id="materia">
<div class="container">
<div class="float-none">
<br>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Departamento academico" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Periodo 1" aria-label="Search">
  <input class="form-control mr-sm-2" type="search" placeholder="Periodo 2" aria-label="Search">
</div> 
    <p class="font-weight-bold">Nombre del departamento academico:</p> 
    Ingenieria en sistemas
    <p class="font-weight-bold">Periodo academico:</p>
    01/feb/2020 - 15/jun/2020
    <br>
</div>
</div>



<!--Caracterización-->
<div class="tab-pane fade" id="Caracterización">
<div class="container">
<div class="float-none">
<br>
<form class="form-inline">
<p class="font-weight-bold">Numero de grupos atendidos:</p>
  <input class="form-control mr-sm-2" type="search" placeholder="No de grupos" aria-label="Search">
    </form>
<form class="form-inline">
<p class="font-weight-bold">Numero de asignaturas distintas:</p>
  <input class="form-control mr-sm-2" type="search" placeholder="No de asignaturas" aria-label="Search">
    </form>
</div> 
    <br>
    <p class="font-weight-bold">Numero de grupos atendidos:</p>
    <p class="text-justify"> 5 </p>
    <p class="font-weight-bold">Numero de asignaturas distintas:</p>
    <p class="text-justify"> 
    3
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
    <p class="font-weight-bold">Llena la siguiente tabla</p>
    <p class="text-justify"> 
    los aspectos con los cuales se llena la table se encuentran en la parte inferior
    </p><br>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Asignatura</th>
      <th scope="col">Carrera</th>
      <th scope="col">A</th>
      <th scope="col">B_O</th>
      <th scope="col">B_R</th>
      <th scope="col">B_EX</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
      <th scope="col">F</th>
      <th scope="col">G</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
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
      <th scope="row"></th>
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
      <th scope="row"></th>
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
      <th scope="row"></th>
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
      <th scope="row">Totales</th>
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

<p class="font-weight-bold">A=<a>TOTAL DE ESTUDIANTES POR MATERIA</a></p>
    <p class="font-weight-bold">B=<a>No. DE ESTUDIANTES ACREDITADOS (O= ORDINARIO, R= REGULARIZACIÓN, EX= EXTRAORDINARIO)</a></p>
    <p class="font-weight-bold">c=<a>% DE ESTUDIANTES ACREDITADOS</a></p>
    <p class="font-weight-bold">D=<a>No. DE ESTUDIANTES NO ACREDITADOS </a></p>
    <p class="font-weight-bold">E=<a>% DE ESTUDIANTES NO ACREDITADOS</a></p>
    <p class="font-weight-bold">F=<a>No. DE ESTUDIANTES QUE DESERTARON DURANTE EL SEMESTRE EN LA MATERIA</a></p>
    <p class="font-weight-bold">G=<a>% DE ESTUDIANTES QUE DESERTARON EN LA MATERIA</a></p>
    <br>
    <p class="text-justify"> NOTAS:<br>
1.	Los estudiantes que se incluirán en la columna D son todos los estudiantes no acreditados incluyendo los desertores.<br>
a.	Entendiendo como estudiante desertor al que toma la decisión de no presentar exámenes de regularización o extraordinarios aun teniendo derecho a ellos.<br>
2.	Este registro deberá de acompañarse con sus respectivos instrumentos de evaluación y  listas de calificaciones que avalen los datos aquí presentados.<br>
</p>
</div>
</div>
<!--Aqui termina las acciones.-->
</div>
<!--Esto se debe eliminar.-->
<center>
<br><br><br>
<h4>Por favor llena lo que se te pide</h4>
<h6>(preste atencion a las indicaciones)</h6>
</center>
<br><br><br>
<!--Pie de pagina de abajo-->
<div class="card">
<div class="card-header">
<!--Temas-->
  
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
