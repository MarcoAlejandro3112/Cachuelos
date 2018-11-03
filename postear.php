<?php
require_once('connection.php');
require_once('observador.php');
$status=array('status'=>'error','context'=>'post','stat'=>false);
if(isset($_SESSION['user']) && !empty($_SESSION('user'))&& isset($_REQUEST['content']) && isset($_REQUEST['content'])
 && isset($_REQUEST['title']) && isset($_REQUEST['title'])){
	$sql="INSERT INTO post (user,title,content,image,catid,post_date,payment)".
	"VALUES(:user,:content,:img,:catid,:date,:pay)";
	
		$stm=$link->prepare($sql);
       $stm->execute(array(":user"=>$_SESSION['user'],":content"=>$_REQUEST['content'],":img"=>null,
                            ":catid"=>$_REQUEST['category'],":date"=>date('Y-m-d'),":pay"=>$_REQUEST['payment']));
	   
        $result=$stm->fetchAll();
        
        $datos = array();
        
       $status=array('status'=>'succes','context'=>'post','stat'=>true);
       
        echo(json_encode($status));

        	
        }else{
             echo(json_encode($status));
        }
