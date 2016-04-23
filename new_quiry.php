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
	public function Log_In($myusername,$mypassword)
	{
		$sql = "SELECT Id FROM account WHERE  password = '".$mypassword."' AND   UserName = '".$myusername."'";
            $result = mysqli_query($this->conn, $sql);
			if($result)
			{
					 $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
		
      if($count == 1) 
	  {
        
         $_SESSION['login_user'] = $myusername;
         $message = "You are logged in ";
		 header("location: After_Login.php");
		 echo $message;
         
      }
	  else 
	  {
          $error = "Sorry Your Login Name or Password is invalid , try again";
		 
		 echo "<script type='text/javascript'>alert('$error');</script>";
				
				

	}
}
	
  
}
	
	
	public function View_Acc()
	{
		//$sql = "SELECT Id  FROM account";
        //$result = mysqli_query($this->conn, $sql);
		//return $result;
		////
		
		
		$sql = "SELECT * "  . " FROM account" . " WHERE UserName=   '".$_SESSION["username"]."'";                //'$_SESSION['username']'";
        $result = mysqli_query( $this->conn , $sql);
        $rowcount=mysqli_num_rows($result);
		////////////////////////////////
		$rowcount=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) 
        {
          while($row = mysqli_fetch_assoc($result)) 
	      {
			  ?>
		
			username:  <?php echo $row["UserName"];?>
			</br>
									    </br>
                                        Password <?php echo $row["password"];?>
										
                                    </br>
									    </br>
                                   
                                        Email <?php echo $row["Email"];?></br>
										</br>
									    </br>
										ID <?php echo $row["Id"];?>
										</br>
			<?php	
		
	      }
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
	public function Get_Product_Names()
	{
		
            $sql ="SELECT Name FROM Product";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	public function Delete_Product($name)
	{
		
            $sql ="delete FROM Product where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
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
	
	public function Delete_Company($name)
	{
		
            $sql ="delete FROM company where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}

}
class Offer extends  foo
{}
class Gallary extends  foo
{}
class Pipes extends  foo
{}
?>
