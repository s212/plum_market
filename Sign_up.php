<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="Sign_css/style.css">
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
    
        <div id="tabs-2" class="container">
        <h2>Sign up</h2>
		<form action="" method="post">
			<input name="name" type="text" class="name" placeholder="First name" required="">
   			<input name="email" type="text" class="name" placeholder="Email address" required="">
            <input name="password" type="password" class="password" placeholder="Password" required="">
            <!--<input type="password" class="password" placeholder="Re-enter Password" required="">-->
            <input name="action" type="hidden" value="signup"> 

			
			<!--<div class="clear"></div>-->
			<input type="submit" value="SIGN UP">
		</form>
	</div>
	<div class="footer">
		
	</div>
	<div class="footer">
		
	</div>
<?php
include("Controller.php");
$controller=new controller();
$controller->creat_Account();
?>
</body>
</html>
