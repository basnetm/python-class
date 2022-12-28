<?php
$host="localhost";
$user="root";
$pass="";
$db="manoj";
$connect=mysqli_connect($host,$user,$pass,$db);


$n=$_POST['name'];
$un=$_POST['username'];
$p=$_POST['password'];
$c=$_POST['con'];
$a=$_POST['address'];

$insert="INSERT INTO `form` (`id`, `name`, `username`, `passord`, `contact`, `address`) VALUES (NULL, '$n', '$un', '$p', '$c', '$a')";
$result=mysqli_query($connect,$insert);
if($result)
	echo"inserted successfully";
else
	echo "sorry";

?>
<table width="50%" border="1">
	<tr>
		<td>s.n</td>
		<td>name</td>
		<td>username</td>
		<td>address</td>
		<td>contact</td>
		<td>password</td>
	</tr>
<tr>
		<td>1</td>
		<td><?php echo $n;?></td>
		<td><?php echo $un;?></td>
		<td><?php echo $a;?></td>
		<td><?php echo $c;?></td>
		<td><?php echo $p;?></td>
	</tr>


</table>