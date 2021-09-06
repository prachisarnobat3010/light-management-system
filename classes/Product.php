<?php
include("condb.php");
class Product
{
	public $product_id;
	public $product_Name;
	public $shape;
	public $size;
	public $quantity;
	public $prize;
public static function selectproduct(Product $product)
{
$con=Database::getCon();
$query="SELECT * from product";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function addproduct(Product $product)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO product(product_name,shape,size,quantity,prize) values('$product->product_Name','$product->shape','$product->size',$product->quantity,$product->prize)");
	
}
public static function updateproduct(Product $product)
{
		$con=Database::getCon();
	    mysqli_query($con,"UPDATE `product` SET `product_name`='$product->product_Name',shape='$product->shape',size='$product->size',quantity=$product->quantity,prize=$product->prize WHERE productid=$product->product_id");
	}

public static function deleteproduct(Product $product)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from product where productid=$product->product_id");
	
}
}
?>