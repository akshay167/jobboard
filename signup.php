<?php 
include 'jobsdb.php';

$uname = $_GET['name'];
$pass = $_GET['password'];
$cpass =$_GET['cpassword'];
$email = $_GET['email'];
$phnumb = $_GET['phnumb'];

if($pass==$cpass)
{

	registeruser($uname,$pass,$cpass,$email,$phnumb);
	echo "Successfully Registered";
	header("Refresh: 2; url=joblist.php");
}
else
{
	echo "Password doesnt match";
	header("Refresh: 2; url=login.html");
}


?>