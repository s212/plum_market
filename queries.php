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
	public function creat_Account($UserName,$password ,$Email ,$Id)
	{
		$sql="INSERT INTO Account (UserName,password ,Email ,Id ) Values ('$UserName','$password' ,'$Email' ,12)";
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
		
            $sql = "SELECT * FROM Company";
            $result = mysqli_query($this->conn, $sql);
			return $result;
	}
	public function Get_Emails($email)
	{
		
            $sql = "SELECT email FROM Account where Email='".$email."'";
            $result = mysqli_query($this->conn, $sql);
			$numResults = mysqli_num_rows($result);
            return $numResults;
	}
	
	
	
}
?>
