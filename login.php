<?php
/**
 * Nota:
 * Los usuarios sin contenido en 'user_details' no pueden loguearse
 **/
require_once('connection.php');

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
    $sql="SELECT ud.user,ud.name,ud.surname,ud.phone,ud.description,ud.document,ud.country FROM user_details ud,user u WHERE ud.user=:email LIMIT 1";//Falta implementar el sistema de rating

    
       
    $stm=$link->prepare($sql);
    $stm->execute(array(":email"=>$_REQUEST['email']));
    $result=$stm->fetch();
   
        if($result){
          //SOLO PARA ANDROID  $status=array("status"=>"succes","action"=>"login","stat"=>true);
                      //inicio de sesión

                       session_start();

                       echo $_SESSION['user']=$result['name']." ".$result["surname"]."<br>";
                       echo $_SESSION['phone']=$result['phone']."<br>";
                       echo $_SESSION['origin']=$result['user']."<br>";
                       echo $_SESSION['description']=$result['description']."<br>";
                       echo $_SESSION['document']=$result['document']."<br>";
                       echo $_SESSION['country']=$result['country'];
                        
                        sheader("Location:profile.php");

                    //fin inicio de sesión
            /*
                  array_push($user_data,array("user"=>$result['user'], "name"=>$result['name'], 
                    "surname"=>$result['surname'],"phone"=>$result['phone'],"description"=>$result['description'],
                    "userType"=>$result['userType'],"document"=>$result['document']));
           
            array_push($user_data,$status);
            echo(json_encode($user_data));*/
        }else{
          echo "error en  la consulta!";
        }
    }else{
      echo "Datos incorrectos!!";
    }
    //echo(json_encode($status));
}else{
    echo(json_encode($status));
}