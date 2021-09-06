<?php
include("condb.php");
class Order
{
	public $customer_name;
	public $order_type;
    public $product_id;
	public $quantity;
	public $payment;
	public $odate;
	public $order_id;


public static function selectorder(Order $order)
{
$con=Database::getCon();
$query="SELECT (o.quantity*p.prize) as payment,o.customer_name,o.orderid,o.order_type,p.productid,p.product_name,o.quantity,o.date from `order` o,product p where o.productid=p.productid";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function addorder(Order $order)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO `order`(order_type,productid,quantity,payment,date,customer_name) values('$order->order_type',$order->product_id,$order->quantity,'$order->payment','$order->odate','$order->customer_name')");
	if($order->order_type=="customer")
	{
		mysqli_query($con,"update product SET product.quantity=(product.quantity)-($order->quantity) WHERE product.productid=$order->product_id");
	}
	
}
public static function updateorder(Order $order)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"UPDATE `order` SET order_type='$order->order_type',productid=$order->product_id,date='$order->odate',quantity=$order->quantity,payment=$order->payment,customer_name='$order->customer_name' WHERE orderid=$order->order_id");
	}

public static function deleteorder(Order $order)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from `order` where orderid=$order->order_id");
	
}
}
?>