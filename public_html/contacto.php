<!DOCTYPE html>
<html>
<head>
	<title>CACHUELOS | Trabajos rápidos , fáciles y sin experiencia</title>
	<meta charset="utf-8">
	<meta name="description" lang="es" content="Tu plataforma para ganar dinero rapido y facil , con trabajos sin experiencia y sin la necesidad de una profesión">
	<meta name="keywords" content="ganar dinero facil , ganar dinero rapido , trabajos sin experiencia , trabajos para estudiantes">
	<meta name="author" content="iDev">
	<meta name="robots" content=""><!--FALTA APRENDER ESTE METADATO-->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="css/contactoStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
<?php include("headerSolid.php"); ?>
<div class="cajitasForm cajitaDetails">
		<form method="post" action="contacto.php">
			<h1>Contacto</h1>
			<p class="pCon">Si tienes cualquier pregunta, por favor ,rellena el formulario</p>
			<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="E-mail">
			</div>
			<div class="form-group">
			<input type="tel" class="form-control" name="tel" placeholder="Número de telefono">
			</div>
			<div class="form-group">
			<textarea class="form-control" id="message" rows="3" placeholder="Mensaje"></textarea>
			</div>
			
			<button type="submit" class="float-right btn work naranja">ENVIAR</button>
		</form>
	
</div>
<footer class="fixed-bottom">
  <p>Todos los derechos reservados &copy; | iDev</p>
</footer>
</body>
</html>