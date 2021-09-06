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
       <label for="customer_name">customer_name:</label> 
		
       <input type="text" class="form-control"  id="customer_name" placeholder="Enter 
customer_name" name="customer_name"value="<?=$record1['customer_name']?>" disabled> 

  </div>
	
  <div class="form-group">
   <label for="quantity">Order Type:</label> 
    <input type="text" class="form-control"  id="customer_name" placeholder="Enter 
order_name" name="order_name"value="<?=$record1['order_type']?>" disabled> 

  </div>
  
   

 <div class="form-group">
  <label for="quantity">product Name:</label> 
  <input type="text" class="form-control"  id="product_name" placeholder="Enter 
product_name" name="product_name"value="<?=$record1['product_name']?>" disabled> 

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
   
     
	</div>  
</form>

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
