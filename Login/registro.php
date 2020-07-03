<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
	<title>SICSA+ | Registro de usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="estilologin.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_cardo">
<div class="d-flex justify-content-center form_container">


<form action="" method="post">



<div style="color: #FFFFFF;">
Usuario</div>
<div class="mt-4">
<div class="d-flex justify-content-center" style="color: #FFFFFF;">
L <div class="input-group mb-4 mr-3 ml-3">

<!--********************************VARIABLES********************************************************-->
<input type="text" class="form-control input_user" name="Usuarios" placeholder="Numero de control"> 



</div>@matehuala.tecnm.mx
</div>
<div class="d-flex justify-content-center " >
</div>
<div class="form-row">
    <div class="form-group col-md-6" >
      <label for="inputEmail4" style="color: #FFFFFF;">Escribe aqui tu contraseña</label>


<!--********************************VARIABLES********************************************************-->
<input type="password" class="form-control" id="inputPassword4" name="Contraseña" placeholder="Contraseña...">



    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"  style="color: #FFFFFF;">Confirmar contraseña</label>


<!--********************************VARIABLES********************************************************-->
<input type="password" class="form-control" id="inputPassword4" name="Rcontraseña" placeholder="Contraseña...">



    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" >


<!--********************************VARIABLES********************************************************-->
<label for="inputEmail4" style="color: #FFFFFF;">Puesto</label>
  <select name="Rol" class="custom-select">
<option selected>Selecciona tu puesto...</option>
<option value="Docente">Docente</option>
<option value="Jefe de departamento">Jefe de departamento</option>
<option value="Subdirector academico">Subdirector academico</option>



</select>
</div>
<div class="form-group col-md-6">


<!--********************************VARIABLES********************************************************-->
<label for="inputEmail4" style="color: #FFFFFF;">Departamento</label>
<select name="Demartamentos" class="custom-select">
  <option selected>Selecciona tu departamento...</option>
<option value="Centro de computo">Centro de computo</option>
<option value="Ciencias de la tierra">Ciencias de la tierra</option>
<option value="Administración">Administración</option>



</select>
</div></div>
    <div class="form-group col-md-6" >
      <label for="inputEmail4" style="color: #FFFFFF;">Nombre(s)</label>


<!--********************************VARIABLES********************************************************-->
<input type="text" class="form-control" id="inputPassword4" name="Nombres" placeholder="Nombre(s)">



    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4"  style="color: #FFFFFF;">Apellidos paterno</label>


<!--********************************VARIABLES********************************************************-->
<input type="text" class="form-control" id="inputPassword4" name="Apellido_Paterno" placeholder="Apellido paterno">



    </div>
    <div class="form-group  col-md-6">
    <label for="inputPassword4"  style="color: #FFFFFF;">Apellidos materno</label>


<!--********************************VARIABLES********************************************************-->
<input type="text" class="form-control" id="inputPassword4" name="Apellido_Materno" placeholder="Apellido materno">



    </div>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<div class="d-flex justify-content-center mt-3 ">


<!--********************************VARIABLES********************************************************-->
<a href="../index.php" class="btn btn-danger">Cancelar</a>



</div>
</div>
<div class="form-group col-md-6">
<div class="d-flex justify-content-center mt-3 ">


<!--********************************VARIABLES********************************************************-->
<input type="submit" name="submit" class="btn btn-primary">


</div>
</div>
</div>
</form>
<?php
		if(isset($_POST['submit'])){
			require("registrar.php");
		}
	?>
</div>
</div>
</div>
</body>
</html>