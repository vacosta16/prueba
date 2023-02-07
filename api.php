<?php
//Proporciona los datos de un contacto leidos de la base de datos

$datos = [

	'nombre' => 'Luis',

	'apellidos' => 'Pérez Sánchez',

	'email' => 'lperez@gmail.com',

	'direccion' => [

		'ciudad' => 'Madrid',
		'calle' => 'Velázquez 22',
		'cp' => '28020'			

	],

	'telefono' => '910123456'

];

exit(json_encode($datos));
?>