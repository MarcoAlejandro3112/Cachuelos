<?php

/**
 * @author Gerard Altamirano
 * This document already contains the connection!
 */
 
 require_once('../config/connection.php');

 $db= new Database();
    class Post{

	private $pid;
	private $uid;
	private $title;
	private $content;
	private $category;
	private $image;
	private $date;
	private $payment;


	public function __construct()
	{
	}

	/**
	 * @return type
	 */
	public function getPid()
	{
	    return $this->pid;
	}

	/**
	 * @param type $pid
	 */
	public function setPid($pid)
	{
	    $this->pid = $pid;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getUid()
	{
	    return $this->uid;
	}

	/**
	 * @param type $uid
	 */
	public function setUid($uid)
	{
	    $this->uid = $uid;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getTitle()
	{
	    return $this->title;
	}

	/**
	 * @param type $title
	 */
	public function setTitle($title)
	{
	    $this->title = $title;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getContent()
	{
	    return $this->content;
	}

	/**
	 * @param type $content
	 */
	public function setContent($content)
	{
	    $this->content = $content;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getCategory()
	{
	    return $this->category;
	}

	/**
	 * @param type $category
	 */
	public function setCategory($category)
	{
	    $this->category = $category;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getImage()
	{
	    return $this->image;
	}

	/**
	 * @param type $image
	 */
	public function setImage($image)
	{
	    $this->image = $image;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getDate()
	{
	    return $this->date;
	}

	/**
	 * @param type $payment
	 */
	public function setPayment($payment)
	{
 	   $this->payment = $payment;
 	   return $this;
	}

	public function Hello($name)
	{
			echo "Hello, ".$name;
	}

	public function ListarPosts()
	{
    $datos=array("status"=>"error","action"=>"list","stat"=>false);

		global $db,$resp;
		$db->Query('SELECT title,image,u.email email ,content,c.name category,post_date,payment FROM post p INNER JOIN user u ON p.user=u.uid INNER JOIN category c ON p.catid=c.catid');
        
        if($resp){
        
         foreach($result as $row){
          
            array_push($datos,array("title"=> $row['title'], "user"=> $row['email'], "content"=> $row['content'], "category"=> $row['category'], "imagen"=> $row['image'],"date"=>$row['post_date'],"payment"=>$row['payment']));
            }
        }
        
       echo(json_encode($datos));
      
	}
};