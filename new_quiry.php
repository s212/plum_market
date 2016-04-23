<?php
include("connection.php");
class  foo
{
	private $conn;
	private $db;
	public function __construct()
	{
        $this->db = Database::getInstance();
     
	$this->conn = $this->db->getConnection(); 
        }
}
class Account extends  foo
{
  
  
  public function creat_Account($UserName,$password ,$Email)
	{
		$sql="INSERT INTO Account (UserName,password ,Email) Values ('$UserName','$password' ,'$Email')";
            $result = mysqli_query($this->conn, $sql);
			if($result)
					echo "Account created successfully";
	mysqli_close($conn);

	}
	public function Get_Emails($email)
	{
		
            $sql = "SELECT email FROM Account where Email='".$email."'";
            $result = mysqli_query($this->conn, $sql);
			$numResults = mysqli_num_rows($result);
			mysqli_close($conn);
            return $numResults;
	}
  
}
class Product extends  foo
{
  public function View_Products()
	{
		
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($this->conn, $sql);
            mysqli_close($conn);
			return $result;
	}
  
  public function Add_Product($Name ,$Description ,$Price,$Num ,$Rate , $P_Type,$Country,$Company_Id )
	{
		
            $sql = "INSERT INTO Product (Name ,Description ,Price,Num ,Rate , P_Type,Country,Company_Id  ) Values ('$Name' ,'$Description' ,'$Price','$Num','$Rate' , '$P_Type','$Country','$Company_Id' )";
            $result = mysqli_query($this->conn, $sql);
		     mysqli_close($conn);
			 return $result;
	}
}
class Company extends  foo
{
  public function View_Company()
	{
		
            $sql = "SELECT Name FROM Company";
            $result= mysqli_query($this->conn, $sql);
            mysqli_close($conn);
			return $result;
	}
	public function Get_Company_Id($Name)
	{
		
            $sql = "SELECT Id FROM company where Name='".$Name."'";
            $result = mysqli_query($this->conn, $sql);
			mysqli_close($conn);
			return $result;
	}
	
		public function  Delete_Company()
		{
			
			
		}
}
class Offer extends  foo
{}
class Gallary extends  foo
{}
class Pipes extends  foo
{}
?>