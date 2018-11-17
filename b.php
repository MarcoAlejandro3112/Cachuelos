<?php
header('Access-Control-Allow-Origin:*');
$data=array();
array_push($data,array("id"=>"1","nombre"=>"Sherk","genero"=>" Fantasy/Adventure","year"=>"2001"));
array_push($data,array("id"=>"2","nombre"=>"Sherk 2","genero"=>"Fantasy/Romance ","year"=>"2004"));
array_push($data,array("id"=>"3","nombre"=>"Iron Man","genero"=>"Science Fiction/Thriller","year"=>"2008"));
array_push($data,array("id"=>"4","nombre"=>"The Incredibles","genero"=>"Film franchise","year"=>"2004"));

echo json_encode($data);