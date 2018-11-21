<?php
require('connection.php');
if(isset($_REQUEST['key']) && !empty($_REQUEST['key']) ){


    $datos=array();

	$sql="SELECT pid,title,p.image,CONCAT(ud.name,' ',ud.surname) as user ,content,post_date,payment FROM post p INNER JOIN user_details ud ON p.user=ud.user WHERE title LIKE :k OR ud.name LIKE :k OR ud.surname LIKE :k OR content LIKE :k OR payment LIKE :k";
	
		$stm=$link->prepare($sql);
		
	   $stm->execute(array(":k"=>"%".$_REQUEST['key']."%"));
	   
        $result=$stm->fetchAll();
        
       
        if($stm->rowCount()){
        
         foreach($result as $row){
          
             array_push($datos,array("id"=>$row['pid'],"title"=> $row['title'], "user"=> $row['user'], "content"=> $row['content'], "imagen"=> $row['image'],"date"=>$row['post_date'],"payment"=>$row['payment']));
            }
            echo(json_encode($datos));
        }else{
        	 array_push($datos,array("id"=>$row['pid'],"title"=> $row['title'], "user"=> $row['user'], "content"=> $row['content'], "imagen"=> $row['image'],"date"=>$row['post_date'],"payment"=>$row['payment']));
            }
            echo(json_encode($datos));
        }

}else{

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
	

}

?>