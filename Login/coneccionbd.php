<?php
		$mysqli = new MySQLi("localhost:3306", "id13132544_root1","e4KKI2~=40JF[w3_", "id13132544_sicsa");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
?>