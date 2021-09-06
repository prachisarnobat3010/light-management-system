<?php
include("condb.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>product- Bhavani lights</title>
    
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
 
<div class="container">
  
  
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


</body>
</html>
