<?php
require_once('connection.php');

    $datos=array();

	$sql="SELECT pid,title,p.image,CONCAT(ud.name,' ',ud.surname) as user ,content,post_date,payment FROM post p INNER JOIN user_details ud ON p.user=ud.user ";
	
		$stm=$link->prepare($sql);
	   $stm->execute();
	   
        $result=$stm->fetchAll();
        
        
        if($stm->rowCount()){
        
         foreach($result as $row){
          
            array_push($datos,array("id"=>$row['pid'],"title"=> $row['title'], "user"=> $row['user'], "content"=> $row['content'], "imagen"=> $row['image'],"date"=>$row['post_date'],"payment"=>$row['payment']));
            }
            echo(json_encode($datos));

          
            
        }else{
            echo "error";
        }
        

      