<?php
include 'jobsdb.php';
session_start();

if(isset($_SESSION['username']))
{

	echo "hello" . $_SESSION['username'];

	echo "<div align='right'><a href='logout.php'.>LOGOUT</a></div>";
}else
{
	echo "<a href='login.html'.>LOGIN</a>";
}

?>
<html>
<head>
	<h1><center><b>Job List</b></h1><body>




<?php
$result = getjobs();
while($row=mysqli_fetch_assoc($result))
{
echo "<table border=10><tr><td><th>Job title: <a href=jobtitle.php?id=" . $row['id'] . ">" . $row['title'] ."</a> </br>" ;
echo "Employer:" . $row['employer'] ."<br> ";
echo "Location:" . $row['location'] ."<br></th></td></tr></table>";
	/*			Employer<br>
    			Location<br>
  
		</P>
		<P STYLE="border: solid #BB11FE 5px">

	      		Job title<br>
				Employer<br>
    			Location<br>
  
		</P> 
		<P STYLE="border: solid #FF00FF 5px">

	      		Job title<br>
				Employer<br>
    			Location<br>
  
		</P> 

 
  */
	
	}
?>
  

		
		
		
	</body>
</head>
</html>