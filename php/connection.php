<?php
  try{  
  	  $host="localhost";
      $suser="id7557222_cachuelos";
      $spass="123456";
      $db="id7557222_cachuelos";
        $link = new PDO('mysql:host='.$host.';dbname='.$db, $suser, $spass);
    echo 'conexión exitosa!'
  }catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
