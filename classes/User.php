<?php
include("condb.php");
class User
{
    public $username;
    public $address;
    public $phone_no;
    public $date_of_birth;
    public $email_id;
    public $userpassword;
    public $user_type;
    public $blood_group;
    public static function login(User $user)
    {
          $con=Database::getCon();
		  $query="select userid from user where email_id='".$user->username."' and 
		  password='".$user->userpassword."'";
		  $data=mysqli_query($con,$query);
		  $record=mysqli_fetch_row($data);
		  if (mysqli_num_rows($data)>0)
		  {
			  return true;
		  }
		  else
		  {
			  return false;
		  }
    }
    /*public static function logout(user $user)
    {
        
    }*/
}
?>