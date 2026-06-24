<?php
// Sanitiza e imprime los datos
echo htmlspecialchars($_POST['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
echo (int)htmlspecialchars($_POST['edad'] ?? 1, ENT_QUOTES, 'UTF-8');

?>

<form method="POST" action="">
	<label for="nombre">Ingresa tu nombre: </label>
	<input type="TEXT" name="nombre">

	<label for="edad">Ingresa tu edad: </label>
	<input type="INT" name="edad">

	<button type="submit">Guardar</button>
</form>
