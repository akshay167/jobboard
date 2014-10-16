<?php
include 'jobsdb.php';
$uname = $_POST['username'];
$pwd= $_POST['password'];
$count = confirmuser($uname,$pwd);
echo $count;
if($count==1)
{
session_start();
//session_register("myusername");
$_SESSION['username']=$uname;

header("location: joblist.php");
}
else
{
$error="ERROR:Your Login Name or Password is invalid";
header("Refresh: 2; url=login.html");
echo $error;
}
?>
<!--
git add .
git commit -m"comment"
git pull origin master
git push -u master

-->