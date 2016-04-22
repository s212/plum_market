<?php
include("queries.php");
class controller 
{
	private $query;
	
	public function __construct()
	{  
		$this->query=new query();
	}
	public function creat_Account()
	{
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="signup")
        {
        $username= $_POST["name"];
        $email= $_POST["email"];
        $password=$_POST["password"]; 
        $numResults= $this->query->Get_Emails($email);

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
			
			$this->query->creat_Account($username,$password ,$email,1);
		  }
	
        }
        } 
     }
	}
	public function View_Products()
	{
		$result = $query->View_Products();
        $rowcount=mysqli_num_rows($result);
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
  
    
       // echo "NAME: " . $row["Name"]. "Description: " . . " Price,Num" . $row["Price,Num"]. "<br>";
	   {
	?>
	<div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <!--  <img src="http://placehold.it/320x150" alt="">-->
                                    <img src="rsz_d.jpg" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right"><?php echo "$" .$row["Price"]; ?></h4>
                                        <h4>
                                            <a href="#"><?php echo $row["Name"];?></a>
                                        </h4>
                                        <p><?php echo $row["Description"];?></p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right">12 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>

                                        </p>
                                    </div>
                                </div>
                            </div>

<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
            
	}
	
	
	
}

?>
