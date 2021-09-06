<?php
include("condb.php");
class User
{
	public $user_id;
	public $user_Name;
	public $address;
	public $phone_no;
	public $email_id;

	
public static function selectUser(User $user)
{
$con=Database::getCon();
$query="SELECT * from user WHERE user_type='customer'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function adduser(User $user)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO user(name,address,phone_no,email_id,user_type) values('$user->user_Name','$user->address','$user->phone_no','$user->email_id','customer')");
	
}
public static function updateuser(User $user)
{
		$con=Database::getCon();
	    mysqli_query($con,"UPDATE `user` SET `name`='$user->user_Name',address='$user->address',phone_no='$user->phone_no',email_id='$user->email_id' WHERE userid=$user->user_id");
	}

public static function deleteuser(User $user)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from user where userid=$user->user_id");
	
}
}
?>