<?php
$host="localhost";
$password="";
$user="root";
$db="manoj";
$connect=mysqli_connect($host,$user,$password,$db);

$f=$_POST['field'];
$v=$_POST['value'];
?>

<table border="1" width="50%">
	<tr>
	<td>name</td>
	<td>address</td>
	<td>roll</td>
</tr>
<?php
$select="select * from reg";
$result=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row['name']."</td>
		<td>".$row['address']."</td>
		<td>".$row['roll']."</td></tr>";	 
}
?>
</table>

<table border="1" width="50%">
	<tr>
	<td>name</td>
	<td>address</td>
	<td>roll</td>
</tr>
<?php
$select="select * from reg where `$f`>'$v'";
$result=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row['name']."</td>
		<td>".$row['address']."</td>
		<td>".$row['roll']."</td></tr>";	 
}
?>
</table>
<form method="post">
	field:<input type="text" name="field"><br><br>
	record:<input type="text" name="value"><br>
	<input type="submit" name="go">
	
</form>