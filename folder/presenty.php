<?php
include("classes/Presenty.php");

$presenty=new Presenty();
if(isset($_POST['Add']))
{
	
	$presenty->Name=$_POST['name'];
	$presenty->Date=$_POST['date'];
	$presenty->status=$_POST['status'];
    $presenty->time=$_POST['time'];
	Presenty::addpresenty($presenty);
}

if(isset($_POST['update']))
{
	$product->product_id=$_POST['uniqid'];
	$product->product_Name=$_POST['pname'];
	$product->shape=$_POST['shape'];
	$product->size=$_POST['size'];
	Product::updateproduct($product);
}
if(isset($_POST['delete']))
{
	echo"<script>alert('do you really want to delete')</script>";
	$product->product_id=$_POST['uniq'];
	Product::deleteproduct($product);
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>presenty- Bhavani lights</title>
    
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
                                <a href="dashbord.php">Dashboad</a>
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
                            <h3 style="margin-left:10pt">presenty</h3>
                </div>
                 <div class="row" style="margin-bottom:20pt">
                    <a type="button" class="btn btn-primary" data-toggle='modal' data-target='#myModal' style='display:inline'>Add product</a>
                </div>
                

               <div class="row">
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                    
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										if($result=Presenty::selectPresenty($presenty))
										{
											while($record=mysqli_fetch_array($result))
											{
												
										
                                            echo"<tr>
										<form method='post'name='form1'>
                                        <input type='hidden' name='uniq' value=".$record['id'].">
                                                <tr>
											
												<td>".$record['id']."</td>
												<td>".$record['name']."</td>
												<td>".$record['date']."</td>
												<td>".$record['time']."</td>
							
                                          <td><img src='icons/eye.png'>
                                                    <a href='#Modalupdate' data-toggle='modal' data-target='#Modalupdate' style='display:inline'><img src='icons/pencil-edit-button.png'></a>
                                                    <button type='submit' style='display:inline;border:0px; background:none !important;' name='delete'><img src='icons/rubbish-bin.png'></button>
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
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
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
        <h4 class="modal-title">Add presenty</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post" >
  
       
   <div class="form-group">
       <label for="pname">Name:</label> 
		
       <input type="text" class="form-control" id="name" placeholder="Enter 
 name" name="name" required> 

  </div>
   <div class="form-group">
       <label for="pname">date:</label> 
		
       <input type="text" class="form-control" id="date" placeholder="Enter 
date" name="date" required> 

  </div>
   <div class="form-group">
       <label for="pname">status:</label> 
		
       <input type="text" class="form-control" id="status" placeholder="Enter 
status" name="status" required> 

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



</body>
</html>