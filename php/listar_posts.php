<?php
require_once('connection');


	$sql="SELECT title,u.name,content,image,c.name,date FROM u user,c category,p post WHERE p.user=u.uid AND p.catid=c.catid"
		$result=$link->prepare($sql);
	    $result->exec();

        $datos = array();
        
        foreach($result as $row){
          
            array_push($datos,array("id"=> $row['id'], "name"=> $row['name'], "correo"=> $row['email'], "pass"=> $row['pass'], "imagen"=> $row['img']));
        }
        
       
        print('<pre>'.json_encode($datos).'</pre>');