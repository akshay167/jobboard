<?php

function dbOpen()
{
	$db=new mysqli('localhost','root','jaaga','jobs');
	return $db;
}
function addJob($title,$salary,$jobdesc,$location,$qualification,$employer,$website)
{
	$db=dbOpen();
	$sql='insert into jobs(title,salary,jobdesc,location,qualification,employer,website) values("' .$title .'","' .$salary. '","' .$jobdesc. '","' .$location. '","' .$qualification. '","' .$employer. '","' .$website. '")';
	$result=mysqli_query($db,$sql);
	return $result;		
}


function getjobs()
{
	$db=dbOpen();
	$sql='select *from jobs';
	return mysqli_query($db,$sql);
	
}

function getjob($id)
{
	$db=dbOpen();
	$sql="select *from jobs where id = $id";
	return mysqli_query($db,$sql);
}

function confirmuser($uname,$pwd)
{
	$db=dbopen();
	$sql='select *from user where name="'.$uname.'" and password="'.$pwd.'"';
    $result=mysqli_query($db,$sql);
    return $count=mysqli_num_rows($result);
}

function registeruser($uname,$pass,$cpass,$email,$phnumb)
{
	$db=dbopen();
	$sql='INSERT INTO user(name, password, cpassword, email, phnumb) VALUES("'.$uname.'" ,"'.$pass.'","'.$cpass.'","'.$email.'","'.$phnumb.'")';
	$result=mysqli_query($db,$sql);
	return $result;


}


//registeruser('aksh','12345','12345','akk@gmail.com','213131');
//confirmuser('akshay','12345');
/*

//getjob($id);
//dbOpen();
//addJob('al','2342342','deva','blore','sadas','google','sdnanlnd');
$result = getjobs();
while($row=mysqli_fetch_assoc($result)){
	echo $row['title']."<br>";
	echo $row['salary']."<br>";
	echo $row['jobdesc']."<br>";
	echo $row['location']."<br>";
	echo $row['qualification']."<br>";
	echo $row['employer']."<br>";
	echo $row['website']."<br>";
	
}

*/
?>

