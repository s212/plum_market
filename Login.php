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
<?php
   include("conductivity.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Id FROM account WHERE  password = '$mypassword' AND   UserName = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         $message = "You are logged in ";
		 header("location: home.php");
		 echo $message;
         
      }else {
          $error = "Sorry Your Login Name or Password is invalid , try again";
		 
		 echo "<script type='text/javascript'>alert('$error');</script>";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      

      <link rel="stylesheet" href="L_css/style.css">
	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      
   </head>
   
   <head>
	
	<link rel="stylesheet" href="css/style.css">
	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Dark Sign In Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>

<body>
    <h1>Let's get started</h1>
    <div class="container">
        <h2>Sign In</h2>
		 <form action = "" method = "post">>
			<input type="text" name = "username" class="name" placeholder="Username" required="">
			<input type="password" name = "password" class="password" placeholder="Password" required="">
			<ul>
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
            <a href="#">Forgot Password?</a><br>
			<div class="clear"></div>
			<input type="submit" value="SIGN IN">
		</form>
	</div>
	<div class="footer">
		
	</div>
	  <?php
include("Controller.php");
$controller=new controller();
$controller->Log_In();
?>

   </body>
</html>

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
