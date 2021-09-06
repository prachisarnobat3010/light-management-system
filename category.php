<?php
include("classes/Category.php");

$category=new Category();
if(isset($_POST['Add']))
{
	
	$category->category_Name=$_POST['cname'];
	$category->subcategory=$_POST['subcategory'];
	
	Category::addcategory($category);
}

if(isset($_POST['update']))
{
	$category->category_id=$_POST['uniqid'];
	$category->category_Name=$_POST['cname'];
    $category->subcategory=$_POST['subcategory'];

	Category::updatecategory($category);
}
if(isset($_POST['delete']))
{
	
	$category->category_id=$_POST['uniqid'];
	Category::deletecategory($category);
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Category- Bhavani lights</title>
    
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
                                <a href="dashbord.php">Dashboard</a>
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
                            <h3 style="margin-left:10pt">category</h3>
                </div>

                  <div class="row" style="margin-bottom:20pt">
                    <a type="button" class="btn btn-primary" data-toggle='modal' data-target='#myModal' style='display:inline'>Add category</a>
                </div>

                <div class="row">
                    
                                 <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Category Name</th>
                                                <th>Subcategory</th>
                                                
                                    
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										if($result=Category::selectCategory($category))
										{
											while($record=mysqli_fetch_array($result))
											{
												
										
                                            echo"<tr>
										<form method='post'name='form1'>
                                        <input type='hidden' name='uniq' value=".$record['categoryid'].">
                                                <tr>
											
												<td>".$record['categoryid']."</td>
												<td>".$record['category_name']."</td>
												<td>".$record['subcategory']."</td>
											
							
                                           <td><a href='#Modalview".$record['categoryid']."' data-toggle='modal' data-target='#Modalview".$record['categoryid']."' style='display:inline'><img src='icons/eye.png'></a>
                                                    <a href='#Modalupdate".$record['categoryid']."' data-toggle='modal' data-target='#Modalupdate".$record['categoryid']."' style='display:inline'><img src='icons/pencil-edit-button.png'></a>
                                                    <a href='#Modaldelete".$record['categoryid']."' data-toggle='modal' data-target='#Modaldelete".$record['categoryid']."' style='display:inline'><img src='icons/rubbish-bin.png'></a>
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
                                                <th>Category Name</th>
                                                <th>Subcategory</th>
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
       <label for="cname">category name:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
category name" name="cname" required> 

  </div>
   <div class="form-group">
       <label for="cname">subcategory:</label> 
		
       <input type="text" class="form-control" id="subcategory" placeholder="Enter 
subcategory" name="subcategory" required> 

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

if($result1=Category::selectcategory($category))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalupdate<?=$record1['categoryid']?>">
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
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['categoryid']?>" required> 

  
   <div class="form-group">
       <label for="cname">category name:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
 category name" name="cname" value="<?=$record1['category_name']?>" required> 

  </div>
   <div class="form-group">
       <label for="cname">subcategory:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
subcategory" name="subcategory"  value="<?=$record1['subcategory']?>" required> 

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
if($result1=Category::selectCategory($category))
{
	while($record1=mysqli_fetch_array($result1))
	{
?>
<!-- The Modal -->
<div class="modal" id="Modaldelete<?=$record1['categoryid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post">
		<input type="hidden" value="<?=$record1['categoryid']?>" name="uniqid" >
		<h6>Do yo really want to delete category?</h6>
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

if($result1=Category::selectcategory($category))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalview<?=$record1['categoryid']?>">
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
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['categoryid']?>"  disabled> 

  
   <div class="form-group">
       <label for="cname">category name:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
 category name" name="cname" value="<?=$record1['category_name']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="cname">subcategory:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
subcategory" name="subcategory"  value="<?=$record1['subcategory']?>" disabled> 

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