<?php
header('Access-Control-Allow-Origin:*');

/**
 * @author Gerard Altairano
 */     
class Database 
{

      private $host="localhost";
      private $suser="id7557222_cachuelos";
      private $spass="123456";
      private $db="id7557222_cachuelos";
      private $link;
  
  function __construct()
  {
    try{  
      
       $this->link = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->suser, $this->spass);
 
         }catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
        die();
        }
  }

   /* public function Connect(){
 
    }*/


    public function Query($sql)
    {
       // global $resp,$stm;
        $resp=true;
      $stm=$this->link->prepare($sql);
       $stm->execute();
       
      /*if($stm->rowCount()===0){
         $resp=false;
      die();
      }*/
      return $resp;
     
   }
}

