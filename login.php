<?php

$host="localhost";
$password="";
$user="root";
$db="manoj";
$connect=mysqli_connect($host,$user,$password,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login form</title>
</head>
<body>
	<form method="POST" action="#">
		username:<input type="text" name="user">
		
		password:<input type="password" name="password">
		<input type="submit" name="login" value="login">
	</form>
	<?php
	if(isset($_POST['login']))
	{
		$u=$_POST['user'];
		$p=$_POST['password'];

		$select="SELECT *  FROM `login` WHERE `username`='$u' AND `passord`='$p'";
		$result=mysqli_query($connect,$select);
		$row=mysqli_fetch_array($result);
		if($row){
		
			header('location:form.php');
		}
		else
		{
			echo"<script>alert('login failed,please try again');windows.location.href('login.php')</script>";
		}
	

	}
	?>
</body>
</html>