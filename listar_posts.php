<?php
require_once('connection.php');

    $datos=array("status"=>"error","action"=>"listar","stat"=>false);

	$sql="SELECT title,image,u.email email ,content,c.name category,post_date,payment FROM post p INNER JOIN user u ON p.user=u.uid INNER JOIN category c ON p.catid=c.catid ";
	
		$stm=$link->prepare($sql);
	   $stm->execute();
	   
        $result=$stm->fetchAll();
       # echo json_encode($result);
        $datos = array();
        
        if($stm->rowCount()){
        
         foreach($result as $row){
          
            array_push($datos,array("title"=> $row['title'], "user"=> $row['email'], "content"=> $row['content'], "category"=> $row['category'], "imagen"=> $row['image'],"date"=>$row['post_date'],"payment"=>$row['payment']));
            }
        }
        
       echo(json_encode($datos));
      