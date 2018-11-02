
<?php


if(isset($_REQUEST['nota1']) && !empty($_REQUEST['peso1']) && 
isset($_REQUEST['nota2']) && !empty($_REQUEST['peso2']) && 
isset($_REQUEST['nota3']) && !empty($_REQUEST['peso3']) && 
isset($_REQUEST['nota4']) && !empty($_REQUEST['peso4']) ){

$n1=$_REQUEST['nota1'];
$p1=$_REQUEST['peso1'];

$n2=$_REQUEST['nota2'];
$p2=$_REQUEST['peso2'];

$n3=$_REQUEST['nota3'];
$p3=$_REQUEST['peso3'];

$n4=$_REQUEST['nota4'];
$p4=$_REQUEST['peso4'];
//
if(!($n1<=20 && $n2<=20 && $n3<=20 && $n4<=20 ) ){
     echo'<script type="text/javascript">alert(\'Las notas debes estar entre 0 y 20!\')</script> ';

}else if ($p1>100 && $p2>100 && $p3>100 && $p4>100){
    echo'<script type="text/javascript">alert(\'Los pesos deben estar entre 0% y 100%!\')</script> ';
}else if(($p1+$p2+$p3+$p4)==100){
    
    $res=($n1*$p1)/100+
($n2*$p2)/100+
($n3*$p3)/100+
($n4*$p4)/100;

print_r('<script type="text/javascript">alert(\''.$res.'\')</script> ');
}
else{
     echo'<script type="text/javascript">alert(\'Los pesos deben estar entre 0% y 100%!\')</script> ';
}
//
}else{
    echo'<script type="text/javascript">alert(\'complete todos los campos!\')</script> ';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validaciones</title>
	<style type="text/css">
		table{
			border: 2px solid #000;
		}
	</style>
<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> -->
	
</head>
<body>
	<!-- <script type="text/javascript">
$('#calc').on('click',
	function calc(event) {
			event.preventDefault();
					var n1=getElementById('nota1').val();
					var p1=getElementById('peso1').val();
					var n2=getElementById('nota2').val();
					var p2=getElementById('peso3').val();
					var n3=getElementById('nota3').val();
					var p3=getElementById('peso2').val();
					var n4=getElementById('nota4').val();
					var p4=getElementById('peso4').val();


					var res=(n1*p1)/100+
					(n2*p2)/100+
					(n3*p3)/100+
					(n4*p4)/100;

					alert(res);

				})
	</script> -->
	<table>
		<tr>
		<td colspan="2">Nota: </td>
		<td>Peso (%):</td>
		<tr>

<form id="form" action="">
	<tr>
		<td>Nota 1:</td>
	<td>
	<input type="number" name="nota1"></td>
	
	<td>
	<input type="number" name="peso1"><br></td>
	</tr>

	<tr>
		<td>Nota 2:</td>
	<td>
	<input type="number" name="nota2"></td>
	
	<td>
	<input type="number" name="peso2"><br></td>
	</tr>

	<tr>
		<td>Nota 3:</td>
	<td>
	<input type="number" name="nota3"></td>
	
	<td>
	<input type="number" name="peso3"><br></td>
	</tr>

	<tr>
		<td>Nota 4:</td>
	<td>
	<input type="number" name="nota4"></td>
	
	<td>
	<input type="number" name="peso4"><br></td>
	</tr>
	<button id="calc" >Calcular</button>
</form>
</table>
</body>
</html>