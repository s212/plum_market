<?php
include("new_quiry.php");
class controller 
{
	private $Account;
	private $Company;
	private $Product;
	private $Offer;
	private $Gallary;
	private $Pipes;
	public function __construct()
	{  
		$this->Account=new Account();
		$this->Company=new Company();
		$this->Product=new Product();
		$this->Offer=new Offer();
		$this->Pipes=new Pipes();
		
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
        $numResults= $this->Account->Get_Emails($email);

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
			
			$this->Account->creat_Account($username,$password ,$email);
		  }
	
        }
        } 
     }
	}
public function Log_In()
	{
		
        if(isset($_POST["action1"]) )
      {     
          
  
        if($_POST['action1']=="SIGN IN")
        {
		
		 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
       //username and password sent from form 
     
     
		 $username= $_POST["username"];
         $password =  $_POST["password"];
		  $_SESSION['username']= $username;
		  $_SESSION['logged']= true;
         $result = $this->query->Log_In($username,$password);
		 
				
      
	 
	  
	  }
	 
		  
         
	  }
		
				
				
	  
                
        
		
	  }
		
   
	}
	
	
	public function View_Acc()
	{
		$result = $this->Account->View_Acc();
		return $result ;
		
	}
	
        public function View_Products()
	{
		$result = $this->Product->View_Products();
		return $result ;
   
	}
	public function View_Company()
	{
		$result = $this->Company->View_Company();
		return $result ;
   
	}
	public function View_s_Company()
	{
		$content= isset($_GET['content'])?$_GET['content']:'';
		
		$result= $this->Company->View_s_Company($content);
		
		
		return $result;
		
		
	}
	
	public function Add_Product()
	{
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="Add")
        {
                $name= $_POST["name"];
                $price= $_POST["price"];
                $quantity=$_POST["quantity"]; 
		$type=$_POST["type"];
		$description=$_POST["description"];
		$countery=$_POST["countery"];
		$company=$_POST["company"];
		$row=mysqli_fetch_assoc($this->Company->Get_Company_Id($company));
		$result=$this->Product->Add_Product($name ,$description,$price,$quantity,0,$type,$countery,$row["Id"] );
	        if($result)
		  
					echo "Company Added successfully";
		else 
		                        echo "faild";
		}
	
        }
        
	}
public function Add_Company()
	{
		if(isset($_POST['action']))
      {          
      
       
        if($_POST['action']=="Add_c")
        {
       
       
                $name= $_POST["name"];
                $phone_num=$_POST["phone_num"];
                $email=$_POST["email"]; 
                $Describtion =$_post["Describtion"];
                echo $Describtion;
		$result=$this->Company->Add_Company($name,$phone_num,$email,$Describtion);
	        if($result)
		  
				echo "Company Added successfully";
		else 
		                        echo "faild";
		
	}
        }
        
	}
	 public function Get_Product_Names()
	{   $error = "Sorry Your Login Name or Password is invalid , try again";
		$result = $this->Product->Get_Product_Names();
		if($result)
		  
					echo "Company Added successfully";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
		return $result ;
   
	}
	
	public function Delete_Product()
	
	{  $error="deletion failed";
	   $success="product deleted  successfully";
		if(isset($_POST['action']))
      {          
        if (!empty($_POST['action']=="Delete Product"))
        {
            $name= $_POST["Product"];
			
			$result=$this->Product->Delete_Product($name);
	   if($result)
		  
		  echo "<script type='text/javascript'>alert('$success');</script>";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
        }
            
	 }
	}
   
public function Delete_Company()
	
	{  $error="deletion failed";
	   $success="Company deleted  successfully";
		if(isset($_POST['action2']))
      {          
        if($_POST['action2']=="Delete Company")
        {
            $name= $_POST["company2"];
			
			$result=$this->Company->Delete_Company($name);
	   if($result)
		  
		  echo "<script type='text/javascript'>alert('$success');</script>";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
        }
            
	 }
	}
        
	
}
?>
