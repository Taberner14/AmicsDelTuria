<main>
	<h1>Gestión de Carreras </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre carrera</label>
		<br/>
		<input type="text" name="nombre" class="item_requerid" size="20" maxlength="25" value="<?php print $nombre ?>"
		 placeholder="Volta a les hermites" />
		<br/>
		<br>
		<label for="descripcion">Descripción del terreno</label>
		<br/>
		<input type="text" name="descripcion" class="item_requerid" size="20" maxlength="25" value="<?php print $descripcion ?>"
		placeholder="Terreno mixto, montaña y senda" />

		<br>
		<label for="localizacion">Lugar</label>
		<br/>
		<input type="text" name="localización" class="item_requerid" size="20" maxlength="25" value="<?php print $localizacion ?>"
		placeholder="Burriana, Castellón" />

		<br>
		<label for="distancia">Distancia</label>
		<br/>
		<input type="number" name="distancia" class="item_requerid" size="20" value="<?php print $distancia ?>"/> <label> km</label>
	
	
		<br/>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
	</form>
</main>