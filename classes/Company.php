<?php
include("condb.php");
class Company
{
	public $company_id;
	public $Name;
	public $address;
	public $mobile_no;
	public $email_id;
public static function selectcompany(Company $company)
{
$con=Database::getCon();
$query="SELECT * from company";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	return $result;
}
else{
	return false;
}
}	
public static function addcompany(Company $company)
{
	$con=Database::getCon();
	mysqli_query($con,"INSERT INTO company(name,address,mobile_no,email_id) values('$company->Name','$company->address','$company->mobile_no','$company->email_id')");
	
}
public static function updatecompany(Company $company)
{
		$con=Database::getCon();
	    mysqli_query($con,"UPDATE `company` SET `name`='$company->Name',address='$company->address',mobile_no='$company->mobile_no' WHERE companyid=$company->company_id");
	}

public static function deletecompany(Company $company)
{
	
		$con=Database::getCon();
	    mysqli_query($con,"delete from company where companyid=$company->company_id");
	
}
}
?>