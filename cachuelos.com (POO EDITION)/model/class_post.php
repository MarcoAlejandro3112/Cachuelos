<?php

/**
 * author Gerard Altamirano
 */
class Post{

	private $pid;
	private $uid;
	private $title;
	private $content;
	private $category;
	private $image;
	private $date;
	private $payment;


	public function __construct($pid,$uid,$title,$content,$category,$image,$date,$payment)
	{
		$this->pid = $pid;
		$this->uid=$uid;
		$this->title=$title;
		$this->content=$content;
		$this->category=$category;
		$this->image=$image;
		$this->date=$date;
		$this->payment=$payment;
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
};