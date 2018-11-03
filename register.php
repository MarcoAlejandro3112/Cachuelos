<?php
require_once('connection.php');
$status= array("status"=>"error","action"=>"register","stat"=>false);
if(isset($_REQUEST['email']) && !empty($_REQUEST['email']) && isset($_REQUEST['pass']) && !empty($_REQUEST['pass'])&& isset($_REQUEST['pass-confirm']) && !empty($_REQUEST['pass-confirm']) ){
    $pass=password_hash($_REQUEST['pass'], PASSWORD_BCRYPT);
    	$sql="INSERT INTO user(email,pass) VALUES(:email,:pass)";
		$stm=$link->prepare($sql);
	   $stm->execute(array(":email"=>$_REQUEST['email'],":pass"=>$pass));
	   
        if($stm->rowCount()){
            $status=array("status"=>"succes","action"=>"register","stat"=>true);
        }
        
        echo json_encode($status);
    
    
}else{
    echo json_encode($status);
    
}