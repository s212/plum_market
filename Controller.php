<?php
include("queries.php");
class controller 
{
	private $query;
	
	public function __construct()
	{  
		$this->query=new query();
	}
	public function creat_Account()
	{
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="signup")
        {
        $username= $_POST["name"];
        $email= $_POST["email"];
        $password=$_POST["password"]; 
        $numResults= $this->query->Get_Emails($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            echo $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
	      if($username!=""&&$email!=""&&$password!="")
		  {
			
			$this->query->creat_Account($username,$password ,$email,1);
		  }
	
        }
        } 
     }
	}
public function View_Products()
	{
		$result = $this->query->View_Products();
		return $result ;
   
	}
	public function View_Company()
	{
		$result = $this->query->View_Company();
		return $result ;
   
	}
?>
