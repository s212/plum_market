<?php
 include("Login.html");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plump_market";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: ";
} 


$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
  
    
    if(isset($_POST['action']))
{          
    if($_POST['action']=="SIGN IN")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['name']." Login Sucessfully!!";
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
	
	
	 
mysqli_close($conn);
?>