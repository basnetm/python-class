<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<body>
<form method="POST" action="#">
	identify field:<input type="text" name="ifield"><br>
	identify value:<input type="text" name="ivalue"><br>
	field to be change:<input type="text" name="cfield"><br>
	new value:<input type="text" name="cvalue"><br>
	<input type="submit" name="update" value="update">
</form>

<?php
include('connection.php');
$ifield=$_POST['ifield'];
$ivalue=$_POST['ivalue'];
$cfield=$_POST['cfield'];
$cvalue=$_POST['cvalue'];
$update="UPDATE `reg` SET `$cfield`='$cvalue' WHERE `$ifield`='$ivalue'";
$result=mysqli_query($connect,$update);
if($result){
	echo"<script>alert('update successs');</script>";
}
?>

</body>
</html>