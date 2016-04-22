<?php
include("connection.php")
class query 
{
	private $conn;
	
	public function __construct()
	{
		
	}
	public function creat_Account($UserName,$password ,$Email ,$Id)
	{
		$sql="INSERT INTO Account (UserName,password ,Email ,Id ) Values ('$username','$password' ,'$email' ,11)";
            $result = mysqli_query($conn, $sql);
			if($result)
					echo "Account created successfully";

	}
	public function View_Products()
	{
		
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($conn, $sql);
			return $result;
	}
	
	
	
}
?>