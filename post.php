<?php SESSION_START();?>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="css/postStyle.css">
</head>
<body>
	<?php
$id1 = $_GET['id'];
$con=mysqli_connect("localhost","root","","id7557222_cachuelos");
                         $post = mysqli_query($con,"SELECT * FROM post WHERE pid = '".$id1."'");
                        $pos = mysqli_fetch_array($post);
                        $users = mysqli_query($con,"SELECT * FROM user_details WHERE user ='".$pos['user']."'");
                        $user = mysqli_fetch_array($users);
                    
?>

<?php include("headerDash.php"); ?>
<div class="containerPost">
	<section class="leftPost">
		<div class="titlePost">
			<h1><?php echo $pos['title']?></h1>
			<span><?php if($pos['type'] == 1){echo "Trabajo Presencial";}else if($pos['type'] == 2){echo "Online";}?></span>
		</div>
		<div class="data">
		<div class="tagsPost">
			<p><?php echo $pos['tags']?></p>
			<span><?php echo $pos['date']?></span>
		</div>
		<div class="descrPost">
			<p><?php echo $pos['content']?></p>
		</div>
		</div>
	</section>
	<section class="rightPost">
		<div class="offertPost">
			<button class="btn">Ofertar Ahora</button><br/>
			<span><b>Pago:</b> $<?php echo $pos['payment'];?></span><br/>
			<span><b>N° Postulantes :</b> #</span><br/>
		</div>
		<div class="clientPost">
			<h4>Sobre el cliente:</h4>
			<span><b>Nombre: </b><?php echo $user['name']." ".$user['surname'];?> </span><br/>
			<span><b>Teléfono:</b> <?php echo $user['phone']?></span><br/>
			<span><b>Email:</b> <?php echo $user['user'];?></span>
			<span><b>N° Trabajos Completados: </b>#</span>
		</div>
	</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>