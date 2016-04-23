<?php
 

 session_start();
  
?>
<?php
include("Controller.php");
$controller=new controller();
$controller->View_Acc();
?>