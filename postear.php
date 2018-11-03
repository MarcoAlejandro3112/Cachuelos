<?php
require_once('connection.php');
$status=array('status'=>'error','context'=>'post','stat'=>false);
if(isset($_REQUEST['user']) && !empty($_REQUEST('user')) && isset($_REQUEST['pass']) && !empty($_REQUEST['pass']) ){
	$sql="INSERT INTO post (user,title,content,image,catid,post_date,payment)".
	"VALUES(:user,:content,:img,:catid,:catid,:date,:pay)";
	
		$stm=$link->prepare($sql);
	   $stm->execute(array(":user"=>$_REQUEST['user'],":content"));
	   
        $result=$stm->fetchAll();
        
        $datos = array();
        
       $status=array('status'=>'succes','context'=>'post','stat'=>true);
       
        echo(json_encode($status));

        	
        }else{
             echo(json_encode($status));
        }
