<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Estilos ---------->
<!DOCTYPE html>
<html> 
<head>
	<title>Sicsa | Inicio de seción</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../instrumentacion/Login/estilologin.css">
</head>
<!--Inicio del codigo-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" style="height: 400px; width: 400px;">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../instrumentacion/MenuEder/css/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					
					
					
				<form action="Login/valida.php" method="post">
					
					
					
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>


<!--********************************VARIABLES********************************************************-->
<input type="text" name="Usuarios" class="form-control input_user" 
		value="" placeholder="Correo">
						
						
						
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>


<!--********************************VARIABLES********************************************************-->
<input type="password" name="Contraseña" class="form-control input_pass" 
		value="" placeholder="Contraseña">



						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">


<!--********************************VARIABLES********************************************************-->
<input type="checkbox" class="custom-control-input" 
		id="customControlInline">
							
							
							
								<label class="custom-control-label" for="customControlInline" style="color: #FFFFFF;">Recuerdame</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">


<!--********************************VARIABLES********************************************************-->
<button name="button" type="submit" class="btn login_btn">Acceder</button>



				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links" style="color: #FFFFFF;">
						No tienes cuenta? 
						
<!--********************************VARIABLES********************************************************-->						
<a href="Login/registro.php" class="ml-2">Registrarme</a>

					</div>
					<div class="d-flex justify-content-center links">


<!--********************************VARIABLES********************************************************-->
<a href="#">Olvidaste tu contraseña?</a>



					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
