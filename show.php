<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect('localhost','root','','insertdb');
if(!$con)
{
	echo mysql_error();
}
$q = "SELECT * FROM medicine1";
$r = mysqli_query($con,$q);
if($r)
{
	while($row=mysqli_fetch_array($r))
	{
		//header("Content-type: text/html");
		echo "</br>";
		echo $row['aname'];
		echo "</br>";
		echo $row['apurpose'];
		echo "</br>";
		echo $row['asalts'];
		echo "</br>";
		
		//$type = "Content-type: ".$row['aphototype'];
		//header($type);
		echo "<img src=image.php?aname=".$row['aname']." width=300 height=300/>";
		
	}
}
else
{
	echo "Sorry name does not exists";
}
?>