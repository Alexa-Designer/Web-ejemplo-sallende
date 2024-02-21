<!DOCTYPE html>
<html lang="es">
<head>
<title><?php echo $titulo; ?></title>
<meta charset="utf-8">
<meta property="og:image" content="URL_de_la_imagen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ponemos en el content esos datos porque es una variable que usaremos en las diferentes paginas -->
<meta name="description" content="<?php echo $description?>"> 
<meta name="robots" content="noindex, follow">
<!-- <link rel="preload" href="img/favicon.svg" as="image" /> -->
<script src='https://www.google.com/recaptcha/api.js?render=6LcaxacoAAAAAJn096j-cWsx0x4HHAPD1rcguUk_'></script>
<link rel="dns-prefecth" href="//google.com">
<link rel="preconnect" href="google.com">
<link rel="stylesheet" href="../css/reset.css">
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LcaxacoAAAAAJn096j-cWsx0x4HHAPD1rcguUk_', {action: 'formulario'})
		.then(function(token) {
			var recaptchaResponse = document.getElementById('recaptchaResponse');
			recaptchaResponse.value = token;
		});});
	</script>
	<link rel="icon" href="img/favicon.svg">
	<link href="http://web12.sallende.zaragozadinamica.es/" rel="alternate" hreflang="es-ES">
</head>
<body>

	<header>
		<a href="index.php"><img src="img/logo-academia1.png" alt="logo academia"></a>
		<nav class="color">
			<ul>
				<li><a href="academia.php">Academia</a></li>
				<li><a href="actividades.php">Actividades</a></li>
				<li><a href="premios.php">Premios</a></li>
				<li><a href="publicaciones.php">Publicaciones</a></li>
				<li><a href="multimedia.php">Multimedia</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="formularios.php">Formulario</a></li>
			</ul>
			<form role="search" method="get" class="search-form" action="https://academiaaragonesadegastronomia.com/">
				<label>
					<span class="screen-reader-text"><img src="img/search.svg" alt="buscar por"></span>
					<input type="search" class="search-field"  placeholder="Search &hellip;" value="" name="s" tabindex="-1">
				</label>
			</form><br>

		</nav>
	</header>


























