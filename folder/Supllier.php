<?php
include("classes/Supplier.php");

$supplier=new ();
if(isset($_POST['Add']))
{
	
	$product->product_Name=$_POST['pname'];
	$product->shape=$_POST['shape'];
	$product->size=$_POST['size'];
	Product::addproduct($product);
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

    <title>supplier- Bhavani lights</title>
    
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
                            <h3 style="margin-left:10pt">supplier</h3>
                </div>

                

               <div class="row">
                                <table id="functionality" class="display mt20">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Supplier Name</th>
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ppp</td>
                                                <td>kudal </td>
                                                <td>5438759045</td>
                                                <td>abd3@gmail.com </td>
                                                <td><img src="icons/eye.png">
                                                    <img src="icons/pencil-edit-button.png">
                                                    <img src="icons/rubbish-bin.png">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>aaa</td>
                                                <td>sawantvadi</td>
                                                <td>5448794900</td>
                                                <td>ppp30@gmail.com</td>
                                                
                                                <td><img src="icons/eye.png">
                                                    <img src="icons/pencil-edit-button.png">
                                                    <img src="icons/rubbish-bin.png">
                                                </td>
                                                </tr>
                                                <tr>
                                                        <td>3</td>
                                                        <td>sss</td>
                                                        <td>kanakali</td> </td>
                                                        <td>564567788</td>
                                                        <td>sss4@gmail.com</td> </td>
                                                        
                                                        
                                                      <td><img src="icons/eye.png">
                                                    <img src="icons/pencil-edit-button.png">
                                                    <img src="icons/rubbish-bin.png">
                                                </td>
                                                    </tr>
                                                    <tr>
                                                            <td>4</td>
                                                            <td>ddd</td>
                                                            <td>dodamarg</td> </td>
                                                            <td>565456788</td>
                                                            <td>ttt5@gmail.com</td> </td>
                                                                
                                                            
                                                            <td><img src="icons/eye.png">
                                                    <img src="icons/pencil-edit-button.png">
                                                    <img src="icons/rubbish-bin.png">
                                                </td>
                                                        </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Supplier Name</th>
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


</body>
</html>