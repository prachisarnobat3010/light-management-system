<?php
include("condb.php");
class Category
{
	public $category_id;
	public $category_Name;
	public $subcategory;
	
public static function selectcategory(Category $category)
{
$con=Database::getCon();
$query="SELECT * from category";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function addcategory(Category $category)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO category(category_name,subcategory) values('$category->category_Name','$category->subcategory')");
	
}
public static function updatecategory(Category $category)
{
		$con=Database::getCon();
	    mysqli_query($con,"UPDATE `category` SET `category_name`='$category->category_Name',subcategory='$category->subcategory' WHERE categoryid=$category->category_id");
	}

public static function deletecategory(Category $category)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from category where categoryid=$category->category_id");
	
}
}
?>