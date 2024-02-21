
	<?php 
	$titulo = 'formularios';
	include('header.php');
	?>
	<h1>Formulario</h1>
	<form>
		<label for="fname">Nombre (entre 4 y 16 caracteres):</label>
		<input type="text" id="fname" name="fname" required minlength="4" maxlength="16" size="15" placeholder="Nombre">

		<label for="lname">Apellidos</label>
		<input type="text" id="lname" name="lname" required minlength="4" maxlength="16" size="15">
		
		<label for="password">Contraseña</label>
		<input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"><br><br><br><br>
		<!-- Esto ultimo es una expresion regular para contraseña -->

		<!-- <label for="lname">Prueba value</label> 
		<input type="text" id="lname" name="lname" required value="prueba" readonly><br>

		<label for="contrasena">Contraseña</label>
		<input type="password" name="contrasena" id="contrasena"><br>

		<label for="number">Número</label>
		<input type="number" id="number" name="number"><br>
		<input type="submit"><br>

		<label for="busqueda">Búsqueda</label>
		<input type="search" id="busqueda" name="busqueda"><br>

		<datalist id="helados">
			<option value="vainilla"></option>
			<option value="chocolate"></option>
			<option value="nata"></option>
		</datalist>

		<input type="submit" value="Buscar">
		<label for="helados">Helados</label>
		<input list="helados" id="helados" name="helados">-->
	</form>


	<?php include('footer.php');
?>