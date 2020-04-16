<?php
		$conn = mysqli_connect('localhost','root','','insertdb');
?>
<html>
<head>
	<title>Admin Log In</title>
	<link rel = "stylesheet" type="text/css" href="login1.css"/>
</head>
<body>
<div class="contact-title">
	<h1>ADMIN LOGIN FORM</h1>
</div>
<div class="contact-form">
<form id="contact-form" method="post" action="">
<input name="email" type="text" class="form-control" placeholder="Enter Your Email" value=""/><br><br>
<input name="password" type="password" class="form-control" placeholder="Enter Your Password" value=""/><br><br>
<input type="submit"  class="form-control submit"  name="submit" value="Login"/>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM login1 WHERE Email='$email' && Password='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total == 1)
	{
		echo "Logged IN";
	}
	else
	{
		echo "LOGIN FAILED";
	}
}
?>