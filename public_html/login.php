<?php
/**
 * Nota:
 * Los usuarios sin contenido en 'user_details' no pueden loguearse
 **/
require_once('connection.php');
require_once('observador.php');
$status=array("status"=>"error","action"=>"login","stat"=>false);
if(isset($_REQUEST['email']) && !empty($_REQUEST['email']) && isset($_REQUEST['pass']) 
&& !empty($_REQUEST['pass']) ){
       
    //Traer la contraseña
    $crypt="SELECT pass FROM user WHERE email=:e";
       $stm1 = $link->prepare($crypt);
       $stm1->execute(array(":e"=>$_REQUEST['email']));
       
      
   $result1= $stm1->fetch(); 
   $user_data=array();
   //encriptar la contraseña que ingresa el usuario
       $inpass=crypt($_REQUEST['pass'],$result1['pass']);
   
   //comparar passwords
   if($inpass == $result1['pass']){

       
    //Para traer los datos del usuario
    $sql="SELECT u.email,ud.udid,ud.uid,ud.name,ud.surname,ud.phone,ud.description,ut.name userType, ud.document FROM user_details ud INNER JOIN user u on ud.uid=u.uid INNER JOIN user_type ut ON ud.tyid=ut.utid WHERE u.email=:e and pass=:p";//Falta implementar el sistema de rating

    
       
    $stm=$link->prepare($sql);
    $stm->execute(array(":e"=>$_REQUEST['email'],":p"=>$inpass));
    $result=$stm->fetch();

        if($stm->rowCount()){
            $status=array("status"=>"succes","action"=>"login","stat"=>true);
                      //inicio de sesión
                       session_start();

                       $_SESSION['user']=$result['name']." ".$result["surname"];
                       $_SESSION['phone']=$result['phone'];
                       $_SESSION['email']=$result['email'];
                       $_SESSION['description']=$result['description'];
                       $_SESSION['document']=$result['document'];

                    //fin inicio de sesión
            
                    array_push($user_data,array("email"=>$result['email'], "name"=>$result['name'], 
                    "surname"=>$result['surname'],"phone"=>$result['phone'],"description"=>$result['description'],
                    "userType"=>$result['userType'],"document"=>$result['document']));
           
            array_push($user_data,$status);
            echo(json_encode($user_data));
        }
    }
    //echo(json_encode($status));
}else{
    echo(json_encode($status));
}