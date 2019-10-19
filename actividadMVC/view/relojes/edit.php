<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Relojes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ampliada.css">

</head>
<body>
	<?php 
		Template::header('listado de Relojes','todos los datos');
		Template::menu();
	?>	
	<div>
		<form method="post" action="/reloj/update">
			<input type="hidden" name="id" value="<?=$reloj->id ?>">
			<label>Marca</label>
			<input type="text" class="entradas" name="marca" value="<?=$reloj->marca?>"><br><br>
			<label>Modelo</label>
			<input type="text" class="entradas" name="referencia" value="<?=$reloj->referencia?>"><br><br>
			<label>precio</label>
			<input type="text" class="entradas" name="precio" value="<?= $reloj->precio?>"><br><br>

			<input type="submit" name="guardar" value="Guardar">
			<input type="reset" name="reset" value="Restaurar">
		</form>
		<p><?=isset($mensaje)?$mensaje:''; ?></p>
	</div>
</body>
</html>