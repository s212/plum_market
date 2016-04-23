<?php
  
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
		 <form action = "" method = "post">
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
			<input  name="action1" type="submit" value="SIGN IN">
			
			
			
			<!--<div class="clear"></div>-->
			
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
