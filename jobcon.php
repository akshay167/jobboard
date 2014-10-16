<META HTTP-EQUIV="refresh" content="0;URL=joblist.php">
<?php
include 'jobsdb.php';
$title=$_GET['jobtitle'];
$salary=$_GET['sal'];
$jobdesc=$_GET['desc'];
$location=$_GET['location'];
$qualification=$_GET['qual'];
$employer=$_GET['emp'];
$website=$_GET['web'];
//dbOpen();
addJob($title,$salary,$jobdesc,$location,$qualification,$employer,$website);

?>
