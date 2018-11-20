<?php
require_once('connection.php');
$status= array("status"=>"error","action"=>"register","stat"=>false);
if(isset($_REQUEST['email']) && !empty($_REQUEST['email']) && isset($_REQUEST['pass']) && 
!empty($_REQUEST['pass'])&& isset($_REQUEST['pass-confirm']) && !empty($_REQUEST['pass-confirm']) 
&& $_REQUEST['pass']==$_REQUEST['pass-confirm']){
    $pass=password_hash($_REQUEST['pass'], PASSWORD_BCRYPT);
    	$sql="INSERT INTO user(email,pass) VALUES(:email,:pass)";
        $stm=$link->prepare($sql);
        
        try{
	   $stm->execute(array(":email"=>$_REQUEST['email'],":pass"=>$pass));
	   
        if($stm->rowCount()){
            session_start();
            $_SESSION['email']=$_REQUEST['email'];
            header('Location: register_details.html');

        }
      
    }catch(PDOException $e){
        $status=array("status"=>$e->getMessage(),"action"=>"register","stat"=>false);
            echo json_encode();
    }
    
}else{
    echo json_encode($status);
    
}