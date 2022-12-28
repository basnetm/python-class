<?php
$host="localhost";
$user="root";
$password="";
$database="manoj";
$connect=mysqli_connect($host,$user,$password,$database);

$n=$_POST['first_name'];
$a=$_POST['address'];
$e=$_POST['email'];
$p=$_POST['password'];

$insert_data="INSERT INTO `basnet` (`name`, `address`, `email`, `password`) VALUES ('$n', '$a', '$e', '$p')";
$result=mysqli_query($connect,$insert_data);
if($result)
	echo"inserted successfully";
else
	echo "sorry ! try again";
	?>


	<table width="50%" border="1">
	<tr>
		
		<td>name</td>
		<td>email</td>

		
		<td>address</td>
		
		<td>password</td>
	</tr>
	<tr>
		<td><?php echo $n;?></td>
		<td><?php echo $e;?></td>
		
		<td><?php echo $a;?></td>
		
		<td><?php echo $p;?></td>
	</tr>
	


</table>