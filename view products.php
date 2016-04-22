<?php
  include("Home.html");
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


$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);
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
)


mysqli_close($conn);
?>