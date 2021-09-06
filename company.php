<?php
include("classes/Company.php");

$company=new Company();
if(isset($_POST['Add']))
{
	
	$company->Name=$_POST['cname'];
    $company->address=$_POST['address'];
    $company->mobile_no=$_POST['mobile_no'];
	$company->email_id=$_POST['email_id'];
	Company::addcompany($company);
}

if(isset($_POST['update']))
{
	$company->company_id=$_POST['uniqid'];
	$company->Name=$_POST['cname'];
    $company->address=$_POST['address'];
	$company->mobile_no=$_POST['mobile_no'];
	$company->email_id=$_POST['email_id'];
	Company::updatecompany($company);
}
if(isset($_POST['delete']))
{
	
	$company->company_id=$_POST['uniqid'];
	Company::deletecompany($company);
	
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>company- Bhavani lights</title>
    
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
							   <h3 style="margin-left:10pt">company</h3>
                         
                </div>
                 <div class="row" style="margin-bottom:20pt">
                    <a type="button" class="btn btn-primary" data-toggle='modal' data-target='#myModal' style='display:inline'>Add company</a>
                </div>
                

               <div class="row">
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>company Name</th>
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
										if($result=Company::selectCompany($company))
										{
											while($record=mysqli_fetch_array($result))
											{
												
										
                                            echo"<tr>
										<form method='post'name='form1'>
                                        <input type='hidden' name='uniq' value=".$record['companyid'].">
                                                <tr>
											
												<td>".$record['companyid']."</td>
												<td>".$record['name']."</td>
												<td>".$record['address']."</td>
												<td>".$record['mobile_no']."</td>
							                     <td>".$record['email_id']."</td>
                                          <td><a href='#Modalview".$record['companyid']."' data-toggle='modal' data-target='#Modalview".$record['companyid']."'style='display:inline'><img src='icons/eye.png'></a>
                                                    <a href='#Modalupdate".$record['companyid']."' data-toggle='modal' data-target='#Modalupdate".$record['companyid']."' style='display:inline'><img src='icons/pencil-edit-button.png'></a>
                                                    <a href='#Modaldelete".$record['companyid']."' data-toggle='modal' data-target='#Modaldelete".$record['companyid']."' style='display:inline'><img src='icons/rubbish-bin.png'></a>
                                                </td>
												</form>
                                            </tr>";
											}
										}
											?>
                                        </tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>company Name</th>
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
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
       <label for="cname">name:</label> 
		
       <input type="text" class="form-control" id="cname" placeholder="Enter 
 name" name="cname" required> 

  </div>
   <div class="form-group">
       <label for="address">address:</label> 
		
       <input type="text" class="form-control" id="address" placeholder="address" name="address" required> 

  </div>
   <div class="form-group">
       <label for="mobile_no">mobile_no:</label> 
		
       <input type="text" class="form-control" id="mobile_no" placeholder="Enter 
mobile_no" name="mobile_no" required> 

  </div>
   <div class="form-group">
       <label for="email_id">email_id:</label> 
		
       <input type="text" class="form-control" id="email_id" placeholder="Enter 
email_id" name="email_id" required> 

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

if($result1=Company::selectcompany($company))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalupdate<?=$record1['companyid']?>">
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
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['companyid']?>" required> 

  
   <div class="form-group">
       <label for="cname"> name:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
company name" name="cname" value="<?=$record1['name']?>" required> 

  </div>
   <div class="form-group">
       <label for="address">address:</label> 
		
       <input type="text" class="form-control" id="address" placeholder="Enter 
address" name="address"  value="<?=$record1['address']?>" required> 

  </div>
   <div class="form-group">
       <label for="mobile_no">mobile_no:</label> 
		
       <input type="text" class="form-control" id="mobile_no" placeholder="Enter 
mobile_no" name="mobile_no"  value="<?=$record1['mobile_no']?>" required> 

  </div>
   <div class="form-group">
       <label for="email_id">email_id:</label> 
		
       <input type="text" class="form-control" id="email_id" placeholder="Enter 
email_id" name="email_id"  value="<?=$record1['email_id']?>" required> 

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
if($result1=Company::selectCompany($company))
{
	while($record1=mysqli_fetch_array($result1))
	{
?>
<!-- The Modal -->
<div class="modal" id="Modaldelete<?=$record1['companyid']?>">
  <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete company</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="was-validated" method="post">
		<input type="hidden" value="<?=$record1['companyid']?>" name="uniqid" >
		<h6>Do yo really want to delete company?</h6>
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

if($result1=Company::selectcompany($company))
{
	while($record1=mysqli_fetch_array($result1))
	{

?>

<!-- The Modal -->
<div class="modal" id="Modalview<?=$record1['companyid']?>">
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
  
  
       <input type="hidden" class="form-control" name="uniqid" value="<?=$record1['companyid']?>" disabled> 

  
   <div class="form-group">
       <label for="cname"> name:</label> 
		
       <input type="text" class="form-control" id="pname" placeholder="Enter 
company name" name="cname" value="<?=$record1['name']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="address">address:</label> 
		
       <input type="text" class="form-control" id="address" placeholder="Enter 
address" name="address"  value="<?=$record1['address']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="mobile_no">mobile_no:</label> 
		
       <input type="text" class="form-control" id="mobile_no" placeholder="Enter 
mobile_no" name="mobile_no"  value="<?=$record1['mobile_no']?>" disabled> 

  </div>
   <div class="form-group">
       <label for="email_id">email_id:</label> 
		
       <input type="text" class="form-control" id="email_id" placeholder="Enter 
email_id" name="email_id"  value="<?=$record1['email_id']?>" disabled> 

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