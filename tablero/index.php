<?php
    $self = $_SERVER['PHP_SELF'];
    $direccionip = ("$_SERVER[REMOTE_ADDR]");
    include ('../Login/coneccionbd.php');
/************************Tabla de usuarios*******************************************/
    $query = "SELECT * FROM usuarios ";
     $result = mysqli_query($mysqli,$query) or die('<p class="error">Ha ocurrido un error inesperado</p>');
     while ($row = mysqli_fetch_array($result))
    {   
    $Nombres = $row['Nombres'];
    $Apellido_Paterno = $row['Apellido_Paterno'];
    $Apellido_Materno = $row['Apellido_Materno'];
    $Demartamento = $row['Demartamento'];
    }
  /*****************************Tabla de Materias**************************************/
  $consultamaterias = "SELECT COUNT(Id_Materia) total FROM materia; ";
     $resultadoMateria = mysqli_query($mysqli,$consultamaterias) or die('<p class="error">Ha ocurrido un error inesperado</p>');
     $fila = mysqli_fetch_assoc($resultadoMateria);
      /*****************************Tabla de Planeaciones**************************************/
  $consultaPlaneaciones = "SELECT COUNT(Id_Planeacion) total FROM planeacion; ";
  $resultadoPlaneacion = mysqli_query($mysqli,$consultaPlaneaciones) or die('<p class="error">Ha ocurrido un error inesperado</p>');
  $filaplaneacion = mysqli_fetch_assoc($resultadoPlaneacion);
 /*****************************Tabla de Planeaciones**************************************/
 $consultainstrumentacion = "SELECT COUNT(Id_Instrumentacion) total FROM instrumentacion; ";
 $resultadoinstrumentacion = mysqli_query($mysqli,$consultainstrumentacion) or die('<p class="error">Ha ocurrido un error inesperado</p>');
 $filainstrumento = mysqli_fetch_assoc($resultadoinstrumentacion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Tablreo | Docente</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../menuEder/CSS/estilomenu.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<!--Contenedor-->
<body >
  <div class="card-body text-dark" style="padding: 1.2rem;   flex:  1 auto;">
  <!-- Content here -->
  <div class="float-right">

  <div class="btn-group open">
  <img src="../tablero/camara/upload/usuario.jpg" 
  style="	height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
  class="btn card-img-top dropdown-toggle" data-toggle="dropdown">
  <span class="" title="Toggle dropdown menu"></span>
  <ul class="dropdown-menu">
    <li><a href="camara/funcioncamara.html"><i class="fas fa-camera "></i> Tomar foto</a></li>
  </ul>
  </div>
  
</div>
<center>
<p  class="text-uppercase">Tablero del Docente</p>
<h6>Bienvenido <?=" ".$Nombres." ".$Apellido_Paterno." ".$Apellido_Materno?> <p class="font-weight-bold">
</p></h6>
<p class="font-italic">Departamento de <?=" ".$Demartamento." "?> </p>
</center>
</div>
<br><br><br><br><br><br>
<div class="card-deck" style="    
flex-flow: row wrap;
margin-right: 15px;
margin-left: 15px;">

<div class="card text-white bg-primary " style="max-width:30rem;">
  <div class="card-header"><?= $fila['total']?></div>
  <div class="card-body">
    <h5 class="card-title">Materias</h5>
   </div>
  </div>
  <div class="card text-white bg-dark " style="max-width: 30rem;">
  <div class="card-header"><?= $filaplaneacion['total']?></div>
  <div class="card-body">
    <h5 class="card-title">Pladeaciones</h5>
   </div>
   </div>

<div class="card text-white bg-secondary " style="max-width: 30rem;">
  <div class="card-header"><?= $filainstrumento['total']?></div>
  <div class="card-body">
    <h5 class="card-title">Instrumentaciones</h5>
   </div>
  </div>
  </div>
  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>