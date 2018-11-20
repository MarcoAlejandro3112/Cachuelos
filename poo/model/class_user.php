<?php
require_once 'config/connection.php';
/**
 * @author Gerard Altamirano
 */
class User
{
	private $uid;
	private $email;
	private $pass;
	private $name;
	private $surname;
	private $phone;
	private $description;
	private $document;
	private $userType;

	


	function __construct($uid,$email,$pass,$name,$surname,$phone,$description,$document,$userType)
	{
		$this->uid=$uid;
		$this->email=$email;
		$this->name=$name;
		$this->surname=$surname;
		$this->phone=$phone;
		$this->description=$description;
		$this->document=$document;
		$this->userType=$userType;
	}

 #Getters and Setters

	/**
	 * @return type
	 */
	public function getEmail()
	{
	    return $this->email;
	}

	/**
	 * @param type $email
	 */
	public function setEmail($email)
	{
	    $this->email = $email;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getPassword()
	{
	    return $this->password;
	}

	/**
	 * @param type $Password
	 */
	public function setPassword($Password)
	{
	    $this->Password = $Password;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getName($name)
	{
	    return $this->name
	}

	/**
	 * @param type $name
	 */
	public function setName($name)
	{
	    $this->name = $name;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getSurname()
	{
	    return $this->surname;
	}

	/**
	 * @param type $surname
	 */
	public function setSurname($surname)
	{
	    $this->surname = $surname;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getPhone()
	{
	    return $this->phone;
	}

	/**
	 * @param type $phone
	 */
	public function setPhone($phone)
	{
	    $this->phone = $phone;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getDescription()
	{
	    return $this->description;
	}

	/**
	 * @param type $description
	 */
	public function setDescription($description)
	{
	    $this->description = $description;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getDocument()
	{
	    return $this->document;
	}

	/**
	 * @param type $document
	 */
	public function setDocument($document)
	{
	    $this->document = $document;
	    return $this;
	}

	/**
	 * @return type
	 */
	public function getUserType()
	{
	    return $this->userType;
	}

	/**
	 * @param type $userType
	 */
	public function setUserType($userType)
	{
	    $this->userType = $userType;
	    return $this;
	}

	#End Getters and Setters

	public function toString()
	{
		
		echo "User: ". $name;

	}

	#User methods
	public function Login($email,$pass)
	{
		$user_data=array();

		try{
		$sql="SELECT u.email,ud.udid,ud.uid,ud.name,ud.surname,ud.phone,ud.description,ut.name userType,
   		 ud.document FROM user_details ud,user u , user_type ut WHERE  u.email=:e  
    		and u.pass=:p and ud.tyid=ut.utid";

    		$stm=$link->prepare();
    		$stm->execute(array(":e"=>$email,":p"=>$pass));
    		$result= $stm->fetchAll(); 

        if($stm->rowCount()){
           
            foreach($result as $row){
                    array_push($user_data,array("email"=>$row['email'], "name"=>$row['name'], 
                    "surname"=>$row['surname'],"phone"=>$row['phone'],"description"=>$row['description'],
                    "userType"=>$row['userType'],"document"=>$row['document']));
            }

        
        }catch(PDOException $e){

        		$user_data=array_push($user_data,array("status"=>"error","action"=>"login","causedBy"=>$e->getMessage()));
        }

        return $user_data;

	}

	public function Register($email,$pass)
	{
		$stat=false;
		$sql="INSERT INTO user(email,pass) VALUES(:email,:pass)"
		$stm=$link->prepare();
		$result=$stm->execute(array(":email"=>$email,":pass"=>$pass));

		if ($result) {
			return $stat=true;			
		}

		return $stat;
		
	}

	public function RegisterDetails($name,$surname,$phone,$desc,$documentm,$userType)
	{
		
	}

	public function Post($uid,$title,$content,$category,$image,$date,$payment)
	{
		
	}
}