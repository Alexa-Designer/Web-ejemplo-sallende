<?php 
	$titulo = 'Academia';
	$description = 'Descripción Academia Aragonesa de Gastronomia'; 
	include('header.php')
	?>

<main>
	<img src="img/contacto/contacto.png" alt="">
	<form action="datos.php" method="post">
 	<div>
 		<label for="nombre">Nombre:</label>
 		<input id="nombre" name="nombre" placeholder="Junita" type="text" required>
 	</div><br>
 	<div>
 		<label for="email">Mail:</label>
 		<input type="email" id="email" name="email" placeholder="mail@mail" required>
 	</div><br>

 	<div>
 		<label for="telefono">Telefono</label>
 		<input type="tel" id="telefono" name="telefono" placeholder="+34 123 456 789" required pattern= "[\d\s\-]{9,17}" minlength="9" maxlength="17" 
 		>
 	</div><br>
 	<div>
 		<label for="direccion">Dirección:</label>
 		<input id="direccion" name="direccion" placeholder="C/pepito, 2, 4a" type="text" required>
 	</div><br>

 	<fieldset>
 		<legend>Tipo de horario</legend>
 		<div>
 			<input type="radio" id="manana" name="hora" value="De mañanas">
 			<label for="manana">Mañanas de 10h a 13h</label><br>
 		</div>
 		<div>
 			<input type="radio" id="medio-dia" name="hora" value="Al medio día">
 			<label for="medio-dia">Mediodía de 13h a 16h</label><br>

 		</div>
 		<div>
 			<input type="radio" id="tarde" name="hora" value="De tardes">
 			<label for="tarde">Tardes de 16h a 20h </label><br>
 		</div>
 	</fieldset><br><br>
 	<fieldset>
 		<legend>Tipo de Cesta</legend>
 		<div>
 			<input type="radio" id="cesta-3kg" name="tipo-de-cesta" value="Cesta de 3kg">
 			<label for="cesta-3kg">Cesta de 3&nbsp;kg</label>
 		</div>
 		<div>
 			<input type="radio" id="cesta-5kg" name="tipo-de-cesta"  value="Cesta de 5kg">
 			<label for="cesta-5kg">Cesta de 5&nbsp;kg</label>
 		</div>
 	</fieldset>
 	<br>	
 	<div>
 		<p>Si quieres algún producto más añádelo en comentarios</p>
 		<label for="comentarios"></label>
 		<textarea id="comentarios" name="comentarios" rows="15" cols="50" placeholder="Deje aquí su comentario"></textarea><br>
 	</div>
 	<div>
 		<input type="checkbox" id="privacidad" name="privacidad" required><a href="privacidad.php" target="_blank">He leido y acepto la politica de privacidad.</a><br><br>
 		<!-- <label for="privacidad">Politica de Privacidad:</label><br><br> -->
 		<input type="submit" value="Enviar"><br><br><br>
 	</div>
 	<ul>
 		<li> Recopilamos información personal para mejorar la experiencia del usuario.</li>
 		<li>Garantizamos la seguridad y no compartimos datos con terceros, salvo para mejorar servicios o cumplir con requerimientos legales. </li>
 		<li> Los usuarios tienen derechos a acceder, gestionar o rescindir el uso de su información personal.</li>
 		<li>Para cualquier duda o consulta contacte al correo <a href="mailto:iascdigitalsolutions@gmail.com">
 		info@ascdigitalsolutions.com</a></li>
 		<li>O llamar al:<a href="tel:643368167">643368167</a></li>
 	</ul>

 </form>

</main>

	<a href="contacto.php">Volver arriba</a>

				<?php include('footer.php')

				 	?>