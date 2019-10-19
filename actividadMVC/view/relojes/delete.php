 <!DOCTYPE html>
<html>
<head>
	<title>Borrar Reloj</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ampliada.css">

</head>
<body>
	<?php 
		Template::header('Borrar Reloj');
		Template::menu();
	?>
	<div>
		<p><b>Marca del telofono: </b> <?=$borrar->marca?></p>
		<p><b>Referencia: </b> <?=$borrar->referencia?></p>
		<p><b>Precio: </b> <?=$borrar->precio?></p>
		<form method="post" action="/reloj/destroy">
			<input type="hidden" name="id" value="<?= $borrar->id?>">		
			<input type="submit" name="confirmar" value="Confirmar Borrado">
		</form>		
	</div>
</body>
</html>