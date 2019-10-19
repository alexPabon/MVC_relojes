<!DOCTYPE html>
<html>
<head>
	<title>Lista de Relojes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ampliada.css">	

</head>
<body>
	<?php 
		Template::header('Crear Nuevo Reloj','Introducir los datos');
		Template::menu();
	?>
	<div>
		<form method="post" action="/reloj/store">
			<ul>
				<li>
					<label>Marca:</label>
					<input type="text" class="entradas" name="marca">
				</li>
				<li>
					<label>Referencia:</label>
					<input type="text" class="entradas" name="referencia">
				</li>
				<li>
					<label>Precio:</label>
					<input type="text" class="entradas" name="precio">
				</li>			
			</ul>
			<input type="submit" name="guardar" value="Guardar">
			<input type="reset" name="reset" value="Reset">
		</form>	
	</div>
	
</body>
</html>