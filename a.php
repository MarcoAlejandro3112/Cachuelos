<?php
require_once('connection.php');
/*
$status=array("status"=>"error","action"=>"login","stat"=>false);

if(isset($_REQUEST['email']) && !empty($_REQUEST['email']) && isset($_REQUEST['pass']) 
&& !empty($_REQUEST['pass']) ){


    $sql="SELECT u.email,ud.udid,ud.uid,ud.name,ud.surname,ud.phone,ud.description,ut.name userType,
    ud.document FROM user_details ud,user u , user_type ut WHERE  u.email=:e  
    and u.pass=:p and ud.tyid=ut.utid ";//Falta implementar el sistema de rating
       $stm = $link->prepare($sql);
        $stm->execute(array(":e"=>$_REQUEST['email'],":p"=>$_REQUEST['pass']));
   $result= $stm->fetchAll(); 
   $user_data=array();
        if($stm->rowCount()){
            $status=array("status"=>"succes","action"=>"login","stat"=>true);
                      
            foreach($result as $row){
                    array_push($user_data,array("email"=>$row['email'], "name"=>$row['name'], 
                    "surname"=>$row['surname'],"phone"=>$row['phone'],"description"=>$row['description'],
                    "userType"=>$row['userType'],"document"=>$row['document']));
            }
            echo(json_encode($user_data));
        }

    echo(json_encode($status));
}else{

    echo(json_encode($status));

}*/

/*require_once('connection.php');

session_start();
echo $_SESSION['user'];*/


$str = "fisica,programacion,presencial,spacex";
$data = array();

$exstr=explode(",",$str);
for($i=0;$i<count($exstr);$i++){

  $dat=$i."=>".$exstr[$i]; 
  echo $dat;
}

echo json_encode($exstr);