<?php
header('Access-Control-Allow-Origin:*');
  try{  
  	  $host="localhost";
      $suser="admin";
      $spass="1234";
      $db="id7557222_cachuelos";
        $link = new PDO('mysql:host='.$host.';dbname='.$db, $suser, $spass);
 
  }catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
