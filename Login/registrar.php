<?php

$NC=$_POST['Usuarios'];
	$Usuarios = "L".$NC."@matehuala.tecnm.mx";

	$Contraseña= $_POST['Contraseña'];
	$Rcontraseña=$_POST['Rcontraseña'];
	$Rol=$_POST['Rol'];
	$Demartamentos=$_POST['Demartamentos'];
	$Nombres=$_POST['Nombres'];
	$Apellido_Paterno=$_POST['Apellido_Paterno'];
	$Apellido_Materno=$_POST['Apellido_Materno'];

	require("coneccionbd.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Usuarios='$Usuarios'");
	$check_mail=mysqli_num_rows($checkemail);
		if($Contraseña==$Rcontraseña){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$Usuarios','$Contraseña','$Rol','$Nombres','$Apellido_Paterno','$Apellido_Materno','$Demartamentos','','')");
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';				
			}
		}else{
			echo 'Las contraseñas son incorrectas';
		}
?>