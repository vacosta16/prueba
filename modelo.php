<?php
// modelo.php

function abrir_bd()
{
    //Conexión con la base de datos
    $link = mysqli_connect('localhost', 'otro', 'otro', 'foc3');
	mysqli_set_charset($link, "utf8"); 
    return $link;
}

function desconectar_bd($link)
{
    mysqli_close($link);
}
function lista_articulos()
{
    $link = abrir_bd();
    //Recuperamos todos los artículos de la base de datos
    $resultados = mysqli_query($link, 'SELECT id, titulo , a_imagen FROM Articulos');
    $articulos = array();
    while($articulo=mysqli_fetch_assoc($resultados))
        $articulos[] = $articulo;
    desconectar_bd($link);
    return $articulos;
}

function articulo($id)
{
    $link = abrir_bd();
    //Recuperamos todos los artículos de la base de datos
    $resultado = mysqli_query($link, "SELECT id, titulo , a_imagen FROM Articulos WHERE id = '$id'");
    $detalles = array();
	while($articulo=mysqli_fetch_assoc($resultado))
	{
		$detalles["id"] = $articulo["id"];		
		$detalles["titulo"] = $articulo["titulo"];
		$detalles["a_imagen"] = $articulo["a_imagen"];
	}
    
    desconectar_bd($link);
    return $detalles;
}
?>
