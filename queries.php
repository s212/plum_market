<?php
include("connection.php");
class query 
{
	private $conn;
	private $db;
	public function __construct()
	{
    $this->db = Database::getInstance();
     
	$this->conn = $this->db->getConnection(); 
    

		 
	}
public function creat_Account($UserName,$password ,$Email)
	{
		$sql="INSERT INTO Account (UserName,password ,Email) Values ('$UserName','$password' ,'$Email')";
            $result = mysqli_query($this->conn, $sql);
			if($result)
					echo "Account created successfully";
   

	}
	public function View_Products()
	{
		
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($this->conn, $sql);
         
			return $result;
	}
	public function View_Company()
	{
		
            $sql = "SELECT Name FROM Company";
            $result= mysqli_query($this->conn, $sql);
     
			return $result;
	}
	public function Get_Emails($email)
	{
		
            $sql = "SELECT email FROM Account where Email='".$email."'";
            $result = mysqli_query($this->conn, $sql);
			$numResults = mysqli_num_rows($result);
		
            return $numResults;
	}
	public function Add_Product($Name ,$Email,$Phone_Num )
	{
		
            $sql = "INSERT INTO Product (Name ,Email,Phone_Num  ) Values ('$Name' ,'$Email' ,'$Phone_Num' )";
            $result = mysqli_query($this->conn, $sql);
		  
			 return $result;
	}
	public function Add_Company($Name ,$Description ,$Price,$Num ,$Rate , $P_Type,$Country,$Company_Id )
	{
		
            $sql = "INSERT INTO Product (Name ,Description ,Price,Num ,Rate , P_Type,Country,Company_Id  ) Values ('$Name' ,'$Description' ,'$Price','$Num','$Rate' , '$P_Type','$Country','$Company_Id' )";
            $result = mysqli_query($this->conn, $sql);
		     
			 return $result;
	}
	
	public function Log_In($myusername,$mypassword)
	{
		$sql = "SELECT Id FROM account WHERE  password = '".$mypassword."' AND   UserName = '".$myusername."'";
            $result = mysqli_query($this->conn, $sql);
			if($result)
					echo "You are logged in";
				else 
				{
					 $error = "Sorry Your Login Name or Password is invalid , try again";
		               echo $error;
				}
				
				

	}
	public function View_Acc()
	{
		$sql = "SELECT Id  FROM account";
        $result = mysqli_query($this->conn, $sql);
		return $result;
			
			
	
	}
	
	
	
	public function Get_Company_Id($Name)
	{
		
            $sql = "SELECT Id FROM company where Name='".$Name."'";
            $result = mysqli_query($this->conn, $sql);
	
			return $result;
	}
	
		public function  Delete_Company($Name)
		{
			$sql=" DELETE FROM company WHERE Name='".$Name."'";
			$result = mysqli_query($this->conn, $sql);
		
			return $result;
		}
}
?>
