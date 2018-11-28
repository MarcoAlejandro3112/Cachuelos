<?php session_start(); ?>
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
	<link rel="stylesheet" type="text/css" href="css/styleDashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<?php include("headerDash.php"); ?>
	<div class="containerMain">
		<div class="rowMain">
			<div class="colNot">
				<h3>Notificaciones</h3>
				<div class="boxNots">
					<?php 
					$con=mysqli_connect("localhost","root","","id7557222_cachuelos");
                         $noti = mysqli_query($con,"SELECT * FROM notificationsTest WHERE user2 = '".$_SESSION['udid']."'");
                         while($not = mysqli_fetch_array($noti)){
                        $users = mysqli_query($con,"SELECT * FROM user_details WHERE udid ='".$not['user1']."'");
                        $user = mysqli_fetch_array($users);
					?>
					<div class="boxNot">
						<div class="leftNot">	
                       <img src="data:image/jpg;base64,<?php echo base64_encode($user['img']);?>"/>
						</div>
						<div class="rightNot">	
                            <span><?php echo $not['fecha']?></span>
			            <h4><?php echo $not['title']?></h4>
			            <h6><?php echo $user['name']." ".$user['surname'];?> </h6>
			            <p><?php echo $not['content']?></p>
						</div>
			        </div>
					<?php  }?>
				</div>
			</div>
			<div class="colPro">
				<div class="leftPro">
				<img src="img/user.png" alt="">
				</div>
				<div class="rightPro">	
				<span>Buenos Días..</span>
				<h4><?php echo $_SESSION['user']?></h4>

               <span>Saldo Disponible: $50</span>
               <button class="btn"><a href="#">Ver Perfil</a></button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>