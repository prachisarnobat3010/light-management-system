<?php
include("condb.php");
class Presenty
{
	public $p_id;
	public $user_id;
	public $pdate;
	public $status;
public static function selectpresenty(Presenty $presenty)
{
$con=Database::getCon();
$query="SELECT p.`id`, p.`name`, p.`date`, p.`status`, p.`worker_userid`,u.userid,u.name from presenty p,user u where u.userid=p.worker_userid and user_type='worker'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function addpresenty(Presenty $presenty)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO presenty(worker_userid,date,status) values('$presenty->user_id','$presenty->pdate','$presenty->status')");
	
}
public static function updatepresenty(Presenty $presenty)
{
		$con=Database::getCon();
	    mysqli_query($con,"Update `presenty` SET `worker_userid`='$presenty->user_id',date='$presenty->pdate',status='$presenty->status' WHERE id=$presenty->p_id");
	}

public static function deletepresenty(Presenty $presenty)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from presenty where id=$presenty->p_id");
	
}
}
?>