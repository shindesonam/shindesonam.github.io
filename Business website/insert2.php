<html>
<head><title>sample</title></head>

<body>
<center>
<form action="insert2.php" method="GET">
name: <input type="text" name="fname" value="">
lname: <input type="text" name="lname" value="">
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>
<?php
$link=mysqli_connect("localhost:10080","root","");
mysql_select_db("wedding",$link);
if (isset($_GET['submit'])){
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$query=mysql_query("insert into demo (fname,lname) values ('$fname','$lname')");
	if($query)
	{
		echo "inserted";
	}
}
?>