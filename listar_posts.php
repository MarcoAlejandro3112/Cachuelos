<?php
require_once('connection.php');



	$sql="SELECT title,image,u.email email ,content,c.name category,post_date FROM post p, user u ,category c ";
	
		$stm=$link->prepare($sql);
	   $stm->execute();
	   
        $result=$stm->fetchAll();
       # echo json_encode($result);
        $datos = array();
        
        foreach($result as $row){
          
            array_push($datos,array("title"=> $row['title'], "user"=> $row['email'], "content"=> $row['content'], "category"=> $row['category'], "imagen"=> $row['image'],"date"=>$row['post_date']));
        }
        
       echo(json_encode($datos));
       return json_encode($datos);