<html>
	<head>
		<title> ..:: Guardado ::.. </title>
		<meta  charset="UTF-8">
			</head>
	<body> <!--$Imagen = $_POST['Imagen'];  '$Imagen',			 -->
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "salidas";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			$id = $_POST['id'];
			$Nombre = $_POST['Nombre'];
			$Telefono =$_POST['Telefono'];
			$Mensaje = $_POST['Mensaje'];
			$Costo = $_POST['Costo'];
			$Producto =$_POST['Producto'];
			$Cantidad = $_POST['Cantidad'];
			$Fecha = $_POST['Fecha'];
			
			$insertar = "INSERT INTO salidas.ejemplo VALUES('$id','$Nombre','$Telefono','$Mensaje','$Costo','$Producto','$Cantidad','$Fecha')";
			$resultadi = mysqli_query($conexion,$insertar)
			or die ("Error al insertar los registros");
			
			mysqli_close($conexion);
			?>

			<h1><center>
				<?php echo "Datos Insertados Correctamente!!"?>
			</h1>
		</center>
			
		
		<p></p>
		<center><a href="tablero/index.php"> Salir</a></center>
	</body>
</html>