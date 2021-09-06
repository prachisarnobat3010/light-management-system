<?php
session_start();
$con=mysqli_connect("localhost","root","","tyit")or die("<script>
	alert('error occured while connecting to database.');</script>");

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
<div class="container mx-auto">
<?php
if($result1=mysqli_query($con,"SELECT o.customer_name,o.orderid,o.order_type,p.productid,p.product_name,o.quantity,o.payment,o.date from `order` o,product p WHERE o.`orderid`=".$_SESSION['order_id']." and o.productid=p.productid"))
{
	while($record1=mysqli_fetch_array($result1))
	{
?>
<form class="was-validated" method="post" action="printing.php">
  
  <input type="hidden" value="<?=$record1['orderid']?>" name="order_id" >
    
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
</div>
 <script type="text/javascript">
            $(document).ready(function () {
               window.print();
            });
        </script>
</body>
</html>
