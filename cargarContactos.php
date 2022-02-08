<?php
$salida = "";

if (isset($_GET["q"]))
{
	$nombre = $_GET["q"];
	
	$mysqli = new mysqli("localhost", "otro", "otro", "foc4");
	if (!$mysqli->connect_error)
	{
		$mysqli->set_charset("utf8");
				
		$sql = "SELECT * FROM AGENDA WHERE nombre LIKE '%$nombre%' ORDER BY nombre";
		
		if (($resultado = $mysqli->query($sql)) && (!$mysqli->error))
		{	
		
		//Trabajar con datos
		while ($fila = $resultado->fetch_assoc())
			{
				//Procesar result set como asociativo
				$salida = $salida . "<br>". $fila["nombre"];
			}
		
			$resultado->free();
			$mysqli->close();
			//echo json_encode($final);
		}
	}

}

echo $salida;
?>
