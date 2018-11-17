<!DOCTYPE html>
<html>
<head>
	<title>CACHUELOS | Trabajos rapidos , faciles y sin experiencia</title>
	<meta charset="utf-8">
	<meta name="description" lang="es" content="Tu plataforma para ganar dinero rapido y facil , con trabajos sin experiencia y sin la necesidad de una profesión">
	<meta name="keywords" content="ganar dinero facil , ganar dinero rapido , trabajos sin experiencia , trabajos para estudiantes">
	<meta name="author" content="iDev">
	<meta name="robots" content=""><!--FALTA APRENDER ESTE METADATO-->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/app-register.js"></script>
	<link rel="stylesheet" type="text/css" href="css/registerStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
<div class="cajitasForm cajitaDetails cajaContratar" id="primero">
		<form method="post" action="contratar.php">
			<h1 style="text-align: center">Publicar un proyecto</h1>
			<div class="form-group">
				<label for="title">Elige un nombre para tu proyecto:</label>
			<input type="text" class="form-control" name="title" placeholder="ej: Pintar una habitación">
			</div>
			<div class="form-group">
				<label for="description">Cuentanos más sobre tu proyecto:</label>
			<textarea class="form-control" id="description" rows="4" placeholder="Describe tu proyecto aquí.."></textarea>

			</div>
			<div class="form-group">
				<label for="image">Imagen:</label>
			<input type="file" class="form-control  withoutB" id="image" name="image">

			</div>
			<div class="form-group">
				<label for="title">Etiquetas:</label>
				
			<input type="text" class="form-control" name="title" placeholder="ej: fisica , tutorado , sin experiencia">

			</div>
			<div class="boxButton col-12">
			<a id="btnNext" class="float-right btn work naranja">Siguiente</a>
			</div>
			<ul class="listaPuntos">
				<li><a  class="active" href="#">1</a></li>
				<li><a  href="#">2</a></li>
			</ul>
		</form>
	</div>
	<div class="cajitasForm cajitaDetails d-none cajaContratar" id="segundo">
		<form method="post" action="contratar.php">
			<h1 style="text-align: center">Segunda Parte</h1>
			<div class="form-group">
				<label for="type">¿Qué alcance debe tener tu empleado?:</label>
			<select id="type" name="type" class="form-control">
                <option selected>Presencial(El cachuelo es local)</option>
                <option>Online(No hay trato físico con el empleado)</option>
                </select>
			</div>
			<div class="form-group">
				<label for="payment">¿Cómo quieres pagar?:</label>
			<select id="payment" name="payment" class="form-control">
                <option selected>Pagar precio fijo(Ideal para trabajos únicos)</option>
                <option>Pagar por horas de trabajo(Ideal para trabajos constantes)</option>
                </select>

			</div>
			
			<div class="form-group">
				<label for="cost">¿Cuanto quieres pagar aproximadamente?:</label>
                <input type="num" class="form-control" name="cost" id="cost" placeholder="ej:S/50">

			</div>
			<div class="boxButton col-12">
			<button type="submit" id="btnNext" class="float-right btn work naranja">Publicar Proyecto</button>
			</div>
			<ul class="listaPuntos">
				<li><a id="pOne" class="active" href="#">1</a></li>
				<li><a id="pTwo" href="#">2</a></li>
			</ul>
		</form>
	</div>
	<script type="text/javascript">
		var btnNext = document.getElementById("btnNext");
		var segundo = document.getElementById("segundo");
		var primero = document.getElementById("primero");
		var pOne = document.getElementById("pOne");
		var pTwo = document.getElementById("pTwo");
		function siguiente(){
			 pOne.classList.remove("active");
           pTwo.classList.add("active");
           segundo.classList.add("d-block");
           primero.classList.add("d-none");
          
		}
		btnNext.addEventListener("click",siguiente);
	</script>
</body>
</html>