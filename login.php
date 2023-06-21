<?php
$uname = $_POST['uname'];
$upswd  = $_POST['upswd'];
if (!empty($uname) || !empty($upswd))
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "product";
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error())
	{
		die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
	}
	$sql="SELECT * FROM admin where username='$uname' and password='$upswd'";
	$result=mysqli_query($conn,$sql);
	$resultcheck=mysqli_num_rows($result);
	if($resultcheck>0)
	{
		// Redirect to add.html
		header("Location:add.html");
		exit;
	}
	else
	{
		echo "Username or password incorrect";
	}
}
?>
