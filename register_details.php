<?php
require_once('connection.php');

session_start();
 $email =$_SESSION['email'];
$status= array("status"=>"error","action"=>"register","stat"=>false);
if(isset($_FILES)  &&  isset($_REQUEST['name']) && !empty($_REQUEST['name']) && isset($_REQUEST['surname']) && !empty($_REQUEST['surname']) && isset($_REQUEST['id']) && !empty($_REQUEST['id']) && isset($_REQUEST['tel']) && !empty($_REQUEST['tel']) && isset($_REQUEST['country']) && !empty($_REQUEST['country']) && isset($_REQUEST['country']) && !empty($_REQUEST['country']) && isset($_REQUEST['profile']) && !empty($_REQUEST['profile'])){
    			
 $sql='INSERT INTO user_details(user,name,surname,phone,descr,profile,document,country,img,date) VALUES(:us,:name,:surname,:pho,:des,:ty,:do,:co,:im,now())';

        $stm= $link->prepare($sql);
           
        
        try{$stm->execute(array(':us' =>$email,":name"=>$_REQUEST['name'],":surname"=>$_REQUEST['surname'],":pho"=>$_REQUEST['tel'] , ":des"=>$_REQUEST['description'],":ty"=>$_REQUEST['profile'],":do"=>$_REQUEST['id'],":co"=>"PE",":im"=>addslashes(file_get_contents($_FILES['uploadedfile']['tmp_name']))));

        if ($stm->rowCount()) {

            session_unset();
            session_destroy();
            echo "Exito!";
            /*if(!is_uploaded_file(addslashes(file_get_contents($_FILES['uploadedfile']['tmp_name'])))){

                echo "Error al procesar la imagen";
                    exit();
            }*/

             $target_path = "img/";
        $target_path = $target_path . addslashes(file_get_contents($_FILES['uploadedfile']['tmp_name']));
            echo "string";
            header("Location:index.php#openModal2");

           

        if(move_uploaded_file(addslashes(file_get_contents($_FILES['uploadedfile']['tmp_name'])), $target_path)) {
         echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido"; 
        } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        }
        }else {
            echo "Error!";
        }
        
        

          
    }catch(PDOException $e){
        $status=array("status"=>$e->getMessage(),"action"=>"register1","stat"=>false);
            echo json_encode($status);
                           
        
    }
    
}else{
    echo json_encode("status");
    
}