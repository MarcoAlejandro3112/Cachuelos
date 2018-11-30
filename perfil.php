<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<meta name="description" lang="es" content="Tu plataforma para ganar dinero rapido y facil , con trabajos sin experiencia y sin la necesidad de una profesión">
	<meta name="keywords" content="ganar dinero facil , ganar dinero rapido , trabajos sin experiencia , trabajos para estudiantes">
	<meta name="author" content="iDev">
	<meta name="robots" content=""><!--FALTA APRENDER ESTE METADATO-->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/app.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/perfilStyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<?php include("headerDash.php"); ?>
    <div class="boxProfile">
    	<div class="leftProfile">
    		<div class="boxImgUser">
    		<img src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['img']);?>"/>
    		</div>
    		<ul>
    			<li><b>EMAIL:</b> <?php echo $_SESSION['origin']?></li>
    			<li><b>PAÍS:</b> <?php echo $_SESSION['country']?></li>
    			<li><b>DESDE:</b> <?php echo $_SESSION['Date']?></li>
    			<li><b>TELÉFONO:</b> <?php echo $_SESSION['phone']?></li>
    			<li><b>DNI:</b> <?php echo $_SESSION['document']?></li>
    		</ul>
    	</div>
    	<div class="centerProfile">
    	  <div class="topCprofile">
    	<h1>Marco Altamirano  <span><?php $perfil = $_SESSION['profile'];if($perfil==1){
    		echo "Contratista";
    	}else if($perfil == 2){
    		echo "Trabajador";
    	}?></span></h1>
    	<p><?php echo $_SESSION['title'];?></p>
    	</div>
    	<p><?php echo $_SESSION['description'];?></p>
        </div>
        <div class="rightProfile">
        	<button class="btn"><a href="#"><i class="fas fa-pencil-alt"></i>Editar Perfil</a></button>
        	
        	<ul>
        		<li><span>N/A</span> N° Trabajos Finalizados</li>
        		<li><span>N/A</span> Dinero Ganado</li>
        		<li><span>N/A</span> Porcentaje de Satisfacción</li>
        	</ul>
        </div>
    </div>
    <script>
    var bell = document.getElementById("bell");
    var not = document.getElementById("navNot");
    var toggle = false;
    bell.addEventListener("click",function(){
      
            if(toggle == true){
              not.className = "";
              toggle = false;
            } else {
              not.className = "show";
            toggle = true;
            }
    });
  </script>
</body>
</html>