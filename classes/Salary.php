<?php
include("condb.php");
class Salary
{
	public $month;
	
public static function selectsalary(Salary $salary)
{

$con=Database::getCon();
$query="select user.name,user.userid,(select COUNT(*) from presenty where worker_userid=user.userid and status='full' AND MONTH(presenty.date)=$salary->month) as fulldaycount,(select COUNT(*) from presenty where worker_userid=user.userid and status='half' AND MONTH(presenty.date)=$salary->month) as halfdaycount,(( select COUNT(*) from presenty where worker_userid=user.userid and status='full' AND MONTH(presenty.date)=$salary->month )*(worker_unitsalary.unitsalary/30))+(( select COUNT(*) from presenty where worker_userid=user.userid and status='half' AND MONTH(presenty.date)=$salary->month)*(worker_unitsalary.unitsalary/60)) as salary from user INNER JOIN presenty on user.userid=presenty.worker_userid INNER JOIN worker_unitsalary on user.userid=worker_unitsalary.worker_userid where user.user_type='worker'";
$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		return $result;
	}
	else
	{
		return false;
	}
	}	
}
?>