<?php  include_once 'trabajo.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title>weee</title>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Nombre</th> 
    <th>Age</th>

  </tr>
          
   

         

  <?php foreach($data as $dato): ?>
 <tr> 
  
    <td> <?php $dato["id"];?></td>
    <td><?php $dato["nombre"];?></td> 
    <td><?php $dato["anio"];?></td>
  
   </tr>
  
   <?php endforeach; ?>

  
</table>
  



</body>
</html>