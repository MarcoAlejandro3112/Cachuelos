<?php
require('connection.php');
if(isset($_REQUEST['key']) && !empty($_REQUEST['key']) ){


    $datos=array();

    $sql="SELECT pid,p.title,p.img,CONCAT(ud.name,' ',ud.surname) as user ,content,p.date,payment FROM post p INNER JOIN user_details ud ON p.user=ud.user WHERE title LIKE :k OR ud.name LIKE :k OR ud.surname LIKE :k OR content LIKE :k OR payment LIKE :k";
    
        $stm=$link->prepare($sql);
        
       $stm->execute(array(":k"=>"%".$_REQUEST['key']."%"));
       
        $result=$stm->fetchAll();
        
       
        if($stm->rowCount()){
        
         foreach($result as $row){
          
             array_push($datos,array("id"=>$row['pid'],"title"=> $row['title'], "user"=> $row['user'], "content"=> $row['content'], "imagen"=> $row['img'],"date"=>$row['date'],"payment"=>$row['payment']));
            }
            echo(json_encode($datos));
        }else{
             
            
            echo('error');}
        

}else{

     $datos=array();

    $sql="SELECT pid,p.title,p.img,CONCAT(ud.name,' ',ud.surname) as user ,content,p.date,payment FROM post p INNER JOIN user_details ud ON p.user=ud.user ";
    
        $stm=$link->prepare($sql);
       $stm->execute();
       
        $result=$stm->fetchAll();
        
        
        if($stm->rowCount()){
        
         foreach($result as $row){
          
            array_push($datos,array("id"=>$row['pid'],"title"=> $row['title'], "user"=> $row['user'], "content"=> $row['content'], "imagen"=> $row['img'],"date"=>$row['date'],"payment"=>$row['payment']));
            }
            echo(json_encode($datos));

          
            
        }else{
            echo "error";
        }
    

}

?>