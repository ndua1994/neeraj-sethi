<?php
sleep(1);
include('../db/config.php');
$email_id=prepStr($_POST['email_id']);
$password=prepStr($_POST['password']);


$query=mysqli_query($conn,"select * from tbl_login where email_id='$email_id'
	                and password='$password' and is_active='1'");
$totl=mysqli_num_rows($query);
$details=mysqli_fetch_array($query);
if($totl>0)
{
	$_SESSION['first_name']=$details['first_name'];
	$_SESSION['last_name']=$details['last_name'];
	$_SESSION['email_id']=$details['email_id'];
	$attr=array('status'=>'success','msg'=>'login Successfull !');
}
else
{
	$attr=array('status'=>'failure','msg'=>'Incorrect Email ID or Password');
}

echo json_encode($attr);

?>