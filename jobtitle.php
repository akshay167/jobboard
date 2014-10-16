<?php
include 'jobsdb.php';
$result=getJob($_GET['id']);
$job=mysqli_fetch_assoc($result);
?>
<html>
<head>
	<body>
	<h1>  <center><?php echo $job['title']; ?></center></h1>
	<h1>  <center><?php echo $job['salary']; ?></center></h1>
	<h1>  <center><?php echo $job['jobdesc']; ?></center></h1>
	<h1>  <center><?php echo $job['location']; ?></center></h1>
    <h1>  <center><?php echo $job['qualification']; ?></center></h1>
    <h1>  <center><?php echo $job['employer']; ?></center></h1>
	
    <h1><center><?php echo $job['website'];?> </a> </center></h1>
	</body>
</head>
</html>