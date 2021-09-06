<?php
include("condb.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dashboard- Bhavani lights</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/custom.js"></script>

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">

</head>
<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border">
                <div class="container-fluid">
                     <img src="images/logo.png" alt="" class="float-left" height="65" width="65">

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                        <li class="dropdown nav-item">
                                                <a class="nav-link" data-toggle="dropdown">
                                                  <span> Eknath sarnobat (Admin) <img src="icons/chevron-arrow-down.png"></span> <img src="images/profile-image.jpg" height="50" width="50" class="rounded-circle">
                                                </a>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Profile</a>
                                                  <a class="dropdown-item" href="#">Change Password</a>
                                                  <a class="dropdown-item" href="#">Logout</a>
                                                </div>
                                                
                                            </li>
                            </ul>
                        </div>
                </div>
        </nav>
    </section>

    <section>
            <div class="wrapper">
                <nav id="sidebar" class="">
                     <ul class="list-unstyled">
							<li>
                                <a href="dashboard.php">dashboard</a>
                            </li>
                            <li class="active">   
                                <a href="category.php">category</a>
                            </li>
                            <li>
                                <a href="product.php">product</a>
                            </li>
							<li>
                                <a href="order.php">order</a>
                            </li>
							<li>
                                <a href="company.php">company</a>
                            </li>
							<li>
                                <a href="worker.php">worker</a>
                            </li>
							<li>
                                <a href="customer.php">customer</a>
                            </li>
							<li>
                                <a href="presenty.php">presenty</a>
                            </li>
							<li>
                                <a href="salary.php">salary</a>
                            </li>
							
                            <li>
                                <a href="profile.php">Profile</a>
                            </li>
                    </ul>
            </nav>
            <div id="content">
                <div class="row" style="margin-bottom:20pt">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <h3 style="margin-left:10pt">dashboard</h3>
                </div>

                <div class="card-columns">
    <div class="card bg-primary"style=height:200px>
      <div class="card-body text-center">
	   <p class="card-text"><b style="font-size:20px">total no of product</b></p>
	  <?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select count(*)from product");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
   
		 <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
		 
      </div>
    </div>
    <div class="card bg-warning"style=height:200px>
      <div class="card-body text-center">
        <p class="card-text"><b style="font-size:20px">total no of category</b></p>
		 <?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select count(*)from category");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
      </div>
    </div>
    <div class="card bg-success"style=height:200px>
      <div class="card-body text-center">
        <p class="card-text"><b style="font-size:20px">total no of customer order</b></p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*) from user where user_type='customer'");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
      </div>
    </div>
    <div class="card bg-danger"style=height:200px>
      <div class="card-body text-center">
        <p class="card-text"><b style="font-size:20px">total no of supplier order</b></p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*)from company");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
      </div>
    </div>  
    <div class="card bg-light" style=height:200px>
      <div class="card-body text-center">
        <p class="card-text"><b style="font-size:20px">total no of worker</b></p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*)from user where user_type='worker'");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
      </div>
    </div>
    <div class="card bg-info"style=height:200px>
      <div class="card-body text-center">
        <p class="card-text" ><b style="font-size:20px">todays order</b></p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"SELECT count(*) FROM `order` WHERE date=current_date()");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><b style="font-size:35px"><?=$record[0]?></b></p>
      </div>
    </div>
  </div>
</div>

               

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>

		
		
		

</body>
</html>