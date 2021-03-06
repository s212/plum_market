<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    



    <!--Image which is background-->
    <style>
        body {
            background: url('36.jpg') no-repeat top;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            color :red;
            background-attachment:scroll;
            background-position:top;

        }
    </style>



</head>

<body>

<?php 
include("Controller.php");
$controller=new controller();

?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->


            <!-- Header -->
                
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Sign_up.html">Sign up</a>
                    </li>
                    <li>
                        <a href="Login.html">Login</a>
                    </li>

                    <li>
                        <a href="Acc_Inf.html">About</a>
                    </li>
                    <li>
                        <a href="#">Posts</a>
                    </li>
                    <li>
                        <a href="Offers.html">Offers</a>
                    </li>
                    <li>
                        <a href="Gallery.html">Galleries</a>
                    </li>


                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">plumbing Companies</p>
                <div class="list-group">
           <?php 
        $result=$controller->View_Company();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result))

    
         {?>
          <a href="Company_1.php?content=<?php echo $row["Name"];?>" class="list-group-item"><?php echo $row["Name"];?></a>
				
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>  
             

                    <br />
                    <p class="lead">plumbing Galaries</p>
                    <div class="slide-image">
                        <a href="Gallery" class="list-group-item">Galary 1</a>
                        <a href="#" class="list-group-item">Galary 2</a>
                        <a href="#" class="list-group-item">Galary 3</a>
                    </div>
                </div>
            </div>


           



                    <div class="col-md-9">

                        <div class="row carousel-holder">

                            <div class="col-md-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img class="slide-image" src="rsz_5.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="rsz_6.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="rsz_5.jpg" alt="">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
<?php
    
    $result=$controller->View_Products();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
 
         {?>
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
 ?>         
</body>

</html>
