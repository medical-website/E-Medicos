<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" action = "storeinfo.php" method="POST">

<table border=0 align=center bgcolor=pink width=100%>
<tr><td colspan=2><h2>&nbsp</h2></td></tr>
</table>

<table border=0 align=center bgcolor=grey>
<tr><td colspan=2><h2>Medicine Information</h2></td></tr>
<tr>
<td>Medicine Name</td><td><input type=text name="aname"></td>
</tr>
<tr>
<td>Medicine Purpose</td><td><input type=text name="apurpose"></td>
</tr>
<tr>
<td>Medicine Salts</td><td><input type=text name="asalts"></td>
</tr>
<tr>
<td>Medicine Photo</td><td><input type=file name="aphoto"></td>
</tr>
<tr>
<td></td><td><input type=submit name="submit" value="Store Information"></td>
</tr>
</table>
</form>
</body>
</html>