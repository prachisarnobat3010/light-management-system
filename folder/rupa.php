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
                                <a href="dashbord.php">Dashboard</a>
                            </li>
                            <li class="active">   
                                <a href="presenty.html">category</a>
                            </li>
                            <li>
                                <a href="department.html">product</a>
                            </li>
							<li>
                                <a href="order.html">order</a>
                            </li>
							<li>
                                <a href="supplier.html">supplier</a>
                            </li>
							<li>
                                <a href="supplier.html">customer</a>
                            </li>
							<li>
                                <a href="worker.html">worker</a>
                            </li>
							<li>
                                <a href="presenty.html">presenty</a>
                            </li>
							<li>
                                <a href="salary.html">salary</a>
                            </li>
							<li>
                                <a href="bill.html">bill</a>
                            </li>
							<li>
                                <a href="feedback.html">feedback</a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
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
    <div class="card bg-primary">
      <div class="card-body text-center">
	   <p class="card-text">total no of product</p>
	  <?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select count(*)from product");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
   
		 <p class="card-number"><?=$record[0]?></p>
		 
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text">total no of category</p>
		 <?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select count(*)from category");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><?=$record[0]?></p>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">total no of customer order</p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*) from user where user_type='customer'");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><?=$record[0]?></p>
      </div>
    </div>
    <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">total no of supplier order</p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*)from company");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><?=$record[0]?></p>
      </div>
    </div>  
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">total no of worker</p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"select COUNT(*)from user where user_type='worker'");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><?=$record[0]?></p>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
        <p class="card-text">todays order</p>
		<?php
	 $con=Database::getCon();
	 $data=mysqli_query($con ,"SELECT count(*) FROM `order` WHERE date=current_date()");
     $record=mysqli_fetch_array($data);
     	 
	  
	  ?>
	   <p class="card-number"><?=$record[0]?></p>
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