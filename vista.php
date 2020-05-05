<!--vista.php-->
	<?php
		/**
		* controlamos que existe la contante CONTROLADOR y si el valor es verdadero
		*/
		if (isset($_SESSION['CONTROLADOR']) && $_SESSION['CONTROLADOR']==true)
		{	
			/** 
			* La funcion recibe como parámetro $datos, y no devuelve nada, ya que 
			* en la propia ejecucion de la funcion se muestra en una tabla los datos de 
			* los libros contenidos en el parametro de entrada
			* 
			* @param array $datos
			* @return void 
			*/
			function mostrarLibros2($datos){
				echo "<!DOCTYPE html><html><head><meta charset='utf-8'/>";
				echo "<link rel='stylesheet' type='text/css' href='estilo.css'>";
				foreach ($datos as $dato => $valor) {
					if (is_array($valor)){
						echo "<table class='tabla'>";
						foreach ($valor as $libro => $detalle) {
							foreach ($detalle as $clave=>$valor){
								echo "<tr>";
								echo "<td>".$valor["titulo"]."</td>";
								echo "<td>".$valor["genero"]."</td>";
								echo "<td>".$valor["autor"]."</td>";
								echo "<td>".$valor["anio"]."</td>";
								echo "<td>".$valor["editorial"]."</td>";
								echo "</tr>";
							}
						}			
						echo"</table>";
					}
					else{
						echo "<title>".$valor."</title>";
						echo "</head><body>";
						echo "<h1>". $valor . "</h1><br />\n";	
					}	
				}
				echo "</body></html>";
			}
		}
		/**
		* Si no existe la constante CONTROLADOR muestra un mensaje de error
		*/
		else
		{
			echo "<!DOCTYPE html><html><head><meta charset='utf-8'/>";
			echo "<link rel='stylesheet' type='text/css' href='estilo.css'>";
			echo "</head><body>";
			echo "<h2>Acceso no autorizado desde esta página</h2>";
			echo "<a href='index.php'>pulse este enlace para ir al sitio valido</a>";
			echo "</body></html>";
			die();
		}

		?>
