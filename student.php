<?php
$host="localhost";
$password="";
$user="root";
$db="manoj";
$connect=mysqli_connect($host,$user,$password,$db);

$n=$_POST['nam'];

$a=$_POST['address'];
$r=$_POST['roll'];

$ins="INSERT INTO `reg` (`id`, `name`, `address`, `roll`) VALUES (NULL, '$n', '$a', '$r')";

$result=mysqli_query($connect,$ins);
if($result)
	echo "inserted";
else
	echo "sorry";
?>
