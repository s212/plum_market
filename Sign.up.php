<?php

 include("Sign_up.html");
$servername = "localhost";
$username = "root";
$password = "F7CPv6hveQexqrL4";
$dbname = "plump_market";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: ";
} 



  
    
if(isset($_POST['action']))
{          
  if($_POST['action']=="signup")
    {
        $username= $_POST["name"];
        $email= $_POST["email"];
        $password=$_POST["password"];
        $query = "SELECT email FROM Account where Email='".$email."'";
        $result = mysqli_query($conn,$query);
        $numResults = mysqli_num_rows($result);
		
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
			$sql="INSERT INTO Account (UserName,password ,Email ,Id ) Values ('$username','$password' ,'$email' ,11)";
            $result = mysqli_query($conn, $sql);
			if($result)
					echo "inserted sucsse";
			
		  }
	
         }
} 
}
mysqli_close($conn);
?>