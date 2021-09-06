<?php
class Database
{
/* public static $con;
public static $host="localhost";
public static $username="root";
public static $password="";
public static $db="............";*/
public static function getCon()
{
	$con=mysqli_connect("localhost","root","","tyit")or die("<script>
	alert('error occured while connecting to database.');</script>");
	return  $con;
}
}
?>