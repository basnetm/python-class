<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>delete</title>
</head>
<body>
<form method="POST" action="#">
	identify field:<input type="text" name="ifield">
	identify value:<input type="text" name="ivalue">
	
	<input type="submit" name="delete" value="delete">
	
</form>


<?php
include('connection.php');
$ifield=$_POST['ifield'];
$ivalue=$_POST['ivalue'];
$delete="DELETE FROM `reg` WHERE `$ifield` ='$ivalue'";
$result=mysqli_query($connect,$delete);
if($result){
	echo"<script>alert('delete successs');</script>";
}
?>





</body>
</html>