<?php
session_start();

include("coneccionbd.php");// conexion a la base de datos
	
	$Usuarios = $_POST['Usuarios'];
	$Contraseña = $_POST['Contraseña'];
	
	//consulta a la tabla de los usuarios
	$sql = "SELECT *
			FROM  `usuarios` 
			WHERE Usuarios =  '".$Usuarios."'
			AND Contraseña =  '".$Contraseña."'";
					
	$resultado = mysqli_query($mysqli,$sql);			
	
	if('1' == mysqli_num_rows($resultado)){ 
		$linea = mysqli_fetch_array($resultado); // arreglo de los campos que hay en ese resultado
		
		$Usuarios = $linea[1];
		$Rol = $linea[3];
		
		$_SESSION["Rol"] = $Rol;
		
		
		
		switch($Rol){ // Casos segun el privilegio asignado al usuario segun su privilegio es la entrada a cierta pagina.
			case 'Docente':
				header("location: ../MenuEder/index.php");
				break;
			case '1':
				header("location: alumno.php");
				break;
			case '2':
				header("location: maestro.php");
				break;
			case '3':
				header("location: administrador.php");
				break;
		}
	}else{
		header("location: ../index.php");
	}
	
	mysql_close();
	
?>