<?php
require_once('connection.php');

$status=array("status"=>"error","action"=>"login","stat"=>false);

if(isset($_REQUEST['email']) && !empty($_REQUEST['email']) && isset($_REQUEST['pass']) 
&& !empty($_REQUEST['pass']) ){


    $sql="SELECT u.email,ud.udid,ud.uid,ud.name,ud.surname,ud.phone,ud.description,ut.name userType,
    ud.document,ud.rating FROM user_details ud,user u , user_type ut WHERE  u.email=:e  
    and u.pass=:p and ud.tyid=ut.utid ";
       $stm = $link->prepare($sql);
        $stm->execute(array(":e"=>$_REQUEST['email'],":p"=>$_REQUEST['pass']));

        if($stm->rowCount()){
            $status=array("status"=>"succes","action"=>"login","stat"=>true);            
        }

    echo($status);
}else{

    echo($status);

}