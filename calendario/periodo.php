<?php
include 'config.php';  
//Funcion para traer el periodo
function getperiodo()
{
 
 $consulta = "select * from calendario";
	$datos = mysqli_query($conexion, $consulta)
		or die ("fallo al traer periodo");
	while($fila  = mysqli_fetch_array($datos)) {
		echo $fila['periodo'];}
    }
		
?>