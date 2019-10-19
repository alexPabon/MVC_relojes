<?php
	$listado = '';	

	foreach ($relojes as $reloj){
		$listado .= '<p>Reloj con Id:';
			$listado.= $reloj->id.'<br>'.$reloj->marca;
			$listado.= "  <a href='/reloj/show/$reloj->id'>Ver</a>";
			$listado.= "  <a href='/reloj/edit/$reloj->id'>Editar</a>";
			$listado.= "  <a href='/reloj/delete/$reloj->id'>Borrar</a>";
		$listado.='</p>';
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de relojes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/list.css">
</head>
<body>
	<?php 
		Template::header('listado de relojes','todos los datos');
		Template::menu();		
	?>
	<div>

		<?=$listado ?>	
	</div>
	
</body>
</html>
