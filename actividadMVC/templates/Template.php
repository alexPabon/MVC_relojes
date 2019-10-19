<?php
class Template{

	public static function header($titulo='', $subtitulo=''){?>
		<header>
			<h1><?=$titulo;?></h1>
			<h2><?=$subtitulo;?></h2>
		</header>
	<?php }

	public static function menu(){?>
		<ul class="template">
			<li><a href="/">Inicio</a></li>
			<li><a href="/reloj/list">lista de Relojes</a></li>
			<li><a href="/reloj/create">Nuevo Reloj</a></li>
		</ul>
	<?php }
}