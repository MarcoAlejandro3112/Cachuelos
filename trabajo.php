<?php 
$data=array();
array_push($data,array("id"=>"1","nombre"=>"Jose","anios"=>"15"));
array_push($data,array("id"=>"2","nombre"=>"Maria","anios"=>"14"));
array_push($data,array("id"=>"3","nombre"=>"Roberto","anios"=>"10"));
array_push($data,array("id"=>"4","nombre"=>"Juanito","anios"=>"19"));
array_push($data,array("id"=>"5","nombre"=>"Pepe","anios"=>"16"));
array_push($data,array("id"=>"6","nombre"=>"Velasco","anios"=>"70"));

echo json_encode($data);