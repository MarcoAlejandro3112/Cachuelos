<?php
require_once('connection.php');

$status=array('status'=>'error','context'=>'post','stat'=>false);
if(/*isset($_SESSION['user']) && !empty($_SESSION('user'))&& */isset($_REQUEST['description']) && !empty($_REQUEST['description'])
  && isset($_REQUEST['title']) && !empty($_REQUEST['title']) && isset($_REQUEST['payment']) && !empty($_REQUEST['payment'])
   && isset($_REQUEST['type']) && !empty($_REQUEST['type']) && isset($_REQUEST['tags']) && !empty($_REQUEST['tags'])){
     
	$sql="INSERT INTO post (user,title,content,post_date,payment,tags,type)".
	"VALUES(:user,:content:date,:pay,:tags,:type)";

		$stm=$link->prepare($sql);
       $stm->execute(array(":user"=>'elon@musk.com',":content"=>$_REQUEST['description'],
                            ":date"=>date('Y-m-d'),":pay"=>$_REQUEST['payment']),":tags"=>$_REQUEST['tags']),
                            ":type"=>$_REQUEST['type']));

        $result=$stm->fetchAll();

        $datos = array();

       $status=array('status'=>'succes','context'=>'post','stat'=>true);

        echo(json_encode($status));

        header('Location:cachuelos.php');


          //  print_r($_REQUEST);

        }else{
             echo(json_encode($status));
        }
