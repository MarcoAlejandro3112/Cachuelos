<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
</head>
<body>
	
	<h1>Name: <?php echo $_SESSION['user']?> </h1>
	<h2>Details: </h2>
		<ul>
			<li>Phone: <?php echo $_SESSION['phone']?></li>
			<li>origin: <?php echo $_SESSION['origin']?></li>
			<li>Description: <?php echo $_SESSION['description']?></li>
			<li>Country: <?php echo $_SESSION['country']?></li>
			<li>Document: <?php echo $_SESSION['document']?></li>
		</ul>
	

</body>
</html>