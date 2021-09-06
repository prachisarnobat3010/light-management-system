<?php
include("classes/Salary.php");

$salary=new Salary();
if(isset($_POST['display_salary']))
{
	
	$salary->month=$_POST['month'];
	salary::selectsalary($salary);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>salary- Bhavani lights</title>
    
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
							   <h3 style="margin-left:10pt">salary</h3>
                         
                </div>
                
                    <form class="was-validated" method="post" >
                
						<div class="form-group">
						<select  class="form-control"name="month" id="month" style="width:450px;display:inline">
						<option selected>--select month--</option>
						<option value="1">January</option>
						<option value="2"> February</option>
						<option value="3"> March</option>
						<option value="4"> April</option>
						<option value="5"> May</option>
						<option value="6"> June</option>
						<option value="7"> July</option>
						<option value="8"> August</option>
						<option value="9"> September</option>
						<option value="10"> October</option>
						<option value="11"> November</option>
						<option value="12"> December</option>
					   </select>
						 <input type='submit' class='btn btn-primary' value='display salary' name='display_salary'>
						 </form>
						 
                

                <div class="row">
                    
                                 
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>worker Name</th>
                                                <th>full day</th>
                                                <th>half day</th>  
                                                 
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
                                                <th>worker Name</th>
                                                <th>full day</th>
                                                <th>half day</th>  
                                               
                                                
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



</body>
</html>