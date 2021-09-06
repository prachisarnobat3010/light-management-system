<?php
include("classes/User.php");
if(isset($_POST['login']))
{
	$user=new User();
	$user->username=$_POST['uname'];
	$user->userpassword=$_POST['pswd'];
	if(User::login($user)==true)
	{
		header("location:dashboard.php");
	}
	else
	{
		echo"<script>alert('login fail')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<!--
Modals start
-->

<!-- Login Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <img src="images/bs.jpg" height="50" width="50">
      <h4 class="card-title mb-4 mt-1">Bhavani Lights</h4>
      </div>

      <!-- Modal body -->
	    <form method="post" class="was-validated">
		  <div class="modal-body">
		  
				<div class="form-group">
				  <label for="uname">Username:</label>
				  <input type="email" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
					<a href="#">Forgot Password?</a>
				</div>  
			  
		  </div>

		  <!-- Modal footer -->
		  <div class="modal-footer">
      <div >
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
    <a href="" class="float-left btn btn-outline-primary">Sign up</a>
    <input type="submit" value="Login" name="login" class="btn btn-primary float-right">
	
  </div>
      </div>
		</form>
    </div>
  </div>
</div>

<!--
Modals end
-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bhavani lights</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav flex-column">
        
        <li class="active"><a href="#">Home</a></li>
        <li ><a href="#">Services</a></li>
        <li ><a href="#">Gallary</a></li>
        <li ><a href="#">About Us</a></li>
        <li ><a href="#">Contact Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-home"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="card">
<div class="card-body">

</div>


</div>
</body>
</html>
