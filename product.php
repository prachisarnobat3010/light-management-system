<?php
include("classes/Product.php");

$product=new Product();
if(isset($_POST['Add']))
{
	
	$product->product_Name=$_POST['pname'];
	$product->shape=$_POST['shape'];
	$product->size=$_POST['size'];
	$product->quantity=$_POST['quantity'];
	$product->prize=$_POST['prize'];
	Product::addproduct($product);
}

if(isset($_POST['update']))
{
	$product->product_id=$_POST['uniqid'];
	$product->product_Name=$_POST['pname'];
	$product->shape=$_POST['shape'];
	$product->size=$_POST['size'];
	$product->quantity=$_POST['quantity'];
	$product->prize=$_POST['prize'];
	Product::updateproduct($product);
}
if(isset($_POST['delete']))
{

	$product->product_id=$_POST['uniqid'];
	Product::deleteproduct($product);
	
}

?>

<!DOCTYPE html>
<html>
<head>
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
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border">
                <div class="container-fluid">
                     <img src="images/bs.jpg" alt="" class="float-left" height="65" width="65">

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
							   <h3 style="margin-left:10pt">product</h3>
                         
                </div>
                 <div class="row" style="margin-bottom:20pt">
                    <a type="button" class="btn btn-primary" data-toggle='modal' data-target='#myModal' style='display:inline'>Add product</a>
                </div>
                

                <div class="row">
                    
                                 
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Product Name</th>
                                                <th>Size</th>
                                                <th>Shape</th>  
                                                 <th>quantity</th> 
												  <th>prize</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										if($result=Product::selectProduct($product))
										{
											while($record=mysqli_fetch_array($result))
											{
												
										
                                            echo"<tr>
										<form method='post'name='form1'>
                                        <input type='hidden' name='uniq' value=".$record['productid'].">
                                                <tr>
											
												<td>".$record['productid']."</td>
												<td>".$record['product_name']."</td>
												<td>".$record['size']."</td>
												<td>".$record['shape']."</td>
							                     <td>".$record['quantity']."</td>
												  <td>".$record['prize']."</td>
                                          <td><a href='#Modalview".$record['productid']."' data-toggle='modal' data-target='#Modalview".$record['productid']."' style='display:inline'><img src='icons/eye.png'></a>
                                                    <a href='#Modalupdate".$record['productid']."' data-toggle='modal' data-target='#Modalupdate".$record['productid']."' style='display:inline'><img src='icons/pencil-edit-button.png'></a>
                                                    <a href='#Modaldelete".$record['productid']."' data-toggle='modal' data-target='#Modaldelete".$record['productid']."' style='display:inline'><img src='icons/rubbish-bin.png'></a>
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
                                                <th>Product Name</th>
                                                <th>Size</th>
                                                <th>Shape</th>
												<th>quantity</th>
												<th>prize</th>
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
       <label for="pname">product name:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product name" name="pname" required> 

  </div>
   <div class="form-group">
       <label for="pname">shape:</label> 
		
       <input type="text" class="form-control" id="shape" placeholder="Enter 
product shape" name="shape" required> 

  </div>
   <div class="form-group">
       <label for="pname">size:</label> 
		
       <input type="text" class="form-control" id="size" placeholder="Enter 
product size" name="size" required> 

  </div>
   <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="number_format" class="form-control" id="quantity" placeholder="Enter 
quantity" name="quantity" required> 

  </div>
   <div class="form-group">
       <label for="prize">prize:</label> 
		
       <input type="number_format" class="form-control" id="prize" placeholder="Enter 
prize" name="prize" required> 

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

if($result1=Product::selectproduct($product))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalupdate<?=$record1['productid']?>">
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
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['productid']?>" required> 

  
   <div class="form-group">
       <label for="pname">product name:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product name" name="pname" value="<?=$record1['product_name']?>" required> 

  </div>
   <div class="form-group">
       <label for="pname">shape:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product shape" name="shape"  value="<?=$record1['shape']?>" required> 

  </div>
   <div class="form-group">
       <label for="pname">size:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product size" name="size"  value="<?=$record1['size']?>" required> 

  </div>
   <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="number_format" class="form-control" id="quantity" placeholder="Enter 
quantity" name="quantity" value="<?=$record1['quantity']?>" required> 

  </div>
   <div class="form-group">
       <label for="prize">prize:</label> 
		
       <input type="number_format" class="form-control" id="prize" placeholder="Enter 
prize" name="quantity" required> 

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
if($result1=Product::selectProduct($product))
{
	while($record1=mysqli_fetch_array($result1))
	{
?>
<!-- The Modal -->
<div class="modal" id="Modaldelete<?=$record1['productid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post">
		<input type="hidden" value="<?=$record1['productid']?>" name="uniqid" >
		<h6>Do yo really want to delete product?</h6>
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

if($result1=Product::selectproduct($product))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalview<?=$record1['productid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">view</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post" >
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['productid']?>" disabled> 

  
   <div class="form-group">
       <label for="pname">product name:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product name" name="pname" value="<?=$record1['product_name']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="pname">shape:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product shape" name="shape"  value="<?=$record1['shape']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="pname">size:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
product size" name="size"  value="<?=$record1['size']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="quantity">quantity:</label> 
		
       <input type="number_format" class="form-control" id="quantity" placeholder="Enter 
quantity" name="quantity" value="<?=$record1['quantity']?>"disabled> 

  </div>
   <div class="form-group">
       <label for="prize">prize:</label> 
		
       <input type="number_format" class="form-control" id="prize" placeholder="Enter 
prize" name="quantity" required> 

  </div>
  <div>
      <input type='submit' class='btn btn-primary float-right ml-4' value='view' name='view'>
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