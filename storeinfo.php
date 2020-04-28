<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect('localhost','root','','insertdb');
if(!$con)
{
	echo mysql_error();
}
/*
$db =mysqli_select_db("insertdb",$con);
if(!$db)
{
	echo mysql_error();
}
*/
$aname = $_POST['aname'];
$apurpose = $_POST['apurpose'];
$asalts = $_POST['asalts'];
$aphoto = addslashes (file_get_contents($_FILES['aphoto']['tmp_name']));
$image = getimagesize($_FILES['aphoto']['tmp_name']);

$imgtype = $image['mime'];

$q="INSERT INTO `medicine1`(`aname`, `apurpose`, `asalts`, `aphoto`, `aphototype`) VALUES ('$aname','$apurpose','$asalts','$aphoto','$imgtype')";
$r = mysqli_query($con, $q);
if($r)
{
	echo "Information Stored Successfully";
}
else
{
	echo "Error";
}
?>