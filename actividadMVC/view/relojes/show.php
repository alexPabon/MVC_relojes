<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ampliada.css">

</head>
<body>
	<?php 
		Template::header('listado de Relojes','todos los datos');
		Template::menu();		
	?>
	<div>
		<p><b>Marca del Reloj: </b> <?=$detalles->marca?></p>
		<p><b>Referencia: </b> <?=$detalles->referencia?></p>
		<p><b>Precio: </b> <?=$detalles->precio?></p>
		<p><b>Creado: </b> <?=$detalles->creado?></p>
		<p><b>Actualizado: </b> <?=$detalles->actualizado?></p>
		<p>		
			<a href='/reloj/list'>Volver al listado</a>
			<a href='/reloj/edit/<?=$detalles->id?>'>Editar</a>
			<a href='/reloj/delete/<?=$detalles->id?>'>Borrar</a>
		</p>
	</div>
</body>
</html>