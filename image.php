<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect('localhost','root','','insertdb');
if(!$con)
{
	echo mysql_error();
}
$aname=$_GET['aname'];
$q = "SELECT aphoto,aphototype FROM medicine1 where aname='$aname'";
$r = mysqli_query($con,$q);
if($r)
{
	$row = mysqli_fetch_array($r);
	$type = "Content-type: ".$row['aphototype'];
	header($type);
	echo $row['aphoto'];
}
else
{
	echo "Not Found";
}
?>