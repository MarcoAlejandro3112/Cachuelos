<?php
require_once('connection.php');



$status= array("status"=>"error","action"=>"register","stat"=>false);
if(isset($_FILES)  &&  isset($_REQUEST['name']) && !empty($_REQUEST['name']) && isset($_REQUEST['surname']) && !empty($_REQUEST['surname']) && isset($_REQUEST['id']) && !empty($_REQUEST['id']) && isset($_REQUEST['tel']) && !empty($_REQUEST['tel']) && isset($_REQUEST['country']) && !empty($_REQUEST['country']) && isset($_REQUEST['country']) && !empty($_REQUEST['country']) && isset($_REQUEST['profile']) && !empty($_REQUEST['profile'])){
    			
    			
           # $source=$_FILES['image']['tmp_name'];
            if(!is_uploaded_file($_FILES['image']['tmp_name'])){

                echo "Error al procesar la imagen";
                    exit();
            }
           # $dest=__DIR__."/upload/".$_FILES['image']['name'];

    	
        
        
        try{
		session_start();
        	
		$sql="INSERT INTO user_details(email,name,surname,phone,description,tyid,document,image,country) VALUES(:email,:name,:surname,:phone,:descr,:tyid,:doc,:img,:country)";
        $stm=$link->prepare($sql);
        session_start();

        $stm->execute(":email"=>$_SESSION['email'],":name"=>$_REQUEST['name'],":surname"=>$_REQUEST['surname'],":phone"=>$_REQUEST['tel'],":descr"=>$_REQUEST['description'],":tyid"=>$_REQUEST['profile'],":doc"=>$_REQUEST['id'],":img"=>date('Ymhs').$_FILES['image']['name']),":country"=>$_REQUEST['country']);

     
        if($stm->rowCount()){
         $target_path = __DIR__."/uploads/";
        $target_path = $target_path . date('Ymhs').basename( $_FILES['image']['name']);

            session_unset();
            session_destroy();

            header("Location: index.php")

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
         echo "El archivo ". basename( $_FILES['image']['name']). " ha sido subido";
        } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        }
       
        
        #echo json_encode($status);
    }catch(PDOException $e){
        $status=array("status"=>$e->getMessage(),"action"=>"register1","stat"=>false);
            echo json_encode($status);

            echo "string";
    }
    
}else{
    echo json_encode("status");
    
}/* */
        #$stm->execute();
		/*$stm->execute(array(":email"=>$_SESSION['email'],":name"=>$_REQUEST['name'],":surname"=>$_REQUEST['surname'],":phone"=>$_REQUEST['tel'],":descr"=>$_REQUEST['description'],":cat"=>$_REQUEST['profile'],":document"=>$_REQUEST['id'],":img"=>date('Ymhs').$_FILES['image']['name']));
			echo var_dump($stm->fetchAll());

			IfgndgdfgNSERT INTO user_deta(uid,name,surname,phone,description,tyid,document,image) VALUES((SELECT uid FROM user WHERE email=:email),:name,:surname,:phone,:descr,:cat,:document,:img)";
        $stm=$link->prepare($sql);

		if($stm->rowCount()){
 		 $target_path = __DIR__."/uploads/";
		$target_path = $target_path . date('Ymhs').basename( $_FILES['image']['name']);
 		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
 		 echo "El archivo ". basename( $_FILES['image']['name']). " ha sido subido";
		} else{
		echo "Ha ocurrido un error, trate de nuevo!";
		}*/


		/*$sql="INSERT INTO user_details(uid,name,surname,phone,description,tyid,document,image) VALUES((SELECT uid FROM user WHERE email=:email),:name,:surname,:phone,:descr,:tyid,:document,:img)";
        $stm=$link->prepare($sql);
	   $stm->execute(array(":email"=>$_SESSION['email'],":name"=>$_REQUEST['name'],":surname"=>$_REQUEST['surname'],":phone"=>$_REQUEST['tel'],":descr"=>$_REQUEST['description'],":tyid"=>$_REQUEST['profile'],":document"=>$_REQUEST['id'],":img"=>date('Ymhs').$_FILES['image']['name']));
            
            
	    if($stm->rowCount()){
	    	$status=array("status"=>"succes","action"=>"register","stat"=>true);
	    	session_unset();
            session_destroy();
            header("Location:index.php");
        }

	   /*if(! @move_uploaded_file($source, $dest)){

        echo "Error al subir la imagen";

        exit;
       } }*/
