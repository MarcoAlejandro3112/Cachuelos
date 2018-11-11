<?php
header('Access-Control-Allow-Origin:*');


function Connect()
{
  try{  
  	  $host="localhost";
      $suser="id7557222_cachuelos";
      $spass="123456";
      $db="id7557222_cachuelos";
        $link = new PDO('mysql:host='.$host.';dbname='.$db, $suser, $spass);
 
  }catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
	
}