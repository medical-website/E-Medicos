<?php
		$conn = mysqli_connect('localhost','root','','insertdb');
?>
<form action="" method="post">
Email: <input type="text" name="email" value=""/><br><br>
Password: <input type="password" name="password" value=""/><br><br>
<input type="submit" name="submit" value="Login"/>
</form>

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