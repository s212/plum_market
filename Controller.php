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
			
			$this->query->creat_Account($username,$password ,$email);
		  }
	
        }
        } 
     }
	}
	public function Log_In()
	{
		//$result = $this->query->Log_In($username,$password);
		
   
	}
	public function View_Acc()
	{
		$result = $this->query->View_Acc();
		return $result ;
		
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
		public function Delete_Company()
	{
		$result = $this->query->Delete_Company();
		return $result ;
   
	}
	public function Add_Product()
	{
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="addproduct")
        {
                $name= $_POST["name"];
                $price= $_POST["price"];
                $quantity=$_POST["quantity"]; 
		$type=$_POST["type"];
		$description=$_POST["description"];
		$countery=$_POST["countery"];
		$company=$_POST["company"];
		$row=mysqli_fetch_assoc($this->query->Get_Company_Id($company));
		$result=$this->query->Add_Product($name ,$description,$price,$quantity,0,$type,$countery,$row["Id"] );
	        if($result)
		  
					echo "Company Added successfully";
		else 
		                        echo "faild";
		}
	
        }
        
	}
}
?>
