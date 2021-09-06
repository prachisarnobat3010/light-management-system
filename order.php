<?php
session_start();
include("classes/Order.php");

$order=new Order();
if(isset($_POST['Add']))
{
	
	$order->customer_name=$_POST['customer_name'];
	$order->order_type=$_POST['order_type'];
	$order->product_id=$_POST['product_id'];
	$order->quantity=$_POST['quantity'];
	$order->odate=$_POST['odate'];
    Order::addorder($order);
}
if(isset($_POST['update']))
{
	echo "<script>alert('')</script>";
	
	$order->customer_name=$_POST['customer_name'];
    $order->order_id=$_POST['order_id'];
	$order->order_type=$_POST['order_type'];
	$order->product_id=$_POST['product_id'];
	$order->quantity=$_POST['quantity'];
	$order->payment=$_POST['payment'];
	$order->odate=$_POST['odate'];
	
	
	Order::updateorder($order);
}
if(isset($_POST['delete']))
{
	
	$order->order_id=$_POST['uniqid'];
	Order::deleteorder($order);
	}
	
if(isset($_POST['print']))
{
	$_SESSION['order_id']=$_POST['order_id'];

	header("location:printing.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>order- Bhavani lights</title>
    
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
                                <a href="dashboard.php">Dashboard</a>
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
                            <h3 style="margin-left:10pt">order</h3>
                </div>

                 <div class="row" style="margin-bottom:20pt">
                    <a type="button" class="btn btn-primary" data-toggle='modal' data-target='#myModal' style='display:inline'>Add order</a>
                </div>

                <div class="row">
                    
                                 
                                
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
												 <th>custome name</th>
                                                <th> Order Type</th>
												<th> product name</th>
												<th> quantity</th>
												  <th>Payment</th>
                                                <th> Date of Order</th>
                                            
                                           
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										if($result=Order::selectOrder($order))
										{
											while($record=mysqli_fetch_array($result))
											{
												
										
                                            echo"<tr>
										<form method='post'name='form1'>
                                        <input type='hidden' name='uniq' value=".$record['orderid'].">
                                                <tr>
											     
												<td>".$record['orderid']."</td>
												<td>".$record['customer_name']."</td>
												<td>".$record['order_type']."</td>
												<td>".$record['product_name']."</td>
												<td>".$record['quantity']."</td>
												<td>".$record['payment']."</td>
												<td>".$record['date']."</td>
											
							
                                          <td><a href='#Modalview".$record['orderid']."' data-toggle='modal' data-target='#Modalview".$record['orderid']."' style='display:inline'><img src='icons/eye.png'></a>
                                                    <a href='#Modalupdate".$record['orderid']."' data-toggle='modal' data-target='#Modalupdate".$record['orderid']."' style='display:inline'><img src='icons/pencil-edit-button.png'></a>
                                                    <a href='#Modaldelete".$record['orderid']."' data-toggle='modal' data-target='#Modaldelete".$record['orderid']."' style='display:inline'><img src='icons/rubbish-bin.png'></a>
                                                </td>
												</form>
                                            </tr>";
											}
										}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sr No.</th>
												 <th>customer name</th>
                                                <th>Order Type</th>
												<th> product name</th>
												<th> quantity</th>
												  <th>Payment</th>
                                                <th>Date of Order</th>
                                               <th>Action</th>
                                                
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                        </div>
            </div>
        </div>
    </section>


        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
<!-- Button to Open the  add Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post" >
  <div class="form-group">
       <label for="customer_name">customer_name:</label> 
		
       <input type="text" class="form-control"  id="customer_name" placeholder="Enter 
customer_name" name="customer_name"> 

  </div>
        	
  
    
    <div class="form-group">
    <select  class="form-control" name="order_type" id="order" style="width:450px;display:inline">
<option selected>order type</option>
<option value="supplier" >supplier</option>
<option value="customer"> customer</option>

</select>
  </div>
   <div class="form-group">
    <select name="product_id" class="form-control custom-select" id="product_id" style="width:450px;display:inline">
<option selected>select product</option>
<?php
$con=Database::getCon();
$result1=mysqli_query($con,"select productid,product_name from  product");
while($record1=mysqli_fetch_array($result1))
{
	echo"<option value=".$record1['productid'].">".$record1['product_name']."</options>";
}
?>
</select>
  </div>
   <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="text" class="form-control"name="quantity" id="quantity" placeholder="Enter 
quantity" name="quantity" required> 

  </div>
  <div class="form-group">
       <label for="date">date:</label> 
		
       <input type="date" class="form-control" name="odate" id="odate" placeholder="Enter date" name="odate" required> 

  </div>
   
  
  <div>
      <input type='submit' class='btn btn-primary float-right ml-4' value='Add' name='Add'>
	  <input type='button' class='btn btn-danger float-right' data-dismiss='modal' value='Close'>
</form>
 </div>

    </div>
  </div>
</div>
</div>








<!-- Button to Open the update Modal -->

<?php

if($result1=Order::selectorder($order))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalupdate<?=$record1['orderid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post" >
  
  <input type="hidden" value="<?=$record1['orderid']?>" name="order_id" >
  
  <div class="form-group">
       <label for="customer_name">customer_name:</label> 
		
       <input type="text" class="form-control"  id="customer_name" placeholder="Enter 
customer_name" name="customer_name" value="<?=$record1['customer_name']?>"> 

  </div>
  
  
       
  <div class="form-group">
    <select  class="form-control"name="order_type" id="order" style="width:450px;display:inline">
<option selected value="<?=$record1['order_type']?>"><?=$record1['order_type']?></option>
<option value="supplier">supplier</option>
<option value="customer"> customer</option>

</select>
  </div>
  
   

 <div class="form-group">
    <select name="product_id" class="form-control custom-select" id="product_id" style="width:450px;display:inline">
<option selected value="<?=$record1['productid']?>"><?=$record1['product_name']?></option>
<?php
$con=Database::getCon();
$result2=mysqli_query($con,"select productid,product_name from  product");
while($record2=mysqli_fetch_array($result2))
{
	echo"<option value=".$record2['productid'].">".$record2['product_name']."</options>";
}
?>
</select>
  </div>
  
  <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter 
quantity" value="<?=$record1['quantity']?>" required>

  </div>
  
     <div class="form-group">
       <label for="date">date:</label> 
		
       <input type="date" class="form-control" name="odate" id="odate" placeholder="Enter 
date" name="odate"value="<?=$record1['date']?>" required> 

  </div>
  <div class="form-group">
       <label for="payment">payment:</label> 
		
       <input type="text" class="form-control" name="payment" id="payment" placeholder="Enter 
payment" name="payment"value="<?=$record1['payment']?>" required> 

  </div>
  <div>
      <input type='submit' class='btn btn-primary float-right ml-4' value='Update' name='update'>
	  <input type='button' class='btn btn-danger float-right' data-dismiss='modal' value='Close'>
</form>
 </div>

    </div>
  </div>
</div>
</div>
<?php
}
}
?>



<!-- Button to Open the delete Modal -->

<?php
if($result1=Order::selectOrder($order))
{
	while($record1=mysqli_fetch_array($result1))
	{
?>
<!-- The Modal -->
<div class="modal" id="Modaldelete<?=$record1['orderid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete order</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post">
		<input type="hidden" value="<?=$record1['orderid']?>" name="uniqid" >
		<h6>Do yo really want to delete order?</h6>
      <div>
      <input type="submit" class="btn btn-primary float-right ml-4" value="Delete" name="delete">
        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
      </div>

</form>
    </div>
  </div>
</div>
</div>

<?php
		}
		}
?>

<!-- Button to Open the view Modal -->

<?php

if($result1=Order::selectorder($order))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalview<?=$record1['orderid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post" >
  
  <input type="hidden" value="<?=$record1['orderid']?>" name="order_id" >
    
<div class="form-group">
       <label for="customer_name">customer_name:</label> 
		
       <input type="text" class="form-control"  id="customer_name" placeholder="Enter 
customer_name" name="customer_name"value="<?=$record1['customer_name']?>" disabled> 

  </div>
	
  <div class="form-group">
   <label for="quantity">Order Type:</label> 
    <select  class="form-control"name="order_type" id="order" style="width:450px;display:inline">
<option selected value="<?=$record1['order_type']?>" disabled><?=$record1['order_type']?></option>


</select>
  </div>
  
   

 <div class="form-group">
  <label for="quantity">product Name:</label> 
    <select name="product_id" class="form-control custom-select" id="product_id" style="width:450px;display:inline">
<option selected value="<?=$record1['productid']?>" disabled><?=$record1['product_name']?></option>

</select>
  </div>
  
  <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter 
quantity" value="<?=$record1['quantity']?>"disabled>

  </div>
  
     <div class="form-group">
       <label for="date">date:</label> 
		
       <input type="date" class="form-control" name="odate" id="odate" placeholder="Enter 
date" name="odate"value="<?=$record1['date']?>" disabled> 

  </div>
  <div class="form-group">
       <label for="payment">payment:</label> 
		
       <input type="text" class="form-control" name="payment" id="payment" placeholder="Enter 
payment" name="payment"value="<?=$record1['payment']?>" disabled> 

  </div>
  <div>
   
      <input type='submit' class='btn btn-primary float-right ml-4' value='print' name='print'>

	  <input type='button' class='btn btn-danger float-right' data-dismiss='modal' value='Close'>
	  
</form>
 </div>

    </div>
  </div>
</div>
</div>
<?php
}
}
?>






</body>
</html>